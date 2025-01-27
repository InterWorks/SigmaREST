<?php

namespace InterWorks\SigmaREST;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use InterWorks\SigmaREST\API\Authentication;
use InterWorks\SigmaREST\API\Connections;
use InterWorks\SigmaREST\API\Credentials;
use InterWorks\SigmaREST\API\Datasets;
use InterWorks\SigmaREST\API\Favorites;
use InterWorks\SigmaREST\API\Files;
use InterWorks\SigmaREST\API\Grants;
use InterWorks\SigmaREST\API\Members;
use InterWorks\SigmaREST\API\Tags;
use InterWorks\SigmaREST\API\Teams;
use InterWorks\SigmaREST\API\Templates;
use InterWorks\SigmaREST\API\Translations;
use InterWorks\SigmaREST\API\UserAttributes;
use InterWorks\SigmaREST\API\Workbooks;
use InterWorks\SigmaREST\API\Workspaces;

class SigmaREST
{
    /**
     * API category traits.
     */
    use Authentication;
    use Connections;
    use Credentials;
    use Datasets;
    use Favorites;
    use Files;
    use Grants;
    use Members;
    use Tags;
    use Teams;
    use Templates;
    use Translations;
    use UserAttributes;
    use Workbooks;
    use Workspaces;

    /**
     * Whether to return the response object.
     *
     * @var bool
     */
    private $returnResponseObject;

    /**
     * The access token for the Sigma API.
     *
     * @var string
     */
    private $token;

    /**
     * The URL for the Sigma API.
     *
     * @var string
     */
    private $url;

    /**
     * Constructor for the SigmaREST class.
     *
     * @return void
     */
    public function __construct(bool $returnResponseObject = false)
    {
        // Set URL property
        $this->url = config('sigmarest.url');

        // Validate that the URL is set
        if (is_null($this->url)) {
            throw new Exception(
                'The Sigma URL (SIGMA_API_URL) is not set in the env file.'
                . ' Find this in the Sigma application > Administration > Site labeled "Cloud".'
            );
        }

        // Set return response object property
        $this->returnResponseObject = $returnResponseObject;

        // Authenticate this SigmaREST object
        $this->_authenticate();
    }

    /**
     * Authenticate this SigmaREST object.
     *
     * @return void
     */
    private function _authenticate(): void
    {
        // Check if the access token is cached
        if (cache()->has('sigma_access_token')) {
            $this->token = cache('sigma_access_token');
            return;
        }

        // Get the access token response
        $tokenResponse = $this->getAccessToken();

        // Set the access token
        $this->token = $this->returnResponseObject
            ? $tokenResponse->json()['access_token']
            : $tokenResponse;

        // Cache the access token for one hour
        cache(['sigma_access_token' => $this->token], 60);
    }

    /**
     * Calls a REST API.
     *
     * @throws Exception
     *
     * @param string               $url
     * @param array<string, mixed> $args
     * @param string               $method
     *
     * @return Response
     */
    public function call(
        string $url,
        array $args = [],
        array $headers = [],
        string $method = 'GET',
        bool $asForm = false
    ): Response {
        // Prepare URL
        $apiBase = '/v2/';
        $url     = $this->url . $apiBase . $url;

        // Prepare headers
        $headers = array_merge($headers, [
            'Content-Type' => 'application/json',
        ]);
        if (!isset($headers['Authorization']) && !is_null($this->token)) {
            $headers['Authorization'] = 'Bearer ' . $this->token;
        }

        // Configure the call
        $call = Http::withHeaders($headers)
            ->timeout(60)
            ->withOptions(['verify' => false]);

        // Determine if the args should be sent as a form
        if ($asForm) {
            $call->asForm();
        }

        // Determine the request function
        $requestFunction = strtolower($method);

        // Make the call
        $response = $call->$requestFunction($url, $args);

        // Catch errors
        if ($response->failed() && !$this->returnResponseObject) {
            // Redact these args
            $redactThese = [
                'Authorization',
            ];
            foreach ($redactThese as $redactThis) {
                if (array_key_exists($redactThis, $args)) {
                    $args[$redactThis] = 'REDACTED';
                }
                if (array_key_exists($redactThis, $headers)) {
                    $headers[$redactThis] = 'REDACTED';
                }
            }

            throw new \Exception(
                'Failed to make a REST API call. '
                . 'URL: ' . $url . '. '
                . 'Method: ' . $method . '. '
                . 'Args: ' . json_encode($args) . '. '
                . 'Headers: ' . json_encode($headers) . '. '
                . 'Status: ' . $response->status() . '. '
                . 'Response: ' . $response->body()
            );
        }

        // Return the response object
        return $response;
    }

    /**
     * Get the access token for the Sigma API instance.
     *
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * Get the URL for the Sigma API instance.
     *
     * @return string
     */
    public function getURL(): string
    {
        return $this->url;
    }

    /**
     * Set the access token for the Sigma API instance.
     *
     * @param string $token
     *
     * @return void
     */
    public function setToken(string $token): void
    {
        $this->token = $token;
    }
}

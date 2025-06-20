<?php

namespace InterWorks\SigmaREST\API;

use Illuminate\Http\Client\Response;
use InterWorks\SigmaREST\Exceptions\SigmaAuthenticationException;
use InterWorks\SigmaREST\Exceptions\SigmaConfigurationException;

trait Authentication
{
    /**
     * Generate an access token for the Sigma API. Valid for one hour.
     *
     * @throws \Exception
     *
     * @return string|Response
     */
    public function getAccessToken(): mixed
    {
        // Check if we have the client ID and secret
        $clientID     = gettype(config('sigmarest.client-id')) == 'string' ? config('sigmarest.client-id') : '';
        $clientSecret = gettype(config('sigmarest.client-secret')) == 'string' ? config('sigmarest.client-secret') : '';
        if (empty($clientID) || empty($clientSecret)) {
            throw new SigmaConfigurationException(
                'Client ID (SIGMA_CLIENT_ID) and secret (SIGMA_CLIENT_SECRET) are not set in env file.'
                . ' If you don\'t have these values, check out this doc: '
                . 'https://help.sigmacomputing.com/reference/generate-client-credentials'
            );
        }

        // Prepare URL
        $url = 'auth/token';

        // Prepare args
        $args = [
            'grant_type' => 'client_credentials',
        ];

        // Prepare headers
        $headers = [
            'Authorization' => 'Basic ' . base64_encode("$clientID:$clientSecret"),
            'Content-Type'  => 'application/x-www-form-urlencoded',
        ];

        // Make the call
        $response = $this->call(
            url    : $url,
            args   : $args,
            headers: $headers,
            method : 'POST',
            asForm : true
        );

        // Transform response to an array
        /** @var array<string, mixed> $responseArr */
        $responseArr = $response->json();

        // Check if the token is present
        if (!isset($responseArr['access_token'])) {
            throw new SigmaAuthenticationException('Access token not found in response: ' . $response->body());
        }

        // Return the access token
        return $this->returnResponseObject
            ? $response
            : (is_string($responseArr['access_token']) ? $responseArr['access_token'] : '');
    }

    /**
     * Get the identity and authentication status of the current user.
     * https://help.sigmacomputing.com/reference/whoami
     *
     * @return mixed[]|Response
     */
    public function whoAmI(): mixed
    {
        // Prepare URL
        $url = 'whoami';

        // Make the call
        $response = $this->call($url);

        // Return the response or the data as an array
        return $this->returnResponseObject
            ? $response
            : (array) $response->json();
    }
}

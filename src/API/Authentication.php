<?php

namespace InterWorks\SigmaREST\API;

use Illuminate\Http\Response;

trait Authentication
{
    /**
     * Generate an access token for the Sigma API. Valid for one hour.
     *
     * @throws \Exception
     *
     * @return mixed[]|Response
     */
    public function getAccessToken(): mixed
    {
        // Check if we have the client ID and secret
        if (!config('sigmarest.client-id') || !config('sigmarest.client-secret')) {
            throw new \Exception(
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
            'Authorization' => 'Basic '
                . base64_encode(
                    config('sigmarest.client-id') . ':' . config('sigmarest.client-secret')
                ),
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
        $responseArr = $response->json();

        // Check if the token is present
        if (!isset($responseArr['access_token'])) {
            throw new \Exception('Access token not found in response: ' . $response->body());
        }

        // Return the access token
        return $this->returnResponseObject
            ? $response
            : $responseArr['access_token'];
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
            : $response->json();
    }
}

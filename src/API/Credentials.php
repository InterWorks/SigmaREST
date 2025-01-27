<?php

namespace InterWorks\SigmaREST\API;

use Illuminate\Http\Client\Response;

trait Credentials
{
    /**
     * Create API credentials for Sigma.
     * https://help.sigmacomputing.com/reference/createcredentials
     *
     * @param array<string, mixed> $args The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function createCredentials(array $args = []): mixed
    {
        // Prepare URL
        $url = 'credentials';

        // Make the call
        $response = $this->call(
            url   : $url,
            args  : $args,
            method: 'POST'
        );

        // Return the response or the data as an array
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Delete API credentials for Sigma.
     * https://help.sigmacomputing.com/reference/deletecredentials
     *
     * @param string $clientID The client ID of the credentials to delete.
     *
     * @return bool|Response
     */
    public function deleteCredentials(string $clientID): bool|Response
    {
        // Prepare URL
        $url = "credentials/$clientID";

        // Make the call
        $response = $this->call(
            url   : $url,
            method: 'DELETE'
        );

        // Return the response or the success status as a boolean
        return $this->returnResponseObject
            ? $response
            : $response->successful();
    }
}

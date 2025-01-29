<?php

namespace InterWorks\SigmaREST\API;

use Illuminate\Http\Client\Response;

trait Grants
{
    /**
     * Create or update a grant for an object in Sigma.
     * https://help.sigmacomputing.com/reference/creategrant
     *
     * @param array<string, mixed> $args The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function createOrUpdateGrant(array $args = []): mixed
    {
        // Prepare URL
        $url = 'grants';

        // Make the call
        $response = $this->call(
            url   : $url,
            args  : $args,
            method: 'POST'
        );

        // Return the response or the data as an array
        return $this->returnResponseObject
            ? $response
            : (array) $response->json();
    }

    /**
     * Delete a grant in Sigma.
     * https://help.sigmacomputing.com/reference/deletegrant
     *
     * @param string $grantId The ID of the grant to delete.
     *
     * @return bool|Response
     */
    public function deleteGrant(string $grantId): bool|Response
    {
        // Prepare URL
        $url = "grants/$grantId";

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

    /**
     * Get a grant object in Sigma.
     * https://help.sigmacomputing.com/reference/getgrant
     *
     * @param string $grantId The ID of the grant to get.
     *
     * @return mixed[]|Response
     */
    public function getGrant(string $grantId): mixed
    {
        // Prepare URL
        $url = "grants/$grantId";

        // Make the call
        $response = $this->call($url);

        // Return the response or the data as an array
        return $this->returnResponseObject
            ? $response
            : (array) $response->json();
    }

    /**
     * Get grants for a given object in Sigma.
     * https://help.sigmacomputing.com/reference/listgrants
     *
     * @param array<string, mixed> $args The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getGrants(array $args = []): mixed
    {
        // Prepare URL
        $url = 'grants';

        // Make the call
        $response = $this->call(
            url : $url,
            args: $args
        );

        // Return the response or the data as an array
        return $this->returnResponseObject
            ? $response
            : (array) $response->json();
    }
}

<?php

namespace InterWorks\SigmaREST\API;

use Illuminate\Http\Client\Response;

trait Favorites
{
    /**
     * Add a favorite document for a user in Sigma.
     * https://help.sigmacomputing.com/reference/addfavorite
     *
     * @param array<string, mixed> $args The arguments to pass to the API.
     *
     * @return bool|Response
     */
    public function favoriteDocument(array $args = []): bool|Response
    {
        // Prepare URL
        $url = 'favorites';

        // Make the call
        $response = $this->call(
            url   : $url,
            args  : $args,
            method: 'POST'
        );

        // Return the response or the success status as a boolean
        return $this->returnResponseObject
            ? $response
            : $response->successful();
    }

    /**
     * Get favorite documents for a user in Sigma.
     * https://help.sigmacomputing.com/reference/listfavorites
     *
     * @param string               $memberID The ID of the user to get the favorites for.
     * @param array<string, mixed> $args     The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getFavoriteDocuments(string $memberID, array $args = []): mixed
    {
        // Prepare URL
        $url = "favorites/members/$memberID";

        // Make the call
        $response = $this->call(
            url : $url,
            args: $args
        );

        // Return the response or the data as an array
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Unfavorite a document for a user in Sigma.
     * https://help.sigmacomputing.com/reference/removefavorite
     *
     * @param string $memberID The ID of the user to unfavorite the document for.
     * @param string $inodeID  The ID of the document to unfavorite.
     *
     * @return bool|Response
     */
    public function unfavoriteDocument(string $memberID, string $inodeID): bool|Response
    {
        // Prepare URL
        $url = "favorites/member/$memberID/file/$inodeID";

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

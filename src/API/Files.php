<?php

namespace InterWorks\SigmaREST\API;

use Illuminate\Http\Client\Response;

trait Files
{
    /**
     * Create a file in Sigma.
     * https://help.sigmacomputing.com/reference/filescreate
     *
     * @param array<string, mixed> $args The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function createFile(array $args = []): mixed
    {
        // Prepare URL
        $url = 'files';

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
     * Delete a file in Sigma.
     * https://help.sigmacomputing.com/reference/filesdelete
     *
     * @param string $inodeID The ID of the file to delete.
     *
     * @return bool|Response
     */
    public function deleteFile(string $inodeID): bool|Response
    {
        // Prepare URL
        $url = "files/$inodeID";

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
     * Get file information in Sigma.
     * https://help.sigmacomputing.com/reference/filesget
     *
     * @param string $inodeID The ID of the file to get.
     *
     * @return mixed[]|Response
     */
    public function getFile(string $inodeID): mixed
    {
        // Prepare URL
        $url = "files/$inodeID";

        // Make the call
        $response = $this->call($url);

        // Return the response or the data as an array
        return $this->returnResponseObject
            ? $response
            : (array) $response->json();
    }

    /**
     * Get files in Sigma.
     * https://help.sigmacomputing.com/reference/fileslist
     *
     * @param array<string, mixed> $args The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getFiles(array $args = []): mixed
    {
        // Prepare URL
        $url = 'files';

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

    /**
     * Update a file in Sigma.
     * https://help.sigmacomputing.com/reference/filesupdate
     *
     * @param string               $inodeID The ID of the file to update.
     * @param array<string, mixed> $args    The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function updateFile(string $inodeID, array $args = []): mixed
    {
        // Prepare URL
        $url = "files/$inodeID";

        // Make the call
        $response = $this->call(
            url   : $url,
            args  : $args,
            method: 'PATCH'
        );

        // Return the response or the data as an array
        return $this->returnResponseObject
            ? $response
            : (array) $response->json();
    }
}

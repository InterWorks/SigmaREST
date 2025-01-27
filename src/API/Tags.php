<?php

namespace InterWorks\SigmaREST\API;

use Illuminate\Http\Client\Response;

trait Tags
{
    /**
     * Create a tag in Sigma.
     * https://help.sigmacomputing.com/reference/createversiontag
     *
     * @param array<string, mixed> $args The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function createTag(array $args = []): mixed
    {
        // Prepare URL
        $url = 'tags';

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
     * Delete a tag in Sigma.
     * https://help.sigmacomputing.com/reference/deleteversiontag
     *
     * @param string $tagID The ID of the tag to delete.
     *
     * @return bool|Response
     */
    public function deleteTag(string $tagID): bool|Response
    {
        // Prepare URL
        $url = "tags/$tagID";

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
     * Get tags in Sigma.
     * https://help.sigmacomputing.com/reference/listversiontag
     *
     * @param array<string, mixed> $args The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getTags(array $args = []): mixed
    {
        // Prepare URL
        $url = 'tags';

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
     * Get workbooks for a tag in Sigma.
     * https://help.sigmacomputing.com/reference/listworkbooksfortag
     *
     * @param string               $tagID The ID of the tag to get the workbooks for.
     * @param array<string, mixed> $args  The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getTagWorkbooks(string $tagID, array $args = []): mixed
    {
        // Prepare URL
        $url = "tags/$tagID/workbooks";

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
}

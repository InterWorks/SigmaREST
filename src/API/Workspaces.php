<?php

namespace InterWorks\SigmaREST\API;

use Illuminate\Http\Client\Response;

trait Workspaces
{
    /**
     * Create a workspace in Sigma.
     * https://help.sigmacomputing.com/reference/createworkspace
     *
     * @param array<string, mixed> $args The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function createWorkspace(array $args = []): mixed
    {
        // Prepare URL
        $url = 'workspaces';

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
     * Delete a workspace in Sigma.
     * https://help.sigmacomputing.com/reference/deleteworkspace
     *
     * @param string $workspaceID The ID of the workspace to delete.
     *
     * @return bool|Response
     */
    public function deleteWorkspace(string $workspaceID): bool|Response
    {
        // Prepare URL
        $url = "workspaces/$workspaceID";

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
     * Delete a grant for a workspace in Sigma.
     * https://help.sigmacomputing.com/reference/deleteworkspacegrant
     *
     * @param string $workspaceID The ID of the workspace to delete a grant for.
     * @param string $grantID     The ID of the grant to delete.
     *
     * @return bool|Response
     */
    public function deleteWorkspaceGrant(string $workspaceID, string $grantID): bool|Response
    {
        // Prepare URL
        $url = "workspaces/$workspaceID/grants/$grantID";

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
     * Get a workspace in Sigma.
     * https://help.sigmacomputing.com/reference/getworkspace
     *
     * @param string $workspaceID The ID of the workspace to get.
     *
     * @return mixed[]|Response
     */
    public function getWorkspace(string $workspaceID): mixed
    {
        // Prepare URL
        $url = "workspaces/$workspaceID";

        // Make the call
        $response = $this->call($url);

        // Return the response or the data as an array
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Get grants for a workspace in Sigma.
     * https://help.sigmacomputing.com/reference/listworkspacegrants
     *
     * @param string               $workspaceID The ID of the workspace to get grants for.
     * @param array<string, mixed> $args        The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getWorkspaceGrants(string $workspaceID, array $args = []): mixed
    {
        // Prepare URL
        $url = "workspaces/$workspaceID/grants";

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
     * Get workspaces in Sigma.
     * https://help.sigmacomputing.com/reference/listworkspaces
     *
     * @param array<string, mixed> $args The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getWorkspaces(array $args = []): mixed
    {
        // Prepare URL
        $url = 'workspaces';

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
     * Grant permissions to a workspace in Sigma.
     * https://help.sigmacomputing.com/reference/createworkspacegrant
     *
     * @param string               $workspaceID The ID of the workspace to grant permissions to.
     * @param array<string, mixed> $args        The arguments to pass to the API.
     *
     * @return bool|Response
     */
    public function grantWorkspacePermissions(string $workspaceID, array $args = []): bool|Response
    {
        // Prepare URL
        $url = "workspaces/$workspaceID/grants";

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
     * Update a workspace in Sigma.
     * https://help.sigmacomputing.com/reference/updateworkspace
     *
     * @param string               $workspaceID The ID of the workspace to update.
     * @param array<string, mixed> $args        The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function updateWorkspace(string $workspaceID, array $args = []): mixed
    {
        // Prepare URL
        $url = "workspaces/$workspaceID";

        // Make the call
        $response = $this->call(
            url   : $url,
            args  : $args,
            method: 'PATCH'
        );

        // Return the response or the data as an array
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }
}

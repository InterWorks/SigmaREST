<?php

namespace InterWorks\SigmaREST\API;

use Illuminate\Http\Client\Response;

trait Teams
{
    /**
     * Create a team in Sigma.
     * https://help.sigmacomputing.com/reference/createteam
     *
     * @param array<string, mixed> $args The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function createTeam(array $args = []): mixed
    {
        // Prepare URL
        $url = 'teams';

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
     * Delete a team in Sigma.
     * https://help.sigmacomputing.com/reference/deleteteam
     *
     * @param string $teamID The ID of the team to delete.
     *
     * @return bool|Response
     */
    public function deleteTeam(string $teamID): bool|Response
    {
        // Prepare URL
        $url = "teams/$teamID";

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
     * Get a team in Sigma.
     * https://help.sigmacomputing.com/reference/getteam
     *
     * @param string $teamID The ID of the team to get.
     *
     * @return mixed[]|Response
     */
    public function getTeam(string $teamID): mixed
    {
        // Prepare URL
        $url = "teams/$teamID";

        // Make the call
        $response = $this->call($url);

        // Return the response or the data as an array
        return $this->returnResponseObject
            ? $response
            : (array) $response->json();
    }

    /**
     * Get members of a team in Sigma.
     * https://help.sigmacomputing.com/reference/getteammembers
     *
     * @param string               $teamID The ID of the team to get the members for.
     * @param array<string, mixed> $args   The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getTeamMembers(string $teamID, array $args = []): mixed
    {
        // Prepare URL
        $url = "teams/$teamID/members";

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
     * Get teams in Sigma.
     * https://help.sigmacomputing.com/reference/listteams
     *
     * @param array<string, mixed> $args The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getTeams(array $args = []): mixed
    {
        // Prepare URL
        $url = 'teams';

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
     * Get user attributes for a team in Sigma.
     * https://help.sigmacomputing.com/reference/getteamuserattributeassignments
     *
     * @param string               $teamID The ID of the team to get the user attributes for.
     * @param array<string, mixed> $args   The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getTeamUserAttributes(string $teamID, array $args = []): mixed
    {
        // Prepare URL
        $url = "teams/$teamID/user-attribute";

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
     * Update a team in Sigma.
     * https://help.sigmacomputing.com/reference/updateteam
     *
     * @param string               $teamID The ID of the team to update.
     * @param array<string, mixed> $args   The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function updateTeam(string $teamID, array $args = []): mixed
    {
        // Prepare URL
        $url = "teams/$teamID";

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

    /**
     * Update members of a team in Sigma.
     * https://help.sigmacomputing.com/reference/updateteammembers
     *
     * @param string               $teamID The ID of the team to update the members for.
     * @param array<string, mixed> $args   The arguments to pass to the API.
     *
     * @return bool|Response
     */
    public function updateTeamMembers(string $teamID, array $args = []): bool|Response
    {
        // Prepare URL
        $url = "teams/$teamID/members";

        // Make the call
        $response = $this->call(
            url   : $url,
            args  : $args,
            method: 'PATCH'
        );

        // Return the response or the success status as a boolean
        return $this->returnResponseObject
            ? $response
            : $response->successful();
    }
}

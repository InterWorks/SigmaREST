<?php

namespace InterWorks\SigmaREST\API;

use Illuminate\Http\Client\Response;

trait Members
{
    /**
     * Create a user in Sigma.
     * https://help.sigmacomputing.com/reference/createmember
     *
     * @param array<string, mixed> $args The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function createMember(array $args = []): mixed
    {
        // Prepare URL
        $url = 'members';

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
     * Deactivate a user in Sigma.
     * https://help.sigmacomputing.com/reference/deletemember
     *
     * @param string $memberID The ID of the user to deactivate.
     *
     * @return bool|Response
     */
    public function deactivateMember(string $memberID): bool|Response
    {
        // Prepare URL
        $url = "members/$memberID";

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
     * Get favorite files for a user in Sigma.
     * https://help.sigmacomputing.com/reference/listfavoriteinodes
     *
     * @param string               $memberID The ID of the user to get the favorite files for.
     * @param array<string, mixed> $args     The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getFavoriteMemberFiles(string $memberID, array $args = []): mixed
    {
        // Prepare URL
        $url = "members/$memberID/files/favorite";

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
     * Get a user in Sigma.
     * https://help.sigmacomputing.com/reference/getmember
     *
     * @param string $memberID The ID of the user to get.
     *
     * @return mixed[]|Response
     */
    public function getMember(string $memberID): mixed
    {
        // Prepare URL
        $url = "members/$memberID";

        // Make the call
        $response = $this->call($url);

        // Return the response or the data as an array
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Get a user's files in Sigma.
     * https://help.sigmacomputing.com/reference/listaccessibleinodes
     *
     * @param string               $memberID The ID of the user to get the files for.
     * @param array<string, mixed> $args     The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getMemberFiles(string $memberID, array $args = []): mixed
    {
        // Prepare URL
        $url = "members/$memberID/files";

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
     * Get the users in Sigma.
     * https://help.sigmacomputing.com/reference/listmembers
     *
     * @param array<string, mixed> $args The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getMembers(array $args = []): mixed
    {
        // Prepare URL
        $url = 'members';

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
     * Get a user's teams in Sigma.
     * https://help.sigmacomputing.com/reference/listmemberteams
     *
     * @param string               $memberID The ID of the user to get the teams for.
     * @param array<string, mixed> $args     The arguments to pass to the API.
     */
    public function getMemberTeams(string $memberID, array $args = []): mixed
    {
        // Prepare URL
        $url = "members/$memberID/teams";

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
     * Get recent files for a user in Sigma.
     * https://help.sigmacomputing.com/reference/listrecentinodes
     *
     * @param string               $memberID The ID of the user to get the recent files for.
     * @param array<string, mixed> $args     The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getRecentMemberFiles(string $memberID, array $args = []): mixed
    {
        // Prepare URL
        $url = "members/$memberID/files/recent";

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
     * Update a user in Sigma.
     * https://help.sigmacomputing.com/reference/updatemember
     *
     * @param string               $memberID The ID of the user to update.
     * @param array<string, mixed> $args     The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function updateMember(string $memberID, array $args = []): mixed
    {
        // Prepare URL
        $url = "members/$memberID";

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

<?php

namespace InterWorks\SigmaREST\API;

use Illuminate\Http\Client\Response;

trait UserAttributes
{
    /**
     * Create a user attribute in Sigma.
     * https://help.sigmacomputing.com/reference/createuserattribute
     *
     * @param array<string, mixed> $args The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function createUserAttribute(array $args): mixed
    {
        // Prepare URL
        $url = 'user-attributes';

        // Make the call
        $response = $this->call(
            url   : $url,
            args  : $args,
            method: 'POST'
        );

        // Return the response or the JSON-decoded response
        return $this->returnResponseObject
            ? $response
            : (array) $response->json();
    }

    /**
     * Delete a user attribute for a team in Sigma.
     * https://help.sigmacomputing.com/reference/deleteuserattributeforteam
     *
     * @param string $attributeID The ID of the user attribute to delete.
     * @param string $teamID      The ID of the team to delete the user attribute for.
     *
     * @return bool|Response
     */
    public function deleteUserAttributeForTeam(string $attributeID, string $teamID): bool|Response
    {
        // Prepare URL
        $url = "user-attributes/$attributeID/teams/$teamID";

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
     * Delete a user attribute for a user in Sigma.
     * https://help.sigmacomputing.com/reference/deleteuserattributeforuser
     *
     * @param string $attributeID The ID of the user attribute to delete.
     * @param string $userID      The ID of the user to delete the user attribute for.
     *
     * @return bool|Response
     */
    public function deleteUserAttributeForUser(string $attributeID, string $userID): bool|Response
    {
        // Prepare URL
        $url = "user-attributes/$attributeID/users/$userID";

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
     * Get a user attribute in Sigma.
     * https://help.sigmacomputing.com/reference/getuserattribute
     *
     * @param string $attributeID The ID of the user attribute to get.
     *
     * @return mixed[]|Response
     */
    public function getUserAttribute(string $attributeID): mixed
    {
        // Prepare URL
        $url = "user-attributes/$attributeID";

        // Make the call
        $response = $this->call($url);

        // Return the response or the JSON-decoded response
        return $this->returnResponseObject
            ? $response
            : (array) $response->json();
    }

    /**
     * Get all user attributes in Sigma.
     * https://help.sigmacomputing.com/reference/listuserattributes
     *
     * @param array<string, mixed> $args The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getUserAttributes(array $args = []): mixed
    {
        // Prepare URL
        $url = 'user-attributes';

        // Make the call
        $response = $this->call(
            url : $url,
            args: $args
        );

        // Return the response or the JSON-decoded response
        return $this->returnResponseObject
            ? $response
            : (array) $response->json();
    }

    /**
     * Get the teams for a user attribute in Sigma.
     * https://help.sigmacomputing.com/reference/getuserattributeteamassignments
     *
     * @param string               $attributeID The ID of the user attribute to get the teams for.
     * @param array<string, mixed> $args        The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getUserAttributeTeamAssignments(string $attributeID, array $args = []): mixed
    {
        // Prepare URL
        $url = "user-attributes/$attributeID/teams";

        // Make the call
        $response = $this->call(
            url : $url,
            args: $args
        );

        // Return the response or the JSON-decoded response
        return $this->returnResponseObject
            ? $response
            : (array) $response->json();
    }

    /**
     * Get users by user attribute in Sigma.
     * https://help.sigmacomputing.com/reference/getuserattributeuserassignments
     *
     * @param string               $attributeID The ID of the user attribute to get the users for.
     * @param array<string, mixed> $args        The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getUsersByUserAttribute(string $attributeID, array $args = []): mixed
    {
        // Prepare URL
        $url = "user-attributes/$attributeID/users";

        // Make the call
        $response = $this->call(
            url : $url,
            args: $args
        );

        // Return the response or the JSON-decoded response
        return $this->returnResponseObject
            ? $response
            : (array) $response->json();
    }

    /**
     * Set a user attribute for one or more teams in Sigma.
     * https://help.sigmacomputing.com/reference/setuserattributeforteams
     *
     * @param string               $attributeID The ID of the user attribute to set.
     * @param array<string, mixed> $args        The arguments to pass to the API.
     *
     * @return bool|Response
     */
    public function setUserAttributeForTeams(string $attributeID, array $args = []): bool|Response
    {
        // Prepare URL
        $url = "user-attributes/$attributeID/teams";

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
     * Set a user attribute for one or more users in Sigma.
     * https://help.sigmacomputing.com/reference/setuserattributeforusers
     *
     * @param string               $attributeID The ID of the user attribute to set.
     * @param array<string, mixed> $args        The arguments to pass to the API.
     *
     * @return bool|Response
     */
    public function setUserAttributeForUsers(string $attributeID, array $args = []): bool|Response
    {
        // Prepare URL
        $url = "user-attributes/$attributeID/users";

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
     * Update a user attribute for one or more teams in Sigma.
     * https://help.sigmacomputing.com/reference/updateuserattributeforteams
     *
     * @param string               $attributeID The ID of the user attribute to update.
     * @param array<string, mixed> $args        The arguments to pass to the API.
     *
     * @return bool|Response
     */
    public function updateUserAttributeForTeams(string $attributeID, array $args = []): bool|Response
    {
        // Prepare URL
        $url = "user-attributes/$attributeID/teams";

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

    /**
     * Update a user attribute for one or more users in Sigma.
     * https://help.sigmacomputing.com/reference/updateuserattributeforusers
     *
     * @param string               $attributeID The ID of the user attribute to update.
     * @param array<string, mixed> $args        The arguments to pass to the API.
     *
     * @return bool|Response
     */
    public function updateUserAttributeForUsers(string $attributeID, array $args = []): bool|Response
    {
        // Prepare URL
        $url = "user-attributes/$attributeID/users";

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

<?php

namespace InterWorks\SigmaREST\API;

use Illuminate\Http\Client\Response;

trait Connections
{
    /**
     * Add grants to a connection in Sigma.
     * https://help.sigmacomputing.com/reference/createconnectiongrant
     *
     * @param string               $connectionID The ID of the connection to add grants to.
     * @param array<string, mixed> $args         The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function addConnectionGrants(string $connectionID, array $args = []): mixed
    {
        // Prepare URL
        $url = "connections/$connectionID/grants";

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
     * Add grants to a connection path in Sigma.
     * https://help.sigmacomputing.com/reference/createconnectionpathgrant
     *
     * @param string               $connectionPathID The ID of the connection path to add grants to.
     * @param array<string, mixed> $args             The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function addConnectionPathGrants(string $connectionPathID, array $args = []): mixed
    {
        // Prepare URL
        $url = "connections/paths/$connectionPathID/grants";

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
     * Create a connection in Sigma.
     * https://help.sigmacomputing.com/reference/createconnection
     *
     * @param array<string, mixed> $args The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function createConnection(array $args = []): mixed
    {
        // Prepare URL
        $url = 'connections';

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
     * Delete a connection in Sigma.
     * https://help.sigmacomputing.com/reference/deleteconnection
     *
     * @param string $connectionID The ID of the connection to delete.
     *
     * @return bool|Response
     */
    public function deleteConnection(string $connectionID): bool|Response
    {
        // Prepare URL
        $url = "connections/$connectionID";

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
     * Delete grants from a connection in Sigma.
     * https://help.sigmacomputing.com/reference/deleteconnectiongrant
     *
     * @param string $connectionID The ID of the connection to delete grants from.
     * @param string $grantID      The ID of the grant to delete.
     *
     * @return bool|Response
     */
    public function deleteConnectionGrant(string $connectionID, string $grantID): bool|Response
    {
        // Prepare URL
        $url = "connections/$connectionID/grants/$grantID";

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
     * Delete grants from a connection path in Sigma.
     * https://help.sigmacomputing.com/reference/deleteconnectionpathgrant
     *
     * @param string $connectionPathID The ID of the connection path to delete grants from.
     * @param string $grantID          The ID of the grant to delete.
     *
     * @return bool|Response
     */
    public function deleteConnectionPathGrant(string $connectionPathID, string $grantID): bool|Response
    {
        // Prepare URL
        $url = "connections/paths/$connectionPathID/grants/$grantID";

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
     * Get connection details in Sigma.
     * https://help.sigmacomputing.com/reference/getconnection
     *
     * @param string $connectionID The ID of the connection to get.
     *
     * @return mixed[]|Response
     */
    public function getConnectionDetails(string $connectionID): mixed
    {
        // Prepare URL
        $url = "connections/$connectionID";

        // Make the call
        $response = $this->call($url);

        // Return the response or the data as an array
        return $this->returnResponseObject
            ? $response
            : (array) $response->json();
    }

    /**
     * Get grants for a connection in Sigma.
     * https://help.sigmacomputing.com/reference/listconnectiongrants
     *
     * @param string               $connectionID The ID of the connection to list grants for.
     * @param array<string, mixed> $args         The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getConnectionGrants(string $connectionID, array $args = []): mixed
    {
        // Prepare URL
        $url = "connections/$connectionID/grants";

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
     * Get connection path for a table in Sigma.
     * https://help.sigmacomputing.com/reference/getinodeconnectionpath
     *
     * @param string $inodeID The ID of the inode to get the connection path for.
     *
     * @return mixed[]|Response
     */
    public function getConnectionPathForTable(string $inodeID): mixed
    {
        // Prepare URL
        $url = "connections/paths/$inodeID";

        // Make the call
        $response = $this->call($url);

        // Return the response or the data as an array
        return $this->returnResponseObject
            ? $response
            : (array) $response->json();
    }

    /**
     * Get connection path grants in Sigma.
     * https://help.sigmacomputing.com/reference/listconnectionpathgrants
     *
     * @param string               $connectionPathID The ID of the connection path to list grants for.
     * @param array<string, mixed> $args             The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getConnectionPathGrants(string $connectionPathID, array $args = []): mixed
    {
        // Prepare URL
        $url = "connections/paths/$connectionPathID/grants";

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
     * Get connection paths in Sigma.
     * https://help.sigmacomputing.com/reference/listconnectionpaths
     *
     * @param array<string, mixed> $args The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getConnectionPaths(array $args = []): mixed
    {
        // Prepare URL
        $url = 'connections/paths';

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
     * Get connections in Sigma.
     * https://help.sigmacomputing.com/reference/listconnections
     *
     * @param array<string, mixed> $args The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getConnections(array $args = []): mixed
    {
        // Prepare URL
        $url = 'connections';

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
     * Look up connection by path in Sigma.
     * https://help.sigmacomputing.com/reference/lookupconnection
     *
     * @param string               $connectionID The ID of the connection to list paths for.
     * @param array<string, mixed> $args         The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getConnectionsByPath(string $connectionID, array $args = []): mixed
    {
        // Prepare URL
        $url = "connection/$connectionID/lookup";

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
     * Sync a connection by path in Sigma.
     * https://help.sigmacomputing.com/reference/syncconnectionpath
     *
     * @param string               $connectionID The ID of the connection to sync.
     * @param array<string, mixed> $args         The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function syncConnectionByPath(string $connectionID, array $args = []): mixed
    {
        // Prepare URL
        $url = "connections/$connectionID/sync";

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
     * Test a connection in Sigma.
     * https://help.sigmacomputing.com/reference/testconnection
     *
     * @param string $connectionID The ID of the connection to test.
     *
     * @return mixed[]|Response
     */
    public function testConnection(string $connectionID): mixed
    {
        // Prepare URL
        $url = "connections/$connectionID/test";

        // Make the call
        $response = $this->call($url);

        // Return the response or the data as an array
        return $this->returnResponseObject
            ? $response
            : (array) $response->json();
    }

    /**
     * Update a connection in Sigma.
     * https://help.sigmacomputing.com/reference/updateconnectiondeprecated
     *
     * @param string               $connectionID The ID of the connection to update.
     * @param array<string, mixed> $args         The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function updateConnection(string $connectionID, array $args = []): mixed
    {
        // Prepare URL
        $url = "connections/$connectionID";

        // Make the call
        $response = $this->call(
            url   : $url,
            args  : $args,
            method: 'PUT'
        );

        // Return the response or the data as an array
        return $this->returnResponseObject
            ? $response
            : (array) $response->json();
    }
}

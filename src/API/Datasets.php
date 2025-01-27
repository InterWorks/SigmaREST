<?php

namespace InterWorks\SigmaREST\API;

use Illuminate\Http\Client\Response;

trait Datasets
{
    /**
     * Grant permissions on a dataset in Sigma.
     * https://help.sigmacomputing.com/reference/createdatasetgrant
     *
     * @param string $datasetID The ID of the dataset to grant permissions on.
     * @param array  $args      The arguments to pass to the API.
     *
     * @return bool|Response
     */
    public function addDatasetGrants(string $datasetID, array $args = []): bool|Response
    {
        // Prepare URL
        $url = "datasets/$datasetID/grants";

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
     * Delete a permission granted on a dataset in Sigma.
     * https://help.sigmacomputing.com/reference/deletedatasetgrant
     *
     * @param string $datasetID The ID of the dataset to delete the permission from.
     * @param string $grantID   The ID of the grant to delete.
     *
     * @return bool|Response
     */
    public function deleteDatasetGrants(string $datasetID, string $grantID): bool|Response
    {
        // Prepare URL
        $url = "datasets/$datasetID/grants/$grantID";

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
     * Get a dataset in Sigma.
     * https://help.sigmacomputing.com/reference/getdataset
     *
     * @param string $datasetID The ID of the dataset to get.
     *
     * @return mixed[]|Response
     */
    public function getDataset(string $datasetID): mixed
    {
        // Prepare URL
        $url = "datasets/$datasetID";

        // Make the call
        $response = $this->call($url);

        // Return the response or the data as an array
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Get grants for a dataset in Sigma.
     * https://help.sigmacomputing.com/reference/listdatasetgrants
     *
     * @param string               $datasetID The ID of the dataset to get grants for.
     * @param array<string, mixed> $args      The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getDatasetGrants(string $datasetID, array $args = []): mixed
    {
        // Prepare URL
        $url = "datasets/$datasetID/grants";

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
     * Get materialization jobs for a dataset in Sigma.
     * https://help.sigmacomputing.com/reference/listdatasetmaterializations
     *
     * @param string               $datasetID The ID of the dataset to list materializations for.
     * @param array<string, mixed> $args      The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getDatasetMaterializationJobs(string $datasetID, array $args = []): mixed
    {
        // Prepare URL
        $url = "datasets/$datasetID/materialization";

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
     * Get datasets in Sigma.
     * https://help.sigmacomputing.com/reference/listdatasets
     *
     * @param array<string, mixed> $args The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getDatasets(array $args = []): mixed
    {
        // Prepare URL
        $url = 'datasets';

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
     * Get sources of a dataset in Sigma.
     * https://help.sigmacomputing.com/reference/getdatasetsources
     *
     * @param string $datasetID The ID of the dataset to get sources for.
     *
     * @return mixed[]|Response
     */
    public function getDatasetSources(string $datasetID): mixed
    {
        // Prepare URL
        $url = "datasets/$datasetID/sources";

        // Make the call
        $response = $this->call($url);

        // Return the response or the data as an array
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Start a materialization run for a dataset in Sigma.
     * https://help.sigmacomputing.com/reference/materializedataset
     *
     * @param string $datasetID The ID of the dataset to materialize.
     *
     * @return mixed[]|Response
     */
    public function materializeDataset(string $datasetID): mixed
    {
        // Prepare URL
        $url = "datasets/$datasetID/materialization";

        // Make the call
        $response = $this->call(
            url   : $url,
            method: 'POST'
        );

        // Return the response or the data as an array
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }
}

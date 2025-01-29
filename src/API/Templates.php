<?php

namespace InterWorks\SigmaREST\API;

use Illuminate\Http\Client\Response;

trait Templates
{
    /**
     * Accept a template shared with your organization in Sigma.
     * https://help.sigmacomputing.com/reference/accepttemplateshare
     *
     * @param array<string, mixed> $args The arguments to pass to the API.
     *
     * @return bool|Response
     */
    public function acceptSharedTemplate(array $args = []): bool|Response
    {
        // Prepare URL
        $url = 'shared_templates/accept';

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
     * Create a workbook from a template in Sigma.
     * https://help.sigmacomputing.com/reference/saveworkbookfromtemplate
     *
     * @param array<string, mixed> $args The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function createWorkbookFromTemplate(array $args = []): mixed
    {
        // Prepare URL
        $url = 'templates/save_workbook';

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
     * Remove a template shared with your organization in Sigma.
     * https://help.sigmacomputing.com/reference/deleteexternalshare
     *
     * @param string $shareID The ID of the shared template to remove.
     *
     * @return bool|Response
     */
    public function deleteSharedTemplate(string $shareID): bool|Response
    {
        // Prepare URL
        $url = "shared_templates/$shareID";

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
     * Get templates shared with your organization in Sigma.
     * https://help.sigmacomputing.com/reference/listtemplatessharedwithyou
     *
     * @param array<string, mixed> $args The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getSharedTemplates(array $args = []): mixed
    {
        // Prepare URL
        $url = 'shared_templates/shared_with_you';

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
     * Get a template in Sigma.
     * https://help.sigmacomputing.com/reference/gettemplate
     *
     * @param string $templateID The ID of the template to get.
     *
     * @return mixed[]|Response
     */
    public function getTemplate(string $templateID): mixed
    {
        // Prepare URL
        $url = "templates/$templateID";

        // Make the call
        $response = $this->call($url);

        // Return the response or the data as an array
        return $this->returnResponseObject
            ? $response
            : (array) $response->json();
    }

    /**
     * Get templates in Sigma.
     * https://help.sigmacomputing.com/reference/listtemplates
     *
     * @param array<string, mixed> $args The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getTemplates(array $args = []): mixed
    {
        // Prepare URL
        $url = 'templates';

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
     * Swap data sources for a template in Sigma.
     * https://help.sigmacomputing.com/reference/sourceswaptemplate
     *
     * @param string               $templateID The ID of the template to swap the data sources for.
     * @param array<string, mixed> $args       The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function swapTemplateDataSources(string $templateID, array $args = []): mixed
    {
        // Prepare URL
        $url = "templates/$templateID/swapSources";

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
}

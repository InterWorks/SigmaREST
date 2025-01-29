<?php

namespace InterWorks\SigmaREST\API;

use Illuminate\Http\Client\Response;

trait Translations
{
    /**
     * Create an organization translation file in Sigma.
     * https://help.sigmacomputing.com/reference/createorgtranslation
     *
     * @param array<string, mixed> $args The arguments to pass to the API.
     *
     * @return bool|Response
     */
    public function createOrganizationTranslationFile(array $args = []): bool|Response
    {
        // Prepare URL
        $url = 'translations/organization';

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
     * Delete an organization translation file in Sigma.
     * https://help.sigmacomputing.com/reference/deleteorgtranslation
     *
     * @param string $lng The locale identifier for the language of the translation.
     *
     * @return bool|Response
     */
    public function deleteOrganizationTranslationFile(string $lng): bool|Response
    {
        // Prepare URL
        $url = "translations/organization/$lng";

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
     * Delete an organization translation file with a variant in Sigma.
     * https://help.sigmacomputing.com/reference/deleteorgtranslationwithvariant
     *
     * @param string $lng        The locale identifier for the language of the translation.
     * @param string $lngVariant The variant of the translation.
     *
     * @return bool|Response
     */
    public function deleteOrganizationTranslationFileWithVariant(string $lng, string $lngVariant): bool|Response
    {
        // Prepare URL
        $url = "translations/organization/$lng/$lngVariant";

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
     * Get an organization translation file in Sigma.
     * https://help.sigmacomputing.com/reference/getorgtranslations
     *
     * @param string $lng The locale identifier for the language of the translation.
     *
     * @return mixed[]|Response
     */
    public function getOrganizationTranslationFile(string $lng): mixed
    {
        // Prepare URL
        $url = "translations/organization/$lng";

        // Make the call
        $response = $this->call($url);

        // Return the response or the data as an array
        return $this->returnResponseObject
            ? $response
            : (array) $response->json();
    }

    /**
     * Get organization translation files in Sigma.
     * https://help.sigmacomputing.com/reference/listorglocales
     *
     * @param array<string, mixed> $args The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getOrganizationTranslationFiles(array $args = []): mixed
    {
        // Prepare URL
        $url = 'translations/organization';

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
     * Get an organization translation file with a variant in Sigma.
     * https://help.sigmacomputing.com/reference/getorgtranslationswithvariant
     *
     * @param string $lng        The locale identifier for the language of the translation.
     * @param string $lngVariant The variant of the translation.
     *
     * @return mixed[]|Response
     */
    public function getOrganizationTranslationFileWithVariant(string $lng, string $lngVariant): mixed
    {
        // Prepare URL
        $url = "translations/organization/$lng/$lngVariant";

        // Make the call
        $response = $this->call($url);

        // Return the response or the data as an array
        return $this->returnResponseObject
            ? $response
            : (array) $response->json();
    }

    /**
     * Update an organization translation file in Sigma.
     * https://help.sigmacomputing.com/reference/updateorgtranslation
     *
     * @param string               $lng The locale identifier for the language of the translation.
     * @param array<string, mixed> $args The arguments to pass to the API.
     *
     * @return bool|Response
     */
    public function updateOrganizationTranslationFile(string $lng, array $args = []): bool|Response
    {
        // Prepare URL
        $url = "translations/organization/$lng";

        // Make the call
        $response = $this->call(
            url   : $url,
            args  : $args,
            method: 'PUT'
        );

        // Return the response or the success status as a boolean
        return $this->returnResponseObject
            ? $response
            : $response->successful();
    }

    /**
     * Update an organization translation file with a variant in Sigma.
     * https://help.sigmacomputing.com/reference/updateorgtranslationwithvariant
     *
     * @param string               $lng        The locale identifier for the language of the translation.
     * @param string               $lngVariant The variant of the translation.
     * @param array<string, mixed> $args       The arguments to pass to the API.
     *
     * @return bool|Response
     */
    public function updateOrganizationTranslationFileWithVariant(
        string $lng,
        string $lngVariant,
        array $args = []
    ): bool|Response {
        // Prepare URL
        $url = "translations/organization/$lng/$lngVariant";

        // Make the call
        $response = $this->call(
            url   : $url,
            args  : $args,
            method: 'PUT'
        );

        // Return the response or the success status as a boolean
        return $this->returnResponseObject
            ? $response
            : $response->successful();
    }
}

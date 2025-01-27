<?php

namespace InterWorks\SigmaREST\API;

use Illuminate\Http\Client\Response;

trait Workbooks
{
    /**
     * Create a scheduled workbook export in Sigma.
     * https://help.sigmacomputing.com/reference/postworkbookschedule
     *
     * @param string               $workbookID The ID of the workbook to create a schedule for.
     * @param array<string, mixed> $args       The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function createScheduledWorkbookExport(string $workbookID, array $args = []): mixed
    {
        // Prepare URL
        $url = "workbooks/$workbookID/schedule";

        // Make the call
        $response = $this->call(
            url   : $url,
            args  : $args,
            method: 'POST'
        );

        // Return the response or the data
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Create a bookmark for a tagged workbook in Sigma.
     * https://help.sigmacomputing.com/reference/createtaggedworkbookbookmark
     *
     * @param string               $workbookID The ID of the workbook to create a bookmark for.
     * @param string               $versionTag The ID or name of the version to create the bookmark for.
     * @param array<string, mixed> $args       The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function createTaggedWorkbookBookmark(string $workbookID, string $versionTag, array $args = []): mixed
    {
        // Prepare URL
        $url = "workbooks/$workbookID/tags/$versionTag/bookmarks/";

        // Make the call
        $response = $this->call(
            url   : $url,
            args  : $args,
            method: 'POST'
        );

        // Return the response or the data
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Create a template from a workbook in Sigma.
     * https://help.sigmacomputing.com/reference/savetemplatefromworkbook
     *
     * @param string               $workbookID The ID of the workbook to create a template from.
     * @param array<string, mixed> $args       The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function createTemplateFromWorkbook(string $workbookID, array $args = []): mixed
    {
        // Prepare URL
        $url = "workbooks/$workbookID/saveTemplate";

        // Make the call
        $response = $this->call(
            url   : $url,
            args  : $args,
            method: 'POST'
        );

        // Return the response or the data
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Create a workbook in Sigma.
     * https://help.sigmacomputing.com/reference/createworkbook
     *
     * @param array<string, mixed> $args The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function createWorkbook(array $args = []): mixed
    {
        // Prepare URL
        $url = 'workbooks';

        // Make the call
        $response = $this->call(
            url   : $url,
            args  : $args,
            method: 'POST'
        );

        // Return the response or the data
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Create a bookmark for a workbook in Sigma.
     * https://help.sigmacomputing.com/reference/postworkbookbookmarks
     *
     * @param string               $workbookID The ID of the workbook to create a bookmark for.
     * @param array<string, mixed> $args       The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function createWorkbookBookmark(string $workbookID, array $args = []): mixed
    {
        // Prepare URL
        $url = "workbooks/$workbookID/bookmarks";

        // Make the call
        $response = $this->call(
            url   : $url,
            args  : $args,
            method: 'POST'
        );

        // Return the response or the data
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Create an embed for a workbook in Sigma.
     * https://help.sigmacomputing.com/reference/createworkbookembed
     *
     * @param string               $workbookID The ID of the workbook to create an embed for.
     * @param array<string, mixed> $args       The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function createWorkbookEmbed(string $workbookID, array $args = []): mixed
    {
        // Prepare URL
        $url = "workbooks/$workbookID/embeds";

        // Make the call
        $response = $this->call(
            url   : $url,
            args  : $args,
            method: 'POST'
        );

        // Return the response or the data
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Create a tag for a workbook in Sigma.
     * https://help.sigmacomputing.com/reference/tagworkbook
     *
     * @param array<string, mixed> $args The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function createWorkbookTag(array $args = []): mixed
    {
        // Prepare URL
        $url = 'workbooks/tag';

        // Make the call
        $response = $this->call(
            url   : $url,
            args  : $args,
            method: 'POST'
        );

        // Return the response or the data
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Delete a scheduled workbook export in Sigma.
     * https://help.sigmacomputing.com/reference/deleteworkbookschedule
     *
     * @param string $workbookID The ID of the workbook to delete the schedule for.
     * @param string $scheduleID The ID of the schedule to delete.
     *
     * @return bool|Response
     */
    public function deleteScheduledWorkbookExport(string $workbookID, string $scheduleID): bool|Response
    {
        // Prepare URL
        $url = "workbooks/$workbookID/schedules/$scheduleID";

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
     * Delete a bookmark for a tagged workbook in Sigma.
     * https://help.sigmacomputing.com/reference/deletetaggedworkbookbookmark
     *
     * @param string $workbookID The ID of the workbook to delete the bookmark for.
     * @param string $versionTag The ID or name of the version to delete the bookmark for.
     * @param string $bookmarkID The ID of the bookmark to delete.
     *
     * @return bool|Response
     */
    public function deleteTaggedWorkbookBookmark(
        string $workbookID,
        string $versionTag,
        string $bookmarkID
    ): bool|Response {
        // Prepare URL
        $url = "workbooks/$workbookID/tags/$versionTag/bookmarks/$bookmarkID";

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
     * Delete a bookmark for a workbook in Sigma.
     * https://help.sigmacomputing.com/reference/deleteworkbookbookmarks
     *
     * @param string $workbookID The ID of the workbook to delete the bookmark for.
     * @param string $bookmarkID The ID of the bookmark to delete.
     *
     * @return bool|Response
     */
    public function deleteWorkbookBookmark(string $workbookID, string $bookmarkID): bool|Response
    {
        // Prepare URL
        $url = "workbooks/$workbookID/bookmarks/$bookmarkID";

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
     * Delete an embed for a workbook in Sigma.
     * https://help.sigmacomputing.com/reference/deleteworkbookembeds
     *
     * @param string $workbookID The ID of the workbook to delete the embed for.
     * @param string $embedID    The ID of the embed to delete.
     *
     * @return bool|Response
     */
    public function deleteWorkbookEmbed(string $workbookID, string $embedID): bool|Response
    {
        // Prepare URL
        $url = "workbooks/$workbookID/embeds/$embedID";

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
     * Delete a workbook permission in Sigma.
     * https://help.sigmacomputing.com/reference/deleteworkbookgrant
     *
     * @param string $workbookID The ID of the workbook to delete the permission for.
     * @param string $grantID    The ID of the permission to delete.
     *
     * @return bool|Response
     */
    public function deleteWorkbookPermission(string $workbookID, string $grantID): bool|Response
    {
        // Prepare URL
        $url = "workbooks/$workbookID/grants/$grantID";

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
     * Delete a workbook tag in Sigma.
     * https://help.sigmacomputing.com/reference/deletetaggedworkbook
     *
     * @param string $workbookID The ID of the workbook to delete the tag for.
     * @param string $tagID      The ID of the tag to delete.
     *
     * @return bool|Response
     */
    public function deleteWorkbookTag(string $workbookID, string $tagID): bool|Response
    {
        // Prepare URL
        $url = "workbooks/$workbookID/tags/$tagID";

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
     * Download a workbook's data export in Sigma.
     * https://help.sigmacomputing.com/reference/downloadquery
     * Note: Export with exportWorkbookData($workbookID).
     *
     * @param string $queryID The ID of the query to download.
     *
     * @return mixed[]|Response
     */
    public function downloadWorkbookDataExport(string $queryID): mixed
    {
        // Prepare URL
        $url = "query/$queryID/download";

        // Make the call
        $response = $this->call($url);

        // Return the response or the data
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Duplicate a tagged workbook in Sigma.
     * https://help.sigmacomputing.com/reference/copytaggedworkbook
     *
     * @param string               $workbookID The ID of the workbook to duplicate.
     * @param string               $versionTag The ID or name of the version to duplicate.
     * @param array<string, mixed> $args       The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function duplicateTaggedWorkbook(string $workbookID, string $versionTag, array $args = []): mixed
    {
        // Prepare URL
        $url = "workbooks/$workbookID/tag/$versionTag/copy";

        // Make the call
        $response = $this->call(
            url   : $url,
            args  : $args,
            method: 'POST'
        );

        // Return the response or the data
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Duplicate a workbook in Sigma.
     * https://help.sigmacomputing.com/reference/copyworkbook
     *
     * @param string               $workbookID The ID of the workbook to duplicate.
     * @param array<string, mixed> $args       The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function duplicateWorkbook(string $workbookID, array $args = []): mixed
    {
        // Prepare URL
        $url = "workbooks/$workbookID/copy";

        // Make the call
        $response = $this->call(
            url   : $url,
            args  : $args,
            method: 'POST'
        );

        // Return the response or the data
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Export a workbook in Sigma.
     * https://help.sigmacomputing.com/reference/sendworkbook
     *
     * @param string               $workbookID The ID of the workbook to export.
     * @param array<string, mixed> $args       The arguments to pass to the API.
     *
     * @return bool|Response
     */
    public function exportWorkbook(string $workbookID, array $args = []): bool|Response
    {
        // Prepare URL
        $url = "workbooks/$workbookID/send";

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
     * Export data for a workbook in Sigma.
     * https://help.sigmacomputing.com/reference/exportworkbook
     * Note: Download with downloadWorkbookDataExport($queryID).
     *
     * @param string               $workbookID The ID of the workbook to export.
     * @param array<string, mixed> $args       The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function exportWorkbookData(string $workbookID, array $args = []): mixed
    {
        // Prepare URL
        $url = "workbooks/$workbookID/export";

        // Make the call
        $response = $this->call(
            url   : $url,
            args  : $args,
            method: 'POST'
        );

        // Return the response or the data
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Get scheduled workbook exports in Sigma.
     * https://help.sigmacomputing.com/reference/listworkbookschedules
     *
     * @param string               $workbookID The ID of the workbook to get the schedules for.
     * @param array<string, mixed> $args       The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getScheduledWorkbookExports(string $workbookID, array $args = []): mixed
    {
        // Prepare URL
        $url = "workbooks/$workbookID/schedules";

        // Make the call
        $response = $this->call(
            url : $url,
            args: $args
        );

        // Return the response or the data
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Get a bookmark for a tagged workbook in Sigma.
     * https://help.sigmacomputing.com/reference/gettaggedworkbookbookmark
     *
     * @param string $workbookID The ID of the workbook to get the bookmark for.
     * @param string $versionTag The ID or name of the version to get the bookmark for.
     * @param string $bookmarkID The ID of the bookmark to get.
     *
     * @return mixed[]|Response
     */
    public function getTaggedWorkbookBookmark(string $workbookID, string $versionTag, string $bookmarkID): mixed
    {
        // Prepare URL
        $url = "workbooks/$workbookID/tags/$versionTag/bookmarks/$bookmarkID";

        // Make the call
        $response = $this->call($url);

        // Return the response or the data
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Get bookmarks for a tagged workbook in Sigma.
     * https://help.sigmacomputing.com/reference/gettaggedworkbookbookmark
     *
     * @param string               $workbookID The ID of the workbook to get the bookmarks for.
     * @param string               $versionTag The ID or name of the version to get the bookmarks for.
     * @param array<string, mixed> $args       The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getTaggedWorkbookBookmarks(string $workbookID, string $versionTag, array $args = []): mixed
    {
        // Prepare URL
        $url = "workbooks/$workbookID/tags/$versionTag/bookmarks";

        // Make the call
        $response = $this->call(
            url : $url,
            args: $args
        );

        // Return the response or the data
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Get a workbook in Sigma.
     * https://help.sigmacomputing.com/reference/getworkbook
     *
     * @param string $workbookID The ID of the workbook to get.
     *
     * @return mixed[]|Response
     */
    public function getWorkbook(string $workbookID): mixed
    {
        // Prepare URL
        $url = "workbooks/$workbookID";

        // Make the call
        $response = $this->call($url);

        // Return the response or the data
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Get a bookmark for a workbook in Sigma.
     * https://help.sigmacomputing.com/reference/getworkbookbookmark
     *
     * @param string $workbookID The ID of the workbook to get the bookmark for.
     * @param string $bookmarkID The ID of the bookmark to get.
     *
     * @return mixed[]|Response
     */
    public function getWorkbookBookmark(string $workbookID, string $bookmarkID): mixed
    {
        // Prepare URL
        $url = "workbooks/$workbookID/bookmarks/$bookmarkID";

        // Make the call
        $response = $this->call($url);

        // Return the response or the data
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Get bookmarks for a workbook in Sigma.
     * https://help.sigmacomputing.com/reference/getworkbookbookmarks
     *
     * @param string               $workbookID The ID of the workbook to get the bookmarks for.
     * @param array<string, mixed> $args       The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getWorkbookBookmarks(string $workbookID, array $args = []): mixed
    {
        // Prepare URL
        $url = "workbooks/$workbookID/bookmarks";

        // Make the call
        $response = $this->call(
            url : $url,
            args: $args
        );

        // Return the response or the data
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Get a workbook's control elements list in Sigma.
     * https://help.sigmacomputing.com/reference/getworkbookcontrols
     *
     * @param string               $workbookID The ID of the workbook to get the controls for.
     * @param array<string, mixed> $args       The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getWorkbookControls(string $workbookID, array $args = []): mixed
    {
        // Prepare URL
        $url = "workbooks/$workbookID/controls";

        // Make the call
        $response = $this->call(
            url : $url,
            args: $args
        );

        // Return the response or the data
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Get columns for an element in a workbook in Sigma.
     * https://help.sigmacomputing.com/reference/getelementcolumns
     *
     * @param string               $workbookID The ID of the workbook to get the columns for.
     * @param string               $elementID  The ID of the element to get the columns for.
     * @param array<string, mixed> $args       The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getWorkbookElementColumns(string $workbookID, string $elementID, array $args = []): mixed
    {
        // Prepare URL
        $url = "workbooks/$workbookID/elements/$elementID/columns";

        // Make the call
        $response = $this->call(
            url : $url,
            args: $args
        );

        // Return the response or the data
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Get element lineage for a workbook in Sigma.
     * https://help.sigmacomputing.com/reference/listlineage
     *
     * @param string $workbookID The ID of the workbook to get the element lineage for.
     * @param string $elementID  The ID of the element to get the lineage for.
     *
     * @return mixed[]|Response
     */
    public function getWorkbookElementLineage(string $workbookID, string $elementID): mixed
    {
        // Prepare URL
        $url = "workbooks/$workbookID/lineage/elements/$elementID";

        // Make the call
        $response = $this->call($url);

        // Return the response or the data
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Get a scheduled materialization for an element in a workbook in Sigma.
     * https://help.sigmacomputing.com/reference/getmaterialization
     *
     * @param string $workbookID        The ID of the workbook to get the materialization for.
     * @param string $materializationID The ID of the materialization to get.
     *
     * @return mixed[]|Response
     */
    public function getWorkbookElementMaterialization(string $workbookID, string $materializationID): mixed
    {
        // Prepare URL
        $url = "workbooks/$workbookID/materializations/$materializationID";

        // Make the call
        $response = $this->call($url);

        // Return the response or the data
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Get scheduled materializations for an element in a workbook in Sigma.
     * https://help.sigmacomputing.com/reference/listmaterializationschedules
     *
     * @param string               $workbookID The ID of the workbook to get the materializations for.
     * @param array<string, mixed> $args       The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getWorkbookElementMaterializations(string $workbookID, array $args = []): mixed
    {
        // Prepare URL
        $url = "workbooks/$workbookID/materialization-schedules";

        // Make the call
        $response = $this->call(
            url : $url,
            args: $args
        );

        // Return the response or the data
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Get SQL queries for an element in a workbook in Sigma.
     * https://help.sigmacomputing.com/reference/getelementquery
     *
     * @param string               $workbookID The ID of the workbook to get the queries for.
     * @param string               $elementID  The ID of the element to get the queries for.
     * @param array<string, mixed> $args       The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getWorkbookElementSQLQueries(string $workbookID, string $elementID, array $args = []): mixed
    {
        // Prepare URL
        $url = "workbooks/$workbookID/elements/$elementID/query";

        // Make the call
        $response = $this->call(
            url : $url,
            args: $args
        );

        // Return the response or the data
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Get embeds for a workbook in Sigma.
     * https://help.sigmacomputing.com/reference/listworkbookembeds
     *
     * @param string               $workbookID The ID of the workbook to get the embeds for.
     * @param array<string, mixed> $args       The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getWorkbookEmbeds(string $workbookID, array $args = []): mixed
    {
        // Prepare URL
        $url = "workbooks/$workbookID/embeds";

        // Make the call
        $response = $this->call(
            url : $url,
            args: $args
        );

        // Return the response or the data
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Get elements in a page of a workbook in Sigma.
     * https://help.sigmacomputing.com/reference/listworkbookpageelements
     *
     * @param string               $workbookID The ID of the workbook to get the page elements for.
     * @param string               $pageID     The ID of the page to get the elements for.
     * @param array<string, mixed> $args       The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getWorkbookPageElements(string $workbookID, string $pageID, array $args = []): mixed
    {
        // Prepare URL
        $url = "workbooks/$workbookID/pages/$pageID/elements";

        // Make the call
        $response = $this->call(
            url : $url,
            args: $args
        );

        // Return the response or the data
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Get pages of a workbook in Sigma.
     * https://help.sigmacomputing.com/reference/listworkbookpages
     *
     * @param string               $workbookID The ID of the workbook to get the pages for.
     * @param array<string, mixed> $args       The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getWorkbookPages(string $workbookID, array $args = []): mixed
    {
        // Prepare URL
        $url = "workbooks/$workbookID/pages";

        // Make the call
        $response = $this->call(
            url : $url,
            args: $args
        );

        // Return the response or the data
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Get workbooks in Sigma.
     * https://help.sigmacomputing.com/reference/listworkbooks
     *
     * @param array<string, mixed> $args The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getWorkbooks(array $args = []): mixed
    {
        // Prepare URL
        $url = 'workbooks';

        // Make the call
        $response = $this->call(
            url : $url,
            args: $args
        );

        // Return the response or the data
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Get a workbook's schema in Sigma.
     * https://help.sigmacomputing.com/reference/getworkbookschema
     *
     * @param string               $workbookID The ID of the workbook to get the schema for.
     * @param array<string, mixed> $args       The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getWorkbookSchema(string $workbookID, array $args = []): mixed
    {
        // Prepare URL
        $url = "workbooks/$workbookID/schema";

        // Make the call
        $response = $this->call(
            url : $url,
            args: $args
        );

        // Return the response or the data
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Get a workbook's source in Sigma.
     * https://help.sigmacomputing.com/reference/getworkbooksources
     *
     * @param string $workbookID The ID of the workbook to get the source for.
     *
     * @return mixed[]|Response
     */
    public function getWorkbookSource(string $workbookID): mixed
    {
        // Prepare URL
        $url = "workbooks/$workbookID/sources";

        // Make the call
        $response = $this->call($url);

        // Return the response or the data
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Get SQL queries stored in a workbook in Sigma.
     * https://help.sigmacomputing.com/reference/listworkbookqueries
     *
     * @param string               $workbookID The ID of the workbook to get the queries for.
     * @param array<string, mixed> $args       The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getWorkbookSQLQueries(string $workbookID, array $args = []): mixed
    {
        // Prepare URL
        $url = "workbooks/$workbookID/queries";

        // Make the call
        $response = $this->call(
            url : $url,
            args: $args
        );

        // Return the response or the data
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Get tags for a workbook in Sigma.
     * https://help.sigmacomputing.com/reference/getworkbooktags
     *
     * @param string               $workbookID The ID of the workbook to get the tags for.
     * @param array<string, mixed> $args       The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getWorkbookTags(string $workbookID, array $args = []): mixed
    {
        // Prepare URL
        $url = "workbooks/$workbookID/tags";

        // Make the call
        $response = $this->call(
            url : $url,
            args: $args
        );

        // Return the response or the data
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Get workbook version history in Sigma.
     * https://help.sigmacomputing.com/reference/getversionhistory
     *
     * @param string               $workbookID The ID of the workbook to get the version history for.
     * @param array<string, mixed> $args       The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function getWorkbookVersionHistory(string $workbookID, array $args = []): mixed
    {
        // Prepare URL
        $url = "workbooks/$workbookID/version-history";

        // Make the call
        $response = $this->call(
            url : $url,
            args: $args
        );

        // Return the response or the data
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Grant permissions on a workbook in Sigma.
     * https://help.sigmacomputing.com/reference/createworkbookgrant
     *
     * @param string               $workbookID The ID of the workbook to grant permissions on.
     * @param array<string, mixed> $args       The arguments to pass to the API.
     *
     * @return bool|Response
     */
    public function grantWorkbookPermissions(string $workbookID, array $args = []): bool|Response
    {
        // Prepare URL
        $url = "workbooks/$workbookID/grant";

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
     * Run scheduled materialization for a workbook in Sigma.
     * https://help.sigmacomputing.com/reference/materializeworkbookelement
     *
     * @param string               $workbookID The ID of the workbook to run materialization for.
     * @param array<string, mixed> $args       The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function runWorkbookElementMaterialization(string $workbookID, array $args = []): mixed
    {
        // Prepare URL
        $url = "workbooks/$workbookID/materializations";

        // Make the call
        $response = $this->call(
            url   : $url,
            args  : $args,
            method: 'POST'
        );

        // Return the response or the data
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Share a workbook with another organization in Sigma.
     * https://help.sigmacomputing.com/reference/shareworkbookcrossorg
     *
     * @param string               $workbookID The ID of the workbook to share.
     * @param array<string, mixed> $args The arguments to pass to the API.
     *
     * @return bool|Response
     */
    public function shareWorkbookCrossOrg(string $workbookID, array $args = []): bool|Response
    {
        // Prepare URL
        $url = "workbooks/$workbookID/shareCrossOrg";

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
     * Swap a workbook's data source in Sigma.
     * https://help.sigmacomputing.com/reference/sourceswapworkbook
     *
     * @param string               $workbookID The ID of the workbook to swap the data source for.
     * @param array<string, mixed> $args       The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function sourceSwapWorkbook(string $workbookID, array $args = []): mixed
    {
        // Prepare URL
        $url = "workbooks/$workbookID/swapSources";

        // Make the call
        $response = $this->call(
            url   : $url,
            args  : $args,
            method: 'POST'
        );

        // Return the response or the data
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Update a bookmark in a tagged workbook in Sigma.
     * https://help.sigmacomputing.com/reference/updatetaggedworkbookbookmark
     *
     * @param string               $workbookID The ID of the workbook to update the bookmark for.
     * @param string               $versionTag The ID or name of the version to update the bookmark for.
     * @param string               $bookmarkID The ID of the bookmark to update.
     * @param array<string, mixed> $args       The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function updateTaggedWorkbookBookmark(
        string $workbookID,
        string $versionTag,
        string $bookmarkID,
        array $args = []
    ): mixed {
        // Prepare URL
        $url = "workbooks/$workbookID/tags/$versionTag/bookmarks/$bookmarkID";

        // Make the call
        $response = $this->call(
            url   : $url,
            args  : $args,
            method: 'PATCH'
        );

        // Return the response or the data
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }

    /**
     * Update a bookmark for a workbook in Sigma.
     * https://help.sigmacomputing.com/reference/updateworkbookbookmark
     *
     * @param string               $workbookID The ID of the workbook to update the bookmark for.
     * @param string               $bookmarkID The ID of the bookmark to update.
     * @param array<string, mixed> $args       The arguments to pass to the API.
     *
     * @return mixed[]|Response
     */
    public function updateWorkbookBookmark(string $workbookID, string $bookmarkID, array $args = []): mixed
    {
        // Prepare URL
        $url = "workbooks/$workbookID/bookmarks/$bookmarkID";

        // Make the call
        $response = $this->call(
            url   : $url,
            args  : $args,
            method: 'PATCH'
        );

        // Return the response or the data
        return $this->returnResponseObject
            ? $response
            : $response->json();
    }
}

<?php

use InterWorks\SigmaREST\Tests\Mocks\SigmaRESTMock;

test('createScheduledWorkbookExport unit test', function () {
    $workbookID = 'testWorkbookID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/schedule");

    expect($mock->createScheduledWorkbookExport($workbookID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('createTaggedWorkbookBookmark unit test', function () {
    $workbookID = 'testWorkbookID';
    $versionTag = 'testVersionTag';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/tags/$versionTag/bookmarks/");

    expect($mock->createTaggedWorkbookBookmark($workbookID, $versionTag, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('createTemplateFromWorkbook unit test', function () {
    $workbookID = 'testWorkbookID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/saveTemplate");

    expect($mock->createTemplateFromWorkbook($workbookID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('createWorkbook unit test', function () {
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, 'workbooks');

    expect($mock->createWorkbook($args))->toBe($expectedResponse);

    Mockery::close();
});

test('createWorkbookBookmark unit test', function () {
    $workbookID = 'testWorkbookID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/bookmarks");

    expect($mock->createWorkbookBookmark($workbookID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('createWorkbookEmbed unit test', function () {
    $workbookID = 'testWorkbookID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/embeds");

    expect($mock->createWorkbookEmbed($workbookID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('createWorkbookTag unit test', function () {
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, 'workbooks/tag');

    expect($mock->createWorkbookTag($args))->toBe($expectedResponse);

    Mockery::close();
});

test('deleteScheduledWorkbookExport unit test', function () {
    $workbookID = 'testWorkbookID';
    $scheduleID = 'testScheduleID';
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/schedules/$scheduleID");

    expect($mock->deleteScheduledWorkbookExport($workbookID, $scheduleID))->toBe($expectedResponse);

    Mockery::close();
});

test('deleteTaggedWorkbookBookmark unit test', function () {
    $workbookID = 'testWorkbookID';
    $versionTag = 'testVersionTag';
    $bookmarkID = 'testBookmarkID';
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/tags/$versionTag/bookmarks/$bookmarkID");

    expect($mock->deleteTaggedWorkbookBookmark($workbookID, $versionTag, $bookmarkID))->toBe($expectedResponse);

    Mockery::close();
});

test('deleteWorkbookBookmark unit test', function () {
    $workbookID = 'testWorkbookID';
    $bookmarkID = 'testBookmarkID';
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/bookmarks/$bookmarkID");

    expect($mock->deleteWorkbookBookmark($workbookID, $bookmarkID))->toBe($expectedResponse);

    Mockery::close();
});

test('deleteWorkbookEmbed unit test', function () {
    $workbookID = 'testWorkbookID';
    $embedID = 'testEmbedID';
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/embeds/$embedID");

    expect($mock->deleteWorkbookEmbed($workbookID, $embedID))->toBe($expectedResponse);

    Mockery::close();
});

test('deleteWorkbookPermission unit test', function () {
    $workbookID = 'testWorkbookID';
    $grantID = 'testGrantID';
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/grants/$grantID");

    expect($mock->deleteWorkbookPermission($workbookID, $grantID))->toBe($expectedResponse);

    Mockery::close();
});

test('deleteWorkbookTag unit test', function () {
    $workbookID = 'testWorkbookID';
    $tagID = 'testTagID';
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/tags/$tagID");

    expect($mock->deleteWorkbookTag($workbookID, $tagID))->toBe($expectedResponse);

    Mockery::close();
});

test('downloadWorkbookDataExport unit test', function () {
    $queryID = 'testQueryID';
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "query/$queryID/download");

    expect($mock->downloadWorkbookDataExport($queryID))->toBe($expectedResponse);

    Mockery::close();
});

test('duplicateTaggedWorkbook unit test', function () {
    $workbookID = 'testWorkbookID';
    $versionTag = 'testVersionTag';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/tag/$versionTag/copy");

    expect($mock->duplicateTaggedWorkbook($workbookID, $versionTag, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('duplicateWorkbook unit test', function () {
    $workbookID = 'testWorkbookID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/copy");

    expect($mock->duplicateWorkbook($workbookID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('exportWorkbook unit test', function () {
    $workbookID = 'testWorkbookID';
    $args = ['test' => 'test'];
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/send");

    expect($mock->exportWorkbook($workbookID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('exportWorkbookData unit test', function () {
    $workbookID = 'testWorkbookID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/export");

    expect($mock->exportWorkbookData($workbookID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('getScheduledWorkbookExports unit test', function () {
    $workbookID = 'testWorkbookID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/schedules");

    expect($mock->getScheduledWorkbookExports($workbookID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('getTaggedWorkbookBookmark unit test', function () {
    $workbookID = 'testWorkbookID';
    $versionTag = 'testVersionTag';
    $bookmarkID = 'testBookmarkID';
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/tags/$versionTag/bookmarks/$bookmarkID");

    expect($mock->getTaggedWorkbookBookmark($workbookID, $versionTag, $bookmarkID))->toBe($expectedResponse);

    Mockery::close();
});

test('getTaggedWorkbookBookmarks unit test', function () {
    $workbookID = 'testWorkbookID';
    $versionTag = 'testVersionTag';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/tags/$versionTag/bookmarks");

    expect($mock->getTaggedWorkbookBookmarks($workbookID, $versionTag, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('getWorkbook unit test', function () {
    $workbookID = 'testWorkbookID';
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID");

    expect($mock->getWorkbook($workbookID))->toBe($expectedResponse);

    Mockery::close();
});

test('getWorkbookBookmark unit test', function () {
    $workbookID = 'testWorkbookID';
    $bookmarkID = 'testBookmarkID';
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/bookmarks/$bookmarkID");

    expect($mock->getWorkbookBookmark($workbookID, $bookmarkID))->toBe($expectedResponse);

    Mockery::close();
});

test('getWorkbookBookmarks unit test', function () {
    $workbookID = 'testWorkbookID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/bookmarks");

    expect($mock->getWorkbookBookmarks($workbookID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('getWorkbookControls unit test', function () {
    $workbookID = 'testWorkbookID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/controls");

    expect($mock->getWorkbookControls($workbookID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('getWorkbookElementColumns unit test', function () {
    $workbookID = 'testWorkbookID';
    $elementID = 'testElementID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/elements/$elementID/columns");

    expect($mock->getWorkbookElementColumns($workbookID, $elementID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('getWorkbookElementLineage unit test', function () {
    $workbookID = 'testWorkbookID';
    $elementID = 'testElementID';
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/lineage/elements/$elementID");

    expect($mock->getWorkbookElementLineage($workbookID, $elementID))->toBe($expectedResponse);

    Mockery::close();
});

test('getWorkbookElementMaterialization unit test', function () {
    $workbookID = 'testWorkbookID';
    $materializationID = 'testMaterializationID';
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/materializations/$materializationID");

    expect($mock->getWorkbookElementMaterialization($workbookID, $materializationID))->toBe($expectedResponse);

    Mockery::close();
});

test('getWorkbookElementMaterializations unit test', function () {
    $workbookID = 'testWorkbookID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/materialization-schedules");

    expect($mock->getWorkbookElementMaterializations($workbookID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('getWorkbookElementSQLQueries unit test', function () {
    $workbookID = 'testWorkbookID';
    $elementID = 'testElementID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/elements/$elementID/query");

    expect($mock->getWorkbookElementSQLQueries($workbookID, $elementID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('getWorkbookEmbeds unit test', function () {
    $workbookID = 'testWorkbookID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/embeds");

    expect($mock->getWorkbookEmbeds($workbookID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('getWorkbookPageElements unit test', function () {
    $workbookID = 'testWorkbookID';
    $pageID = 'testPageID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/pages/$pageID/elements");

    expect($mock->getWorkbookPageElements($workbookID, $pageID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('getWorkbookPages unit test', function () {
    $workbookID = 'testWorkbookID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/pages");

    expect($mock->getWorkbookPages($workbookID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('getWorkbooks unit test', function () {
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, 'workbooks');

    expect($mock->getWorkbooks($args))->toBe($expectedResponse);

    Mockery::close();
});

test('getWorkbookSchema unit test', function () {
    $workbookID = 'testWorkbookID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/schema");

    expect($mock->getWorkbookSchema($workbookID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('getWorkbookSource unit test', function () {
    $workbookID = 'testWorkbookID';
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/sources");

    expect($mock->getWorkbookSource($workbookID))->toBe($expectedResponse);

    Mockery::close();
});

test('getWorkbookSQLQueries unit test', function () {
    $workbookID = 'testWorkbookID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/queries");

    expect($mock->getWorkbookSQLQueries($workbookID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('getWorkbookTags unit test', function () {
    $workbookID = 'testWorkbookID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/tags");

    expect($mock->getWorkbookTags($workbookID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('getWorkbookVersionHistory unit test', function () {
    $workbookID = 'testWorkbookID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/version-history");

    expect($mock->getWorkbookVersionHistory($workbookID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('grantWorkbookPermissions unit test', function () {
    $workbookID = 'testWorkbookID';
    $args = ['test' => 'test'];
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/grant");

    expect($mock->grantWorkbookPermissions($workbookID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('runWorkbookElementMaterialization unit test', function () {
    $workbookID = 'testWorkbookID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/materializations");

    expect($mock->runWorkbookElementMaterialization($workbookID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('shareWorkbookCrossOrg unit test', function () {
    $workbookID = 'testWorkbookID';
    $args = ['test' => 'test'];
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/shareCrossOrg");

    expect($mock->shareWorkbookCrossOrg($workbookID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('sourceSwapWorkbook unit test', function () {
    $workbookID = 'testWorkbookID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/swapSources");

    expect($mock->sourceSwapWorkbook($workbookID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('updateTaggedWorkbookBookmark unit test', function () {
    $workbookID = 'testWorkbookID';
    $versionTag = 'testVersionTag';
    $bookmarkID = 'testBookmarkID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/tags/$versionTag/bookmarks/$bookmarkID");

    expect($mock->updateTaggedWorkbookBookmark($workbookID, $versionTag, $bookmarkID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('updateWorkbookBookmark unit test', function () {
    $workbookID = 'testWorkbookID';
    $bookmarkID = 'testBookmarkID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workbooks/$workbookID/bookmarks/$bookmarkID");

    expect($mock->updateWorkbookBookmark($workbookID, $bookmarkID, $args))->toBe($expectedResponse);

    Mockery::close();
});

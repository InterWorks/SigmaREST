<?php

use InterWorks\SigmaREST\Tests\Mocks\SigmaRESTMock;

test('addDatasetGrants unit test', function () {
    $datasetID = 'testDatasetID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "datasets/$datasetID/grants");

    expect($mock->addDatasetGrants($datasetID, $args))->toBe(true);

    Mockery::close();
});

test('deleteDatasetGrants unit test', function () {
    $datasetID = 'testDatasetID';
    $grantID = 'testGrantID';
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "datasets/$datasetID/grants/$grantID");

    expect($mock->deleteDatasetGrants($datasetID, $grantID))->toBe($expectedResponse);

    Mockery::close();
});

test('getDataset unit test', function () {
    $datasetID = 'testDatasetID';
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "datasets/$datasetID");

    expect($mock->getDataset($datasetID))->toBe($expectedResponse);

    Mockery::close();
});

test('getDatasetGrants unit test', function () {
    $datasetID = 'testDatasetID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "datasets/$datasetID/grants");

    expect($mock->getDatasetGrants($datasetID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('getDatasetMaterializationJobs unit test', function () {
    $datasetID = 'testDatasetID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "datasets/$datasetID/materialization");

    expect($mock->getDatasetMaterializationJobs($datasetID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('getDatasets unit test', function () {
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, 'datasets');

    expect($mock->getDatasets($args))->toBe($expectedResponse);

    Mockery::close();
});

test('getDatasetSources unit test', function () {
    $datasetID = 'testDatasetID';
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "datasets/$datasetID/sources");

    expect($mock->getDatasetSources($datasetID))->toBe($expectedResponse);

    Mockery::close();
});

test('materializeDataset unit test', function () {
    $datasetID = 'testDatasetID';
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "datasets/$datasetID/materialization");

    expect($mock->materializeDataset($datasetID))->toBe($expectedResponse);

    Mockery::close();
});

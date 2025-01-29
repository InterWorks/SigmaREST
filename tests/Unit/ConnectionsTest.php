<?php

use InterWorks\SigmaREST\Tests\Mocks\SigmaRESTMock;

test('addConnectionGrants unit test', function () {
    $connectionID = 'testConnectionID';
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "connections/$connectionID/grants");

    expect($mock->addConnectionGrants($connectionID))->toBe($expectedResponse);

    Mockery::close();
});

test('addConnectionPathGrants unit test', function () {
    $connectionPathID = 'testConnectionPathID';
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "connections/paths/$connectionPathID/grants");

    expect($mock->addConnectionPathGrants($connectionPathID))->toBe($expectedResponse);

    Mockery::close();
});

test('createConnection unit test', function () {
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, 'connections');

    expect($mock->createConnection())->toBe($expectedResponse);

    Mockery::close();
});

test('deleteConnection unit test', function () {
    $connectionID = 'testConnectionID';
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "connections/$connectionID");

    expect($mock->deleteConnection($connectionID))->toBe($expectedResponse);

    Mockery::close();
});

test('deleteConnectionGrant unit test', function () {
    $connectionID = 'testConnectionID';
    $grantID = 'testGrantID';
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "connections/$connectionID/grants/$grantID");

    expect($mock->deleteConnectionGrant($connectionID, $grantID))->toBe($expectedResponse);

    Mockery::close();
});

test('deleteConnectionPathGrant unit test', function () {
    $connectionPathID = 'testConnectionPathID';
    $grantID = 'testGrantID';
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "connections/paths/$connectionPathID/grants/$grantID");

    expect($mock->deleteConnectionPathGrant($connectionPathID, $grantID))->toBe($expectedResponse);

    Mockery::close();
});

test('getConnectionDetails unit test', function () {
    $connectionID = 'testConnectionID';
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "connections/$connectionID");

    expect($mock->getConnectionDetails($connectionID))->toBe($expectedResponse);

    Mockery::close();
});

test('getConnectionGrants unit test', function () {
    $connectionID = 'testConnectionID';
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "connections/$connectionID/grants");

    expect($mock->getConnectionGrants($connectionID))->toBe($expectedResponse);

    Mockery::close();
});

test('getConnectionPathForTable unit test', function () {
    $inodeID = 'testInodeID';
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "connections/paths/$inodeID");

    expect($mock->getConnectionPathForTable($inodeID))->toBe($expectedResponse);

    Mockery::close();
});

test('getConnectionPathGrants unit test', function () {
    $connectionPathID = 'testConnectionPathID';
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "connections/paths/$connectionPathID/grants");

    expect($mock->getConnectionPathGrants($connectionPathID))->toBe($expectedResponse);

    Mockery::close();
});

test('getConnectionPaths unit test', function () {
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, 'connections/paths');

    expect($mock->getConnectionPaths())->toBe($expectedResponse);

    Mockery::close();
});

test('getConnections unit test', function () {
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, 'connections');

    expect($mock->getConnections())->toBe($expectedResponse);

    Mockery::close();
});

test('getConnectionsByPath unit test', function () {
    $connectionID = 'testConnectionID';
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "connection/$connectionID/lookup");

    expect($mock->getConnectionsByPath($connectionID))->toBe($expectedResponse);

    Mockery::close();
});

test('syncConnectionByPath unit test', function () {
    $connectionID = 'testConnectionID';
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "connections/$connectionID/sync");

    expect($mock->syncConnectionByPath($connectionID))->toBe($expectedResponse);

    Mockery::close();
});

test('testConnection unit test', function () {
    $connectionID = 'testConnectionID';
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "connections/$connectionID/test");

    expect($mock->testConnection($connectionID))->toBe($expectedResponse);

    Mockery::close();
});

test('updateConnection unit test', function () {
    $connectionID = 'testConnectionID';
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "connections/$connectionID");

    expect($mock->updateConnection($connectionID))->toBe($expectedResponse);

    Mockery::close();
});

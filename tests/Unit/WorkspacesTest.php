<?php

use InterWorks\SigmaREST\Tests\Mocks\SigmaRESTMock;

test('createWorkspace unit test', function () {
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, 'workspaces');

    expect($mock->createWorkspace($args))->toBe($expectedResponse);

    Mockery::close();
});

test('deleteWorkspace unit test', function () {
    $workspaceID = 'testWorkspaceID';
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workspaces/$workspaceID");

    expect($mock->deleteWorkspace($workspaceID))->toBe($expectedResponse);

    Mockery::close();
});

test('deleteWorkspaceGrant unit test', function () {
    $workspaceID = 'testWorkspaceID';
    $grantID = 'testGrantID';
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workspaces/$workspaceID/grants/$grantID");

    expect($mock->deleteWorkspaceGrant($workspaceID, $grantID))->toBe($expectedResponse);

    Mockery::close();
});

test('getWorkspace unit test', function () {
    $workspaceID = 'testWorkspaceID';
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workspaces/$workspaceID");

    expect($mock->getWorkspace($workspaceID))->toBe($expectedResponse);

    Mockery::close();
});

test('getWorkspaceGrants unit test', function () {
    $workspaceID = 'testWorkspaceID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workspaces/$workspaceID/grants");

    expect($mock->getWorkspaceGrants($workspaceID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('getWorkspaces unit test', function () {
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, 'workspaces');

    expect($mock->getWorkspaces($args))->toBe($expectedResponse);

    Mockery::close();
});

test('grantWorkspacePermissions unit test', function () {
    $workspaceID = 'testWorkspaceID';
    $args = ['test' => 'test'];
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workspaces/$workspaceID/grants");

    expect($mock->grantWorkspacePermissions($workspaceID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('updateWorkspace unit test', function () {
    $workspaceID = 'testWorkspaceID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "workspaces/$workspaceID");

    expect($mock->updateWorkspace($workspaceID, $args))->toBe($expectedResponse);

    Mockery::close();
});

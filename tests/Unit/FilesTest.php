<?php

use InterWorks\SigmaREST\Tests\Mocks\SigmaRESTMock;

test('createFile unit test', function () {
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, 'files');

    expect($mock->createFile($args))->toBe($expectedResponse);

    Mockery::close();
});

test('deleteFile unit test', function () {
    $inodeID = 'testInodeID';
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "files/$inodeID");

    expect($mock->deleteFile($inodeID))->toBe($expectedResponse);

    Mockery::close();
});

test('getFile unit test', function () {
    $inodeID = 'testInodeID';
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "files/$inodeID");

    expect($mock->getFile($inodeID))->toBe($expectedResponse);

    Mockery::close();
});

test('getFiles unit test', function () {
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, 'files');

    expect($mock->getFiles($args))->toBe($expectedResponse);

    Mockery::close();
});

test('updateFile unit test', function () {
    $inodeID = 'testInodeID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "files/$inodeID");

    expect($mock->updateFile($inodeID, $args))->toBe($expectedResponse);

    Mockery::close();
});

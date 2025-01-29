<?php

use InterWorks\SigmaREST\Tests\Mocks\SigmaRESTMock;

test('createTag unit test', function () {
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, 'tags');

    expect($mock->createTag($args))->toBe($expectedResponse);

    Mockery::close();
});

test('deleteTag unit test', function () {
    $tagID = 'testTagID';
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "tags/$tagID");

    expect($mock->deleteTag($tagID))->toBe($expectedResponse);

    Mockery::close();
});

test('getTags unit test', function () {
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, 'tags');

    expect($mock->getTags($args))->toBe($expectedResponse);

    Mockery::close();
});

test('getTagWorkbooks unit test', function () {
    $tagID = 'testTagID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "tags/$tagID/workbooks");

    expect($mock->getTagWorkbooks($tagID, $args))->toBe($expectedResponse);

    Mockery::close();
});

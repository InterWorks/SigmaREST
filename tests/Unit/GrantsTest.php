<?php

use InterWorks\SigmaREST\Tests\Mocks\SigmaRESTMock;

test('createOrUpdateGrant unit test', function () {
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, 'grants');

    expect($mock->createOrUpdateGrant($args))->toBe($expectedResponse);

    Mockery::close();
});

test('deleteGrant unit test', function () {
    $grantId = 'testGrantID';
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "grants/$grantId");

    expect($mock->deleteGrant($grantId))->toBe($expectedResponse);

    Mockery::close();
});

test('getGrant unit test', function () {
    $grantId = 'testGrantID';
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "grants/$grantId");

    expect($mock->getGrant($grantId))->toBe($expectedResponse);

    Mockery::close();
});

test('getGrants unit test', function () {
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, 'grants');

    expect($mock->getGrants($args))->toBe($expectedResponse);

    Mockery::close();
});

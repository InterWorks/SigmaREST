<?php

use InterWorks\SigmaREST\Tests\Mocks\SigmaRESTMock;

test('createCredentials unit test', function () {
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, 'credentials');

    expect($mock->createCredentials($args))->toBe($expectedResponse);

    Mockery::close();
});

test('deleteCredentials unit test', function () {
    $clientID = 'testClientID';
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "credentials/$clientID");

    expect($mock->deleteCredentials($clientID))->toBe($expectedResponse);

    Mockery::close();
});

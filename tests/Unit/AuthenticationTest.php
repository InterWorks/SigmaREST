<?php

use InterWorks\SigmaREST\Tests\Mocks\SigmaRESTMock;

test('can get access token', function () {
    // Create a mock for the class
    $expectedResponse = ['access_token' => 'test'];
    $mock = SigmaRESTMock::mockWithCall(
        expectedResponse: $expectedResponse,
        url             : 'auth/token'
    );

    // Call the getAccessToken method
    $response = $mock->getAccessToken();

    // Assert the response
    expect($response)->toBe($expectedResponse['access_token']);

    // Clean up Mockery expectations
    Mockery::close();
});

test('can get currently authenticated REST user', function () {
    // Create a mock for the class
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall(
        expectedResponse: $expectedResponse,
        url             : 'whoami'
    );

    // Call the whoAmI method
    $response = $mock->whoAmI();

    // Assert the response
    expect($response)->toBe($expectedResponse);

    // Clean up Mockery expectations
    Mockery::close();
});

test('throws SigmaAuthenticationException when authentication fails', function () {
    // Create a mock for the class that will simulate a failed authentication
    $mock = SigmaRESTMock::mockWithFailedCall(
        status: 401,
        body: '{"error": "invalid_credentials"}',
        url: 'auth/token'
    );

    // Expect the specific exception to be thrown
    expect(fn() => $mock->getAccessToken())
        ->toThrow(\InterWorks\SigmaREST\Exceptions\SigmaAuthenticationException::class);

    // Clean up Mockery expectations
    Mockery::close();
});

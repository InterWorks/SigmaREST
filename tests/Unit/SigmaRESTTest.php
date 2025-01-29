<?php

use Illuminate\Http\Client\Response;
use InterWorks\SigmaREST\SigmaREST;

test('constructor initializes correctly with valid configuration', function () {
    // Mock the SigmaREST class
    $mock = Mockery::mock(SigmaREST::class)->makePartial()->shouldAllowMockingProtectedMethods();

    // Ensure the _authenticate method is called in the constructor
    $mock->shouldReceive('_authenticate')
        ->once()
        ->andReturnNull();

    // Instantiate the class to trigger the constructor
    $mock->__construct();

    // Validate that properties were set correctly
    expect($mock->getUrl())->toBe('https://example.sigma.com');
    expect($mock->getReturnResponseObject())->toBeFalse(); // default set in constructor

    // Clean up Mockery expectations
    Mockery::close();
});

test('can authenticate', function () {
    // Mock the SigmaREST class
    $mock = Mockery::mock(SigmaREST::class)->makePartial()->shouldAllowMockingProtectedMethods();

    // Create a mock for the Illuminate\Http\Client\Response class
    $expectedResponse = ['access_token' => 'testToken'];
    $responseMock     = Mockery::mock(Response::class);
    $responseMock->shouldReceive('json')->andReturn($expectedResponse);

    // Mock the call method to return the response mock
    $url     = 'auth/token';
    $args    = [
        'grant_type' => 'client_credentials',
    ];
    $headers = [
        'Authorization' => 'Basic '
            . base64_encode(
                config('sigmarest.client-id') . ':' . config('sigmarest.client-secret')
            ),
        'Content-Type'  => 'application/x-www-form-urlencoded',
    ];
    $method  = 'POST';
    $asForm  = true;
    $mock->shouldReceive('call')
        ->with($url, $args, $headers, $method, $asForm)
        ->andReturn($responseMock);

    // Instantiate the class to trigger the constructor
    $mock->__construct();

    // Validate the token was set to the mocked value
    expect($mock->getToken())->toBe('testToken');

    // Clean up Mockery expectations
    Mockery::close();
});

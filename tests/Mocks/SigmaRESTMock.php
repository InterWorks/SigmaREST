<?php

namespace InterWorks\SigmaREST\Tests\Mocks;

use Mockery;
use Illuminate\Http\Client\Response;
use InterWorks\SigmaREST\SigmaREST;

class SigmaRESTMock
{
    /**
     * Mock the SigmaREST class call function.
     *
     * @param mixed  $expectedResponse
     * @param string $url
     *
     * @return mixed[]|Response
     */
    public static function mockWithCall(mixed $expectedResponse, string $url): mixed
    {
        // Mock the SigmaREST class, specifically to check if _authenticate is called
        $mock = Mockery::mock(SigmaREST::class)->makePartial()->shouldAllowMockingProtectedMethods();

        // Ensure the _authenticate method is called in the constructor
        $mock->shouldReceive('_authenticate')
            ->once()
            ->andReturnNull();

        // Instantiate the class to trigger the constructor
        $mock->__construct();

        // Create a mock for the Illuminate\Http\Client\Response class
        $responseMock = Mockery::mock(Response::class);
        $responseMock->shouldReceive('body')->andReturn($expectedResponse);
        $responseMock->shouldReceive('json')->andReturn($expectedResponse);
        $responseMock->shouldReceive('status')->andReturn(200);
        $responseMock->shouldReceive('successful')->andReturnTrue();

        // Mock the call method to return the response mock
        $mock->shouldReceive('call')
            ->withArgs(function ($passedUrl) use ($url) {
                return $passedUrl === $url;
            })
            ->andReturn($responseMock);

        return $mock;
    }

    /**
     * Mock the SigmaREST class call function to simulate a failed call.
     *
     * @param int    $status
     * @param string $body
     * @param string $url
     *
     * @return mixed[]|Response
     */
    public static function mockWithFailedCall(int $status, string $body, string $url): mixed
    {
        // Mock the SigmaREST class, specifically to check if _authenticate is called
        $mock = Mockery::mock(SigmaREST::class)->makePartial()->shouldAllowMockingProtectedMethods();

        // Ensure the _authenticate method is called in the constructor
        $mock->shouldReceive('_authenticate')
            ->once()
            ->andReturnNull();

        // Instantiate the class to trigger the constructor
        $mock->__construct();

        // Create a mock for the Illuminate\Http\Client\Response class that simulates a failed response
        $responseMock = Mockery::mock(Response::class);
        $responseMock->shouldReceive('body')->andReturn($body);
        $responseMock->shouldReceive('json')->andReturn(json_decode($body, true));
        $responseMock->shouldReceive('status')->andReturn($status);
        $responseMock->shouldReceive('failed')->andReturnTrue();
        $responseMock->shouldReceive('successful')->andReturnFalse();

        // Mock the call method to return the response mock
        $mock->shouldReceive('call')
            ->withArgs(function ($passedUrl) use ($url) {
                return $passedUrl === $url;
            })
            ->andReturn($responseMock);

        return $mock;
    }
}

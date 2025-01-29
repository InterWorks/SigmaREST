<?php

use InterWorks\SigmaREST\Tests\Mocks\SigmaRESTMock;

test('favoriteDocument unit test', function () {
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, 'favorites');

    expect($mock->favoriteDocument($args))->toBe(true);

    Mockery::close();
});

test('getFavoriteDocuments unit test', function () {
    $memberID = 'testMemberID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "favorites/members/$memberID");

    expect($mock->getFavoriteDocuments($memberID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('unfavoriteDocument unit test', function () {
    $memberID = 'testMemberID';
    $inodeID = 'testInodeID';
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "favorites/member/$memberID/file/$inodeID");

    expect($mock->unfavoriteDocument($memberID, $inodeID))->toBe($expectedResponse);

    Mockery::close();
});

<?php

use InterWorks\SigmaREST\Tests\Mocks\SigmaRESTMock;

test('createMember unit test', function () {
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, 'members');

    expect($mock->createMember($args))->toBe($expectedResponse);

    Mockery::close();
});

test('deactivateMember unit test', function () {
    $memberID = 'testMemberID';
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "members/$memberID");

    expect($mock->deactivateMember($memberID))->toBe($expectedResponse);

    Mockery::close();
});

test('getFavoriteMemberFiles unit test', function () {
    $memberID = 'testMemberID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "members/$memberID/files/favorite");

    expect($mock->getFavoriteMemberFiles($memberID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('getMember unit test', function () {
    $memberID = 'testMemberID';
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "members/$memberID");

    expect($mock->getMember($memberID))->toBe($expectedResponse);

    Mockery::close();
});

test('getMemberFiles unit test', function () {
    $memberID = 'testMemberID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "members/$memberID/files");

    expect($mock->getMemberFiles($memberID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('getMembers unit test', function () {
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, 'members');

    expect($mock->getMembers($args))->toBe($expectedResponse);

    Mockery::close();
});

test('getMemberTeams unit test', function () {
    $memberID = 'testMemberID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "members/$memberID/teams");

    expect($mock->getMemberTeams($memberID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('getRecentMemberFiles unit test', function () {
    $memberID = 'testMemberID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "members/$memberID/files/recent");

    expect($mock->getRecentMemberFiles($memberID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('updateMember unit test', function () {
    $memberID = 'testMemberID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "members/$memberID");

    expect($mock->updateMember($memberID, $args))->toBe($expectedResponse);

    Mockery::close();
});

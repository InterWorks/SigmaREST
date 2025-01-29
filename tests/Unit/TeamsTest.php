<?php

use InterWorks\SigmaREST\Tests\Mocks\SigmaRESTMock;

test('createTeam unit test', function () {
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, 'teams');

    expect($mock->createTeam($args))->toBe($expectedResponse);

    Mockery::close();
});

test('deleteTeam unit test', function () {
    $teamID = 'testTeamID';
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "teams/$teamID");

    expect($mock->deleteTeam($teamID))->toBe($expectedResponse);

    Mockery::close();
});

test('getTeam unit test', function () {
    $teamID = 'testTeamID';
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "teams/$teamID");

    expect($mock->getTeam($teamID))->toBe($expectedResponse);

    Mockery::close();
});

test('getTeamMembers unit test', function () {
    $teamID = 'testTeamID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "teams/$teamID/members");

    expect($mock->getTeamMembers($teamID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('getTeams unit test', function () {
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, 'teams');

    expect($mock->getTeams($args))->toBe($expectedResponse);

    Mockery::close();
});

test('getTeamUserAttributes unit test', function () {
    $teamID = 'testTeamID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "teams/$teamID/user-attribute");

    expect($mock->getTeamUserAttributes($teamID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('updateTeam unit test', function () {
    $teamID = 'testTeamID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "teams/$teamID");

    expect($mock->updateTeam($teamID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('updateTeamMembers unit test', function () {
    $teamID = 'testTeamID';
    $args = ['test' => 'test'];
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "teams/$teamID/members");

    expect($mock->updateTeamMembers($teamID, $args))->toBe($expectedResponse);

    Mockery::close();
});

<?php

use InterWorks\SigmaREST\Tests\Mocks\SigmaRESTMock;

test('createUserAttribute unit test', function () {
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, 'user-attributes');

    expect($mock->createUserAttribute($args))->toBe($expectedResponse);

    Mockery::close();
});

test('deleteUserAttributeForTeam unit test', function () {
    $attributeID = 'testAttributeID';
    $teamID = 'testTeamID';
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "user-attributes/$attributeID/teams/$teamID");

    expect($mock->deleteUserAttributeForTeam($attributeID, $teamID))->toBe($expectedResponse);

    Mockery::close();
});

test('deleteUserAttributeForUser unit test', function () {
    $attributeID = 'testAttributeID';
    $userID = 'testUserID';
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "user-attributes/$attributeID/users/$userID");

    expect($mock->deleteUserAttributeForUser($attributeID, $userID))->toBe($expectedResponse);

    Mockery::close();
});

test('getUserAttribute unit test', function () {
    $attributeID = 'testAttributeID';
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "user-attributes/$attributeID");

    expect($mock->getUserAttribute($attributeID))->toBe($expectedResponse);

    Mockery::close();
});

test('getUserAttributes unit test', function () {
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, 'user-attributes');

    expect($mock->getUserAttributes($args))->toBe($expectedResponse);

    Mockery::close();
});

test('getUserAttributeTeamAssignments unit test', function () {
    $attributeID = 'testAttributeID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "user-attributes/$attributeID/teams");

    expect($mock->getUserAttributeTeamAssignments($attributeID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('getUsersByUserAttribute unit test', function () {
    $attributeID = 'testAttributeID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "user-attributes/$attributeID/users");

    expect($mock->getUsersByUserAttribute($attributeID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('setUserAttributeForTeams unit test', function () {
    $attributeID = 'testAttributeID';
    $args = ['test' => 'test'];
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "user-attributes/$attributeID/teams");

    expect($mock->setUserAttributeForTeams($attributeID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('setUserAttributeForUsers unit test', function () {
    $attributeID = 'testAttributeID';
    $args = ['test' => 'test'];
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "user-attributes/$attributeID/users");

    expect($mock->setUserAttributeForUsers($attributeID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('updateUserAttributeForTeams unit test', function () {
    $attributeID = 'testAttributeID';
    $args = ['test' => 'test'];
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "user-attributes/$attributeID/teams");

    expect($mock->updateUserAttributeForTeams($attributeID, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('updateUserAttributeForUsers unit test', function () {
    $attributeID = 'testAttributeID';
    $args = ['test' => 'test'];
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "user-attributes/$attributeID/users");

    expect($mock->updateUserAttributeForUsers($attributeID, $args))->toBe($expectedResponse);

    Mockery::close();
});

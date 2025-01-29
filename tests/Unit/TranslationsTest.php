<?php

use InterWorks\SigmaREST\Tests\Mocks\SigmaRESTMock;

test('createOrganizationTranslationFile unit test', function () {
    $args = ['test' => 'test'];
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, 'translations/organization');

    expect($mock->createOrganizationTranslationFile($args))->toBe($expectedResponse);

    Mockery::close();
});

test('deleteOrganizationTranslationFile unit test', function () {
    $lng = 'testLng';
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "translations/organization/$lng");

    expect($mock->deleteOrganizationTranslationFile($lng))->toBe($expectedResponse);

    Mockery::close();
});

test('deleteOrganizationTranslationFileWithVariant unit test', function () {
    $lng = 'testLng';
    $lngVariant = 'testVariant';
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "translations/organization/$lng/$lngVariant");

    expect($mock->deleteOrganizationTranslationFileWithVariant($lng, $lngVariant))->toBe($expectedResponse);

    Mockery::close();
});

test('getOrganizationTranslationFile unit test', function () {
    $lng = 'testLng';
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "translations/organization/$lng");

    expect($mock->getOrganizationTranslationFile($lng))->toBe($expectedResponse);

    Mockery::close();
});

test('getOrganizationTranslationFiles unit test', function () {
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, 'translations/organization');

    expect($mock->getOrganizationTranslationFiles($args))->toBe($expectedResponse);

    Mockery::close();
});

test('getOrganizationTranslationFileWithVariant unit test', function () {
    $lng = 'testLng';
    $lngVariant = 'testVariant';
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "translations/organization/$lng/$lngVariant");

    expect($mock->getOrganizationTranslationFileWithVariant($lng, $lngVariant))->toBe($expectedResponse);

    Mockery::close();
});

test('updateOrganizationTranslationFile unit test', function () {
    $lng = 'testLng';
    $args = ['test' => 'test'];
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "translations/organization/$lng");

    expect($mock->updateOrganizationTranslationFile($lng, $args))->toBe($expectedResponse);

    Mockery::close();
});

test('updateOrganizationTranslationFileWithVariant unit test', function () {
    $lng = 'testLng';
    $lngVariant = 'testVariant';
    $args = ['test' => 'test'];
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "translations/organization/$lng/$lngVariant");

    expect($mock->updateOrganizationTranslationFileWithVariant($lng, $lngVariant, $args))->toBe($expectedResponse);

    Mockery::close();
});

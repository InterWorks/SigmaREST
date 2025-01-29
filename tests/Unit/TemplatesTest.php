<?php

use InterWorks\SigmaREST\Tests\Mocks\SigmaRESTMock;

test('acceptSharedTemplate unit test', function () {
    $args = ['test' => 'test'];
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, 'shared_templates/accept');

    expect($mock->acceptSharedTemplate($args))->toBe($expectedResponse);

    Mockery::close();
});

test('createWorkbookFromTemplate unit test', function () {
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, 'templates/save_workbook');

    expect($mock->createWorkbookFromTemplate($args))->toBe($expectedResponse);

    Mockery::close();
});

test('deleteSharedTemplate unit test', function () {
    $shareID = 'testShareID';
    $expectedResponse = true;
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "shared_templates/$shareID");

    expect($mock->deleteSharedTemplate($shareID))->toBe($expectedResponse);

    Mockery::close();
});

test('getSharedTemplates unit test', function () {
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, 'shared_templates/shared_with_you');

    expect($mock->getSharedTemplates($args))->toBe($expectedResponse);

    Mockery::close();
});

test('getTemplate unit test', function () {
    $templateID = 'testTemplateID';
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "templates/$templateID");

    expect($mock->getTemplate($templateID))->toBe($expectedResponse);

    Mockery::close();
});

test('getTemplates unit test', function () {
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, 'templates');

    expect($mock->getTemplates($args))->toBe($expectedResponse);

    Mockery::close();
});

test('swapTemplateDataSources unit test', function () {
    $templateID = 'testTemplateID';
    $args = ['test' => 'test'];
    $expectedResponse = ['test' => 'test'];
    $mock = SigmaRESTMock::mockWithCall($expectedResponse, "templates/$templateID/swapSources");

    expect($mock->swapTemplateDataSources($templateID, $args))->toBe($expectedResponse);

    Mockery::close();
});

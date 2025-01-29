# Sigma REST API for Laravel

<a href="https://github.com/InterWorks/SigmaREST/actions"><img alt="GitHub Workflow Status (Pest)" src="https://img.shields.io/github/actions/workflow/status/InterWorks/SigmaREST/pest.yml?branch=main&label=Pest&style=round-square"></a>
<a href="https://github.com/InterWorks/SigmaREST/actions"><img alt="GitHub Workflow Status (PHPStan)" src="https://img.shields.io/github/actions/workflow/status/InterWorks/SigmaREST/phpstan.yml?branch=main&label=PHPStan&style=round-square"></a>
<a href="https://packagist.org/packages/InterWorks/SigmaREST"><img alt="Latest Version" src="https://img.shields.io/packagist/v/InterWorks/SigmaREST"></a>
<a href="https://packagist.org/packages/InterWorks/SigmaREST"><img alt="License" src="https://img.shields.io/github/license/InterWorks/SigmaREST"></a>

This is a simple API for calling REST API's against Sigma. It handles authentication for you so install, add the environment variables, and start making REST API calls!

## Getting Started

### Installation

Requires PHP >= 8.2.

```shell
composer require interworks/sigmarest
```

Next, add the following required environment variables to your .env file:

```env
SIGMA_API_URL="https://YOUR-API-URL.com"
SIGMA_CLIENT_ID="YOUR-CLIENT-ID"
SIGMA_CLIENT_SECRET="YOUR-CLIENT-SECRET"
```

Use the following doc from Sigma to find these values: [Get started with the Sigma REST API](https://help.sigmacomputing.com/reference/get-started-sigma-api)

## Usage Guide

There is a function for each documented Sigma REST API endpoint. Those endpoints can be found here: [Sigma REST API Documentation](https://help.sigmacomputing.com/reference/listconnections)

### Basic Usage

Instantiate a SigmaREST object and start making calls!

```php
use InterWorks\SigmaREST\SigmaREST;

// Instantiate
$sigma = new SigmaREST();

// Get first 100 users and create a collection.
$users = $sigma->getMembers(['limit' => 100]);
$users = collect($users['entries']);

// Get first 10 workbooks, loop through each and get their sources
$workbooks = $sigma->getWorkbooks(['limit' => 10]);
$sources   = [];
foreach ($workbooks['entries'] as $workbook) {
    $sources[] = $sigma->getWorkbookSource($workbook['workbookId']);
}
```

### Unsupported Endpoints

If there's an endpoint missed, you can use the `call` function to specify the URL, arguments, and method. The function returns a `Illuminate\Http\Client\Response` object.

```php
$response = $sigma->call(
    url   : 'cool/unknown/endpoint',
    args  : ['name' => 'Cool thing'],
    method: 'POST'
);
$response->json();
```

### Function Return Type Options

By default, either an array or boolean will be returned depending on the endpoint. If you'd like more control over how the response is processed, you can set `returnResponseObject` to `true` in the constructor to always receive the `Illuminate\Http\Client\Response` object.

```php
$sigma    = new SigmaREST(returnResponseObject: true);
$response = $sigma->getMembers(['limit' => 100]);
$success  = $response->successful();
$body     = $response->body();
$users    = $response->json();
```

## License

This package is released under the MIT License. See [`LICENSE`](LICENSE.md) for details.

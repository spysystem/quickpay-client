# SwaggerClient-php
QuickPay client to capture and refund payments

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: v10
- Build package: class io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com//.git"
    }
  ],
  "require": {
    "/": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$accept_version = "v10"; // string | 
$date_year = "date_year_example"; // string | 
$order_id = "order_id_example"; // string | 
$state = "state_example"; // string | 

try {
    $result = $api_instance->paymentsGet($accept_version, $date_year, $order_id, $state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->paymentsGet: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://virtserver.swaggerhub.com/Spysystem/QuickPay/v10*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**paymentsGet**](docs/Api/DefaultApi.md#paymentsget) | **GET** /payments | Get a list of all payments
*DefaultApi* | [**paymentsIdCapturePost**](docs/Api/DefaultApi.md#paymentsidcapturepost) | **POST** /payments/{id}/capture | 
*DefaultApi* | [**paymentsIdGet**](docs/Api/DefaultApi.md#paymentsidget) | **GET** /payments/{id} | Retrieves the details of a Payment.
*DefaultApi* | [**paymentsIdRefundPost**](docs/Api/DefaultApi.md#paymentsidrefundpost) | **POST** /payments/{id}/refund | 


## Documentation For Models

 - [AddressModel](docs/Model/AddressModel.md)
 - [BasketModel](docs/Model/BasketModel.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [MetadataModel](docs/Model/MetadataModel.md)
 - [OperationModel](docs/Model/OperationModel.md)
 - [PaymentLinkModel](docs/Model/PaymentLinkModel.md)
 - [PaymentModel](docs/Model/PaymentModel.md)
 - [ShippingModel](docs/Model/ShippingModel.md)


## Documentation For Authorization


## BasicAuth

- **Type**: HTTP basic authentication


## Author





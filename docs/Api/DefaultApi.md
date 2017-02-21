# Swagger\Client\DefaultApi

All URIs are relative to *https://virtserver.swaggerhub.com/Spysystem/QuickPay/v10*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentsGet**](DefaultApi.md#paymentsGet) | **GET** /payments | Get a list of all payments
[**paymentsIdCapturePost**](DefaultApi.md#paymentsIdCapturePost) | **POST** /payments/{id}/capture | 
[**paymentsIdGet**](DefaultApi.md#paymentsIdGet) | **GET** /payments/{id} | Retrieves the details of a Payment.
[**paymentsIdRefundPost**](DefaultApi.md#paymentsIdRefundPost) | **POST** /payments/{id}/refund | 


# **paymentsGet**
> \Swagger\Client\Model\InlineResponse200 paymentsGet($accept_version, $date_year, $order_id, $state)

Get a list of all payments

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_version** | **string**|  | [default to v10]
 **date_year** | **string**|  | [optional]
 **order_id** | **string**|  | [optional]
 **state** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentsIdCapturePost**
> \Swagger\Client\Model\PaymentModel paymentsIdCapturePost($accept_version, $id, $synchronized, $amount)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$accept_version = "v10"; // string | 
$id = 56; // int | The id of the Payment to capture
$synchronized = true; // bool | Disables asynchronious behaviour and returns the transaction with completed operation (ex. see GET /payments/{id}). MUST be used as a query parameter “?synchronized” (value not required)
$amount = 3.4; // float | Amount

try {
    $result = $api_instance->paymentsIdCapturePost($accept_version, $id, $synchronized, $amount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->paymentsIdCapturePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_version** | **string**|  | [default to v10]
 **id** | **int**| The id of the Payment to capture |
 **synchronized** | **bool**| Disables asynchronious behaviour and returns the transaction with completed operation (ex. see GET /payments/{id}). MUST be used as a query parameter “?synchronized” (value not required) | [optional]
 **amount** | **float**| Amount | [optional]

### Return type

[**\Swagger\Client\Model\PaymentModel**](../Model/PaymentModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentsIdGet**
> \Swagger\Client\Model\PaymentModel paymentsIdGet($accept_version, $id, $operations_size)

Retrieves the details of a Payment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$accept_version = "v10"; // string | 
$id = 56; // int | The id of the Payment to retrieve
$operations_size = 56; // int | Maximum number of operations to retrieve

try {
    $result = $api_instance->paymentsIdGet($accept_version, $id, $operations_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->paymentsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_version** | **string**|  | [default to v10]
 **id** | **int**| The id of the Payment to retrieve |
 **operations_size** | **int**| Maximum number of operations to retrieve | [optional]

### Return type

[**\Swagger\Client\Model\PaymentModel**](../Model/PaymentModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentsIdRefundPost**
> \Swagger\Client\Model\PaymentModel paymentsIdRefundPost($accept_version, $id, $synchronized, $amount)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$accept_version = "v10"; // string | 
$id = 56; // int | The id of the Payment to refund
$synchronized = true; // bool | Disables asynchronious behaviour and returns the transaction with completed operation (ex. see GET /payments/{id}). MUST be used as a query parameter “?synchronized” (value not required)
$amount = 3.4; // float | Amount

try {
    $result = $api_instance->paymentsIdRefundPost($accept_version, $id, $synchronized, $amount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->paymentsIdRefundPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_version** | **string**|  | [default to v10]
 **id** | **int**| The id of the Payment to refund |
 **synchronized** | **bool**| Disables asynchronious behaviour and returns the transaction with completed operation (ex. see GET /payments/{id}). MUST be used as a query parameter “?synchronized” (value not required) | [optional]
 **amount** | **float**| Amount | [optional]

### Return type

[**\Swagger\Client\Model\PaymentModel**](../Model/PaymentModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# PaymentModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**merchant_id** | **int** |  | [optional] 
**order_id** | **string** |  | [optional] 
**accepted** | **bool** |  | [optional] 
**type** | **string** |  | [optional] 
**text_on_statement** | **string** |  | [optional] 
**branding_id** | **int** |  | [optional] 
**variables** | **string** |  | [optional] 
**currency** | **string** |  | [optional] 
**state** | **string** |  | [optional] 
**metadata** | [**\Swagger\Client\Model\MetadataModel**](MetadataModel.md) |  | [optional] 
**link** | [**\Swagger\Client\Model\PaymentLinkModel**](PaymentLinkModel.md) |  | [optional] 
**shipping_address** | [**\Swagger\Client\Model\AddressModel**](AddressModel.md) |  | [optional] 
**invoice_address** | [**\Swagger\Client\Model\AddressModel**](AddressModel.md) |  | [optional] 
**basket** | [**\Swagger\Client\Model\BasketModel**](BasketModel.md) |  | [optional] 
**shipping** | [**\Swagger\Client\Model\ShippingModel**](ShippingModel.md) |  | [optional] 
**operations** | [**\Swagger\Client\Model\OperationModel[]**](OperationModel.md) |  | [optional] 
**test_mode** | **bool** |  | [optional] 
**acquirer** | **string** |  | [optional] 
**facilitator** | **string** |  | [optional] 
**created_at** | **string** | ISO-8601 timestamp | [optional] 
**updated_at** | **string** | ISO-8601 timestamp | [optional] 
**balance** | **float** |  | [optional] 
**fee** | **float** |  | [optional] 
**subscription_id** | **int** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



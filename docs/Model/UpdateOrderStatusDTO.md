# # UpdateOrderStatusDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор заказа. | [optional]
**status** | [**\OpenAPI\Client\Model\OrderStatusType**](OrderStatusType.md) |  | [optional]
**substatus** | [**\OpenAPI\Client\Model\OrderSubstatusType**](OrderSubstatusType.md) |  | [optional]
**update_status** | [**\OpenAPI\Client\Model\OrderUpdateStatusType**](OrderUpdateStatusType.md) |  | [optional]
**error_details** | **string** | Ошибка при изменении статуса заказа. Содержит описание ошибки и идентификатор заказа.  Возвращается, если параметр &#x60;updateStatus&#x60; принимает значение &#x60;ERROR&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

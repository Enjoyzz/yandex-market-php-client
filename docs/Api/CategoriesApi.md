# OpenAPI\Client\CategoriesApi

All URIs are relative to https://api.partner.market.yandex.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCategoriesTree()**](CategoriesApi.md#getCategoriesTree) | **POST** /categories/tree | Дерево категорий |


## `getCategoriesTree()`

```php
getCategoriesTree($get_categories_request): \OpenAPI\Client\Model\GetCategoriesResponse
```

Дерево категорий

Возвращает дерево категорий Маркета.  |**⚙️ Лимит:** 1 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_categories_request = new \OpenAPI\Client\Model\GetCategoriesRequest(); // \OpenAPI\Client\Model\GetCategoriesRequest

try {
    $result = $apiInstance->getCategoriesTree($get_categories_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getCategoriesTree: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_categories_request** | [**\OpenAPI\Client\Model\GetCategoriesRequest**](../Model/GetCategoriesRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetCategoriesResponse**](../Model/GetCategoriesResponse.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

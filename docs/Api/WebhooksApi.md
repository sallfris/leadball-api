# sallfris\Leadball\Client\WebhooksApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiWebhooksGet**](WebhooksApi.md#apiwebhooksget) | **GET** /api/webhooks | Find all webhooks
[**apiWebhooksPost**](WebhooksApi.md#apiwebhookspost) | **POST** /api/webhooks | Create new webhook
[**apiWebhooksidDelete**](WebhooksApi.md#apiwebhooksiddelete) | **DELETE** /api/webhooks/:id | Delete webhook
[**apiWebhooksidGet**](WebhooksApi.md#apiwebhooksidget) | **GET** /api/webhooks/:id | Find webhook by id
[**apiWebhooksidPut**](WebhooksApi.md#apiwebhooksidput) | **PUT** /api/webhooks/:id | Update webhook

# **apiWebhooksGet**
> apiWebhooksGet()

Find all webhooks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new sallfris\Leadball\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->apiWebhooksGet();
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->apiWebhooksGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiWebhooksPost**
> apiWebhooksPost()

Create new webhook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new sallfris\Leadball\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->apiWebhooksPost();
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->apiWebhooksPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiWebhooksidDelete**
> apiWebhooksidDelete()

Delete webhook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new sallfris\Leadball\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->apiWebhooksidDelete();
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->apiWebhooksidDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiWebhooksidGet**
> apiWebhooksidGet()

Find webhook by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new sallfris\Leadball\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->apiWebhooksidGet();
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->apiWebhooksidGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiWebhooksidPut**
> apiWebhooksidPut()

Update webhook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new sallfris\Leadball\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->apiWebhooksidPut();
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->apiWebhooksidPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


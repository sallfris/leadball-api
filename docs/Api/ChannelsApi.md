# sallfris\Leadball\Client\ChannelsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiChannelsGet**](ChannelsApi.md#apichannelsget) | **GET** /api/channels | Find all channels
[**apiChannelsPost**](ChannelsApi.md#apichannelspost) | **POST** /api/channels | Create new channel
[**apiChannelsidDelete**](ChannelsApi.md#apichannelsiddelete) | **DELETE** /api/channels/:id | Delete channel
[**apiChannelsidGet**](ChannelsApi.md#apichannelsidget) | **GET** /api/channels/:id | Find channel by id
[**apiChannelsidPut**](ChannelsApi.md#apichannelsidput) | **PUT** /api/channels/:id | Update channel

# **apiChannelsGet**
> apiChannelsGet()

Find all channels

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new sallfris\Leadball\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->apiChannelsGet();
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->apiChannelsGet: ', $e->getMessage(), PHP_EOL;
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

# **apiChannelsPost**
> apiChannelsPost()

Create new channel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new sallfris\Leadball\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->apiChannelsPost();
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->apiChannelsPost: ', $e->getMessage(), PHP_EOL;
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

# **apiChannelsidDelete**
> apiChannelsidDelete()

Delete channel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new sallfris\Leadball\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->apiChannelsidDelete();
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->apiChannelsidDelete: ', $e->getMessage(), PHP_EOL;
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

# **apiChannelsidGet**
> apiChannelsidGet()

Find channel by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new sallfris\Leadball\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->apiChannelsidGet();
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->apiChannelsidGet: ', $e->getMessage(), PHP_EOL;
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

# **apiChannelsidPut**
> apiChannelsidPut()

Update channel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new sallfris\Leadball\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->apiChannelsidPut();
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->apiChannelsidPut: ', $e->getMessage(), PHP_EOL;
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


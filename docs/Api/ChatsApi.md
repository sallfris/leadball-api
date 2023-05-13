# sallfris\Leadball\Client\ChatsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiChatsGet**](ChatsApi.md#apichatsget) | **GET** /api/chats | Find all chats
[**apiChatsPost**](ChatsApi.md#apichatspost) | **POST** /api/chats | Create new chat
[**apiChatsSearchGet**](ChatsApi.md#apichatssearchget) | **GET** /api/chats/search | Find chats by query
[**apiChatsidAttachmentsGet**](ChatsApi.md#apichatsidattachmentsget) | **GET** /api/chats/:id/attachments | Find chat attachments
[**apiChatsidDelete**](ChatsApi.md#apichatsiddelete) | **DELETE** /api/chats/:id | Delete chat
[**apiChatsidGet**](ChatsApi.md#apichatsidget) | **GET** /api/chats/:id | Find chat by id

# **apiChatsGet**
> apiChatsGet()

Find all chats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new sallfris\Leadball\Client\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->apiChatsGet();
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->apiChatsGet: ', $e->getMessage(), PHP_EOL;
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

# **apiChatsPost**
> apiChatsPost()

Create new chat

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new sallfris\Leadball\Client\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->apiChatsPost();
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->apiChatsPost: ', $e->getMessage(), PHP_EOL;
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

# **apiChatsSearchGet**
> apiChatsSearchGet()

Find chats by query

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new sallfris\Leadball\Client\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->apiChatsSearchGet();
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->apiChatsSearchGet: ', $e->getMessage(), PHP_EOL;
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

# **apiChatsidAttachmentsGet**
> apiChatsidAttachmentsGet()

Find chat attachments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new sallfris\Leadball\Client\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->apiChatsidAttachmentsGet();
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->apiChatsidAttachmentsGet: ', $e->getMessage(), PHP_EOL;
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

# **apiChatsidDelete**
> apiChatsidDelete()

Delete chat

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new sallfris\Leadball\Client\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->apiChatsidDelete();
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->apiChatsidDelete: ', $e->getMessage(), PHP_EOL;
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

# **apiChatsidGet**
> apiChatsidGet()

Find chat by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new sallfris\Leadball\Client\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->apiChatsidGet();
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->apiChatsidGet: ', $e->getMessage(), PHP_EOL;
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


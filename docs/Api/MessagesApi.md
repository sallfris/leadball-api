# sallfris\Leadball\Client\MessagesApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiBatchMessagesReadPut**](MessagesApi.md#apibatchmessagesreadput) | **PUT** /api/batch/messages/read | Mark messages as read
[**apiChatsidHsmOnlyPost**](MessagesApi.md#apichatsidhsmonlypost) | **POST** /api/chats/:id/hsmOnly | Check if we can only send hsm messages
[**apiChatsidMessagesGet**](MessagesApi.md#apichatsidmessagesget) | **GET** /api/chats/:id/messages | Find chat messages
[**apiChatsidMessagesPost**](MessagesApi.md#apichatsidmessagespost) | **POST** /api/chats/:id/messages | Create new message in chat

# **apiBatchMessagesReadPut**
> apiBatchMessagesReadPut()

Mark messages as read

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new sallfris\Leadball\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->apiBatchMessagesReadPut();
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->apiBatchMessagesReadPut: ', $e->getMessage(), PHP_EOL;
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

# **apiChatsidHsmOnlyPost**
> apiChatsidHsmOnlyPost()

Check if we can only send hsm messages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new sallfris\Leadball\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->apiChatsidHsmOnlyPost();
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->apiChatsidHsmOnlyPost: ', $e->getMessage(), PHP_EOL;
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

# **apiChatsidMessagesGet**
> apiChatsidMessagesGet()

Find chat messages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new sallfris\Leadball\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->apiChatsidMessagesGet();
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->apiChatsidMessagesGet: ', $e->getMessage(), PHP_EOL;
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

# **apiChatsidMessagesPost**
> apiChatsidMessagesPost()

Create new message in chat

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new sallfris\Leadball\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->apiChatsidMessagesPost();
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->apiChatsidMessagesPost: ', $e->getMessage(), PHP_EOL;
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


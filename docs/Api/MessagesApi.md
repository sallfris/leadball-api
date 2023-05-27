# sallfris\Leadball\Client\MessagesApi

All URIs are relative to *https://ms.leadball.app/api*

| Method                                                              | HTTP request                      | Description                |
|---------------------------------------------------------------------|-----------------------------------|----------------------------|
| [**createMessage**](MessagesApi.md#createmessage)                   | **POST** /chats/{chatId}/messages | Create a message           |
| [**findAllMessages**](MessagesApi.md#findallmessages)               | **GET** /chats/{chatId}/messages  | Find a messages            |
| [**findAllMessagesByQuery**](MessagesApi.md#findallmessagesbyquery) | **GET** /chats/search             | Find all messages by query |
| [**readMessages**](MessagesApi.md#readmessages)                     | **PUT** /batch/messages/read      | Read messages              |

# **createMessage**
> \sallfris\Leadball\Client\Model\Message createMessage($body, $chat_id)

Create a message

Create a message

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer_token
    $config = sallfris\Leadball\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new sallfris\Leadball\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \sallfris\Leadball\Client\Model\CreateMessageDto(); // \sallfris\Leadball\Client\Model\CreateMessageDto | Create a message
$chat_id = 56; // int | Id of the chat to which the message is being sent

try {
    $result = $apiInstance->createMessage($body, $chat_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->createMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name        | Type                                                                                 | Description                                       | Notes |
|-------------|--------------------------------------------------------------------------------------|---------------------------------------------------|-------|
| **body**    | [**\sallfris\Leadball\Client\Model\CreateMessageDto**](../Model/CreateMessageDto.md) | Create a message                                  |       |
| **chat_id** | **int**                                                                              | Id of the chat to which the message is being sent |       |

### Return type

[**\sallfris\Leadball\Client\Model\Message**](../Model/Message.md)

### Authorization

[bearer_token](../../README.md#bearer_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findAllMessages**
> \sallfris\Leadball\Client\Model\Message findAllMessages($chat_id, $offset, $limit)

Find a messages

Find a messages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer_token
    $config = sallfris\Leadball\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new sallfris\Leadball\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chat_id = 56; // int | Id of channel to return
$offset = 56; // int | Offset
$limit = 56; // int | Limit

try {
    $result = $apiInstance->findAllMessages($chat_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->findAllMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name        | Type    | Description             | Notes |
|-------------|---------|-------------------------|-------|
| **chat_id** | **int** | Id of channel to return |       |
| **offset**  | **int** | Offset                  |       |
| **limit**   | **int** | Limit                   |       |

### Return type

[**\sallfris\Leadball\Client\Model\Message**](../Model/Message.md)

### Authorization

[bearer_token](../../README.md#bearer_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findAllMessagesByQuery**
> \sallfris\Leadball\Client\Model\Message[][] findAllMessagesByQuery($query, $offset, $limit)

Find all messages by query

Find all messages by query

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer_token
    $config = sallfris\Leadball\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new sallfris\Leadball\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = "query_example"; // string | Search query
$offset = 56; // int | Offset
$limit = 56; // int | Limit

try {
    $result = $apiInstance->findAllMessagesByQuery($query, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->findAllMessagesByQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name       | Type       | Description  | Notes |
|------------|------------|--------------|-------|
| **query**  | **string** | Search query |       |
| **offset** | **int**    | Offset       |       |
| **limit**  | **int**    | Limit        |       |

### Return type

[**\sallfris\Leadball\Client\Model\Message[][]**](../Model/Message.md)

### Authorization

[bearer_token](../../README.md#bearer_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readMessages**
> \sallfris\Leadball\Client\Model\InlineResponse200 readMessages($body)

Read messages

Read messages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer_token
    $config = sallfris\Leadball\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new sallfris\Leadball\Client\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \sallfris\Leadball\Client\Model\ReadMessagesDto(); // \sallfris\Leadball\Client\Model\ReadMessagesDto | Read messages

try {
    $result = $apiInstance->readMessages($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->readMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name     | Type                                                                               | Description   | Notes |
|----------|------------------------------------------------------------------------------------|---------------|-------|
| **body** | [**\sallfris\Leadball\Client\Model\ReadMessagesDto**](../Model/ReadMessagesDto.md) | Read messages |       |

### Return type

[**\sallfris\Leadball\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[bearer_token](../../README.md#bearer_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


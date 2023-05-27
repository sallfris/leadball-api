# sallfris\Leadball\Client\ChatsApi

All URIs are relative to *https://ms.leadball.app/api*

| Method                                                   | HTTP request                        | Description               |
|----------------------------------------------------------|-------------------------------------|---------------------------|
| [**createChat**](ChatsApi.md#createchat)                 | **POST** /chats                     | Create a chat             |
| [**deleteChat**](ChatsApi.md#deletechat)                 | **DELETE** /chats/{chatId}          | Delete chat               |
| [**findAllAttachments**](ChatsApi.md#findallattachments) | **GET** /chats/{chatId}/attachments | Find all chat attachments |
| [**findAllChats**](ChatsApi.md#findallchats)             | **GET** /chats                      | Find all chats            |
| [**findOneChat**](ChatsApi.md#findonechat)               | **GET** /chats/{chatId}             | Find chat by id           |
| [**importChats**](ChatsApi.md#importchats)               | **POST** /chats/import              | Importing chats           |

# **createChat**
> \sallfris\Leadball\Client\Model\Chat createChat($body)

Create a chat

Create a chat

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer_token
    $config = sallfris\Leadball\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new sallfris\Leadball\Client\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \sallfris\Leadball\Client\Model\CreateChatDto(); // \sallfris\Leadball\Client\Model\CreateChatDto | Create a chat

try {
    $result = $apiInstance->createChat($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->createChat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name     | Type                                                                           | Description   | Notes |
|----------|--------------------------------------------------------------------------------|---------------|-------|
| **body** | [**\sallfris\Leadball\Client\Model\CreateChatDto**](../Model/CreateChatDto.md) | Create a chat |       |

### Return type

[**\sallfris\Leadball\Client\Model\Chat**](../Model/Chat.md)

### Authorization

[bearer_token](../../README.md#bearer_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteChat**
> deleteChat($chat_id)

Delete chat

Delete chat

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer_token
    $config = sallfris\Leadball\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new sallfris\Leadball\Client\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chat_id = 56; // int | Id of chat to delete

try {
    $apiInstance->deleteChat($chat_id);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->deleteChat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name        | Type    | Description          | Notes |
|-------------|---------|----------------------|-------|
| **chat_id** | **int** | Id of chat to delete |       |

### Return type

void (empty response body)

### Authorization

[bearer_token](../../README.md#bearer_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findAllAttachments**
> \sallfris\Leadball\Client\Model\Attachment[] findAllAttachments($chat_id, $type)

Find all chat attachments

Find all chat attachments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer_token
    $config = sallfris\Leadball\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new sallfris\Leadball\Client\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chat_id = 56; // int | Id of the chat where attachments are being searched
$type = "type_example"; // string | The type of attachments we are looking for

try {
    $result = $apiInstance->findAllAttachments($chat_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->findAllAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name        | Type       | Description                                         | Notes      |
|-------------|------------|-----------------------------------------------------|------------|
| **chat_id** | **int**    | Id of the chat where attachments are being searched |            |
| **type**    | **string** | The type of attachments we are looking for          | [optional] |

### Return type

[**\sallfris\Leadball\Client\Model\Attachment[]**](../Model/Attachment.md)

### Authorization

[bearer_token](../../README.md#bearer_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findAllChats**
> \sallfris\Leadball\Client\Model\Chat[] findAllChats($offset, $limit)

Find all chats

Find all chats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer_token
    $config = sallfris\Leadball\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new sallfris\Leadball\Client\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | Offset
$limit = 56; // int | Limit

try {
    $result = $apiInstance->findAllChats($offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->findAllChats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name       | Type    | Description | Notes |
|------------|---------|-------------|-------|
| **offset** | **int** | Offset      |       |
| **limit**  | **int** | Limit       |       |

### Return type

[**\sallfris\Leadball\Client\Model\Chat[]**](../Model/Chat.md)

### Authorization

[bearer_token](../../README.md#bearer_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findOneChat**
> \sallfris\Leadball\Client\Model\Chat findOneChat($chat_id)

Find chat by id

Find chat by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer_token
    $config = sallfris\Leadball\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new sallfris\Leadball\Client\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chat_id = 56; // int | Id of chat to return

try {
    $result = $apiInstance->findOneChat($chat_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->findOneChat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name        | Type    | Description          | Notes |
|-------------|---------|----------------------|-------|
| **chat_id** | **int** | Id of chat to return |       |

### Return type

[**\sallfris\Leadball\Client\Model\Chat**](../Model/Chat.md)

### Authorization

[bearer_token](../../README.md#bearer_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importChats**
> importChats($body)

Importing chats

Importing chats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer_token
    $config = sallfris\Leadball\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new sallfris\Leadball\Client\Api\ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \sallfris\Leadball\Client\Model\ImportChatsDto()); // \sallfris\Leadball\Client\Model\ImportChatsDto[] | Importing chats

try {
    $apiInstance->importChats($body);
} catch (Exception $e) {
    echo 'Exception when calling ChatsApi->importChats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name     | Type                                                                               | Description     | Notes |
|----------|------------------------------------------------------------------------------------|-----------------|-------|
| **body** | [**\sallfris\Leadball\Client\Model\ImportChatsDto[]**](../Model/ImportChatsDto.md) | Importing chats |       |

### Return type

void (empty response body)

### Authorization

[bearer_token](../../README.md#bearer_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


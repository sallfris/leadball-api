# leadball-api
No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2.27.08
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.6 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/sallfris/leadball-api.git"
    }
  ],
  "require": {
    "sallfris/leadball-api": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to */*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ChannelsApi* | [**apiChannelsGet**](docs/Api/ChannelsApi.md#apichannelsget) | **GET** /api/channels | Find all channels
*ChannelsApi* | [**apiChannelsPost**](docs/Api/ChannelsApi.md#apichannelspost) | **POST** /api/channels | Create new channel
*ChannelsApi* | [**apiChannelsidDelete**](docs/Api/ChannelsApi.md#apichannelsiddelete) | **DELETE** /api/channels/:id | Delete channel
*ChannelsApi* | [**apiChannelsidGet**](docs/Api/ChannelsApi.md#apichannelsidget) | **GET** /api/channels/:id | Find channel by id
*ChannelsApi* | [**apiChannelsidPut**](docs/Api/ChannelsApi.md#apichannelsidput) | **PUT** /api/channels/:id | Update channel
*ChatsApi* | [**apiChatsGet**](docs/Api/ChatsApi.md#apichatsget) | **GET** /api/chats | Find all chats
*ChatsApi* | [**apiChatsPost**](docs/Api/ChatsApi.md#apichatspost) | **POST** /api/chats | Create new chat
*ChatsApi* | [**apiChatsSearchGet**](docs/Api/ChatsApi.md#apichatssearchget) | **GET** /api/chats/search | Find chats by query
*ChatsApi* | [**apiChatsidAttachmentsGet**](docs/Api/ChatsApi.md#apichatsidattachmentsget) | **GET** /api/chats/:id/attachments | Find chat attachments
*ChatsApi* | [**apiChatsidDelete**](docs/Api/ChatsApi.md#apichatsiddelete) | **DELETE** /api/chats/:id | Delete chat
*ChatsApi* | [**apiChatsidGet**](docs/Api/ChatsApi.md#apichatsidget) | **GET** /api/chats/:id | Find chat by id
*HsmApi* | [**apiHsmTemplatesGet**](docs/Api/HsmApi.md#apihsmtemplatesget) | **GET** /api/hsm-templates | Find all hsm
*HsmApi* | [**apiHsmTemplatesIdApprovalPost**](docs/Api/HsmApi.md#apihsmtemplatesidapprovalpost) | **POST** /api/hsm-templates:/id/approval | Send hsm for approval
*HsmApi* | [**apiHsmTemplatesPost**](docs/Api/HsmApi.md#apihsmtemplatespost) | **POST** /api/hsm-templates | Create new hsm
*HsmApi* | [**apiHsmTemplatesidGet**](docs/Api/HsmApi.md#apihsmtemplatesidget) | **GET** /api/hsm-templates/:id | Find hsm by id
*HsmApi* | [**apiHsmTemplatesidPatch**](docs/Api/HsmApi.md#apihsmtemplatesidpatch) | **PATCH** /api/hsm-templates/:id | Update hsm
*HsmApi* | [**apiHsmidDelete**](docs/Api/HsmApi.md#apihsmiddelete) | **DELETE** /api/hsm/:id | Delete hsm
*MessagesApi* | [**apiBatchMessagesReadPut**](docs/Api/MessagesApi.md#apibatchmessagesreadput) | **PUT** /api/batch/messages/read | Mark messages as read
*MessagesApi* | [**apiChatsidHsmOnlyPost**](docs/Api/MessagesApi.md#apichatsidhsmonlypost) | **POST** /api/chats/:id/hsmOnly | Check if we can only send hsm messages
*MessagesApi* | [**apiChatsidMessagesGet**](docs/Api/MessagesApi.md#apichatsidmessagesget) | **GET** /api/chats/:id/messages | Find chat messages
*MessagesApi* | [**apiChatsidMessagesPost**](docs/Api/MessagesApi.md#apichatsidmessagespost) | **POST** /api/chats/:id/messages | Create new message in chat
*WebhooksApi* | [**apiWebhooksGet**](docs/Api/WebhooksApi.md#apiwebhooksget) | **GET** /api/webhooks | Find all webhooks
*WebhooksApi* | [**apiWebhooksPost**](docs/Api/WebhooksApi.md#apiwebhookspost) | **POST** /api/webhooks | Create new webhook
*WebhooksApi* | [**apiWebhooksidDelete**](docs/Api/WebhooksApi.md#apiwebhooksiddelete) | **DELETE** /api/webhooks/:id | Delete webhook
*WebhooksApi* | [**apiWebhooksidGet**](docs/Api/WebhooksApi.md#apiwebhooksidget) | **GET** /api/webhooks/:id | Find webhook by id
*WebhooksApi* | [**apiWebhooksidPut**](docs/Api/WebhooksApi.md#apiwebhooksidput) | **PUT** /api/webhooks/:id | Update webhook

## Documentation For Models

 - [ApprovalDto](docs/Model/ApprovalDto.md)
 - [Attachment](docs/Model/Attachment.md)
 - [Channel](docs/Model/Channel.md)
 - [Chat](docs/Model/Chat.md)
 - [CreateChannelDto](docs/Model/CreateChannelDto.md)
 - [CreateChatDto](docs/Model/CreateChatDto.md)
 - [CreateHsmDto](docs/Model/CreateHsmDto.md)
 - [CreateMessageDto](docs/Model/CreateMessageDto.md)
 - [CreateWebhookDto](docs/Model/CreateWebhookDto.md)
 - [Hsm](docs/Model/Hsm.md)
 - [Message](docs/Model/Message.md)
 - [ReadMessagesDto](docs/Model/ReadMessagesDto.md)
 - [ReadMessagesResponse](docs/Model/ReadMessagesResponse.md)
 - [UpdateChannelDto](docs/Model/UpdateChannelDto.md)
 - [UpdateChatDto](docs/Model/UpdateChatDto.md)
 - [UpdateHsmDto](docs/Model/UpdateHsmDto.md)
 - [UpdateMessageDto](docs/Model/UpdateMessageDto.md)
 - [UpdateWebhookDto](docs/Model/UpdateWebhookDto.md)
 - [Webhook](docs/Model/Webhook.md)

## Documentation For Authorization

 All endpoints do not require authorization.


## Author




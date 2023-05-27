# sallfris\Leadball\Client\WebhooksApi

All URIs are relative to *https://ms.leadball.app/api*

| Method                                                | HTTP request                     | Description        |
|-------------------------------------------------------|----------------------------------|--------------------|
| [**createWebhook**](WebhooksApi.md#createwebhook)     | **POST** /webhooks               | Create a webhook   |
| [**deleteWebhook**](WebhooksApi.md#deletewebhook)     | **DELETE** /webhooks/{webhookId} | Delete a webhook   |
| [**findAllWebhooks**](WebhooksApi.md#findallwebhooks) | **GET** /webhooks                | Find all webhooks  |
| [**findOneWebhook**](WebhooksApi.md#findonewebhook)   | **GET** /webhooks/{webhookId}    | Find webhook by id |
| [**updateWebhook**](WebhooksApi.md#updatewebhook)     | **PUT** /webhooks/{webhookId}    | Update a webhook   |

# **createWebhook**
> \sallfris\Leadball\Client\Model\Webhook createWebhook($body)

Create a webhook

Create a webhook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer_token
    $config = sallfris\Leadball\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new sallfris\Leadball\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \sallfris\Leadball\Client\Model\CreateWebhookDto(); // \sallfris\Leadball\Client\Model\CreateWebhookDto | Create a webhook

try {
    $result = $apiInstance->createWebhook($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->createWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name     | Type                                                                                 | Description      | Notes |
|----------|--------------------------------------------------------------------------------------|------------------|-------|
| **body** | [**\sallfris\Leadball\Client\Model\CreateWebhookDto**](../Model/CreateWebhookDto.md) | Create a webhook |       |

### Return type

[**\sallfris\Leadball\Client\Model\Webhook**](../Model/Webhook.md)

### Authorization

[bearer_token](../../README.md#bearer_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteWebhook**
> deleteWebhook($webhook_id)

Delete a webhook

Delete a webhook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer_token
    $config = sallfris\Leadball\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new sallfris\Leadball\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 56; // int | Webhook id to delete

try {
    $apiInstance->deleteWebhook($webhook_id);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->deleteWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name           | Type    | Description          | Notes |
|----------------|---------|----------------------|-------|
| **webhook_id** | **int** | Webhook id to delete |       |

### Return type

void (empty response body)

### Authorization

[bearer_token](../../README.md#bearer_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findAllWebhooks**
> \sallfris\Leadball\Client\Model\Webhook[] findAllWebhooks()

Find all webhooks

Find all webhooks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer_token
    $config = sallfris\Leadball\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new sallfris\Leadball\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->findAllWebhooks();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->findAllWebhooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\sallfris\Leadball\Client\Model\Webhook[]**](../Model/Webhook.md)

### Authorization

[bearer_token](../../README.md#bearer_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findOneWebhook**
> \sallfris\Leadball\Client\Model\Webhook findOneWebhook($webhook_id)

Find webhook by id

Returns a single webhook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer_token
    $config = sallfris\Leadball\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new sallfris\Leadball\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 56; // int | Id of webhook to return

try {
    $result = $apiInstance->findOneWebhook($webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->findOneWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name           | Type    | Description             | Notes |
|----------------|---------|-------------------------|-------|
| **webhook_id** | **int** | Id of webhook to return |       |

### Return type

[**\sallfris\Leadball\Client\Model\Webhook**](../Model/Webhook.md)

### Authorization

[bearer_token](../../README.md#bearer_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWebhook**
> \sallfris\Leadball\Client\Model\Webhook updateWebhook($webhook_id, $body)

Update a webhook

Update a webhook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer_token
    $config = sallfris\Leadball\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new sallfris\Leadball\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = 56; // int | Id of webhook that needs to be updated
$body = new \sallfris\Leadball\Client\Model\CreateWebhookDto(); // \sallfris\Leadball\Client\Model\CreateWebhookDto | Update a hsm

try {
    $result = $apiInstance->updateWebhook($webhook_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->updateWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name           | Type                                                                                 | Description                            | Notes      |
|----------------|--------------------------------------------------------------------------------------|----------------------------------------|------------|
| **webhook_id** | **int**                                                                              | Id of webhook that needs to be updated |            |
| **body**       | [**\sallfris\Leadball\Client\Model\CreateWebhookDto**](../Model/CreateWebhookDto.md) | Update a hsm                           | [optional] |

### Return type

[**\sallfris\Leadball\Client\Model\Webhook**](../Model/Webhook.md)

### Authorization

[bearer_token](../../README.md#bearer_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


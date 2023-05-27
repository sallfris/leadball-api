# sallfris\Leadball\Client\ChannelsApi

All URIs are relative to *https://ms.leadball.app/api*

| Method                                                | HTTP request                     | Description        |
|-------------------------------------------------------|----------------------------------|--------------------|
| [**createChannel**](ChannelsApi.md#createchannel)     | **POST** /channels               | Create a channel   |
| [**deleteChannel**](ChannelsApi.md#deletechannel)     | **DELETE** /channels/{channelId} | Delete a channel   |
| [**findAllChannels**](ChannelsApi.md#findallchannels) | **GET** /channels                | Find all channels  |
| [**findOneChannel**](ChannelsApi.md#findonechannel)   | **GET** /channels/{channelId}    | Find channel by id |
| [**updateChannel**](ChannelsApi.md#updatechannel)     | **PUT** /channels/{channelId}    | Update a channel   |

# **createChannel**
> \sallfris\Leadball\Client\Model\Channel createChannel($body)

Create a channel

Create a channel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer_token
    $config = sallfris\Leadball\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new sallfris\Leadball\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \sallfris\Leadball\Client\Model\CreateChannelDto(); // \sallfris\Leadball\Client\Model\CreateChannelDto | Create a channel

try {
    $result = $apiInstance->createChannel($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->createChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name     | Type                                                                                 | Description      | Notes |
|----------|--------------------------------------------------------------------------------------|------------------|-------|
| **body** | [**\sallfris\Leadball\Client\Model\CreateChannelDto**](../Model/CreateChannelDto.md) | Create a channel |       |

### Return type

[**\sallfris\Leadball\Client\Model\Channel**](../Model/Channel.md)

### Authorization

[bearer_token](../../README.md#bearer_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteChannel**
> deleteChannel($channel_id)

Delete a channel

Delete a channel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer_token
    $config = sallfris\Leadball\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new sallfris\Leadball\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 56; // int | Channel id to delete

try {
    $apiInstance->deleteChannel($channel_id);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->deleteChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name           | Type    | Description          | Notes |
|----------------|---------|----------------------|-------|
| **channel_id** | **int** | Channel id to delete |       |

### Return type

void (empty response body)

### Authorization

[bearer_token](../../README.md#bearer_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findAllChannels**
> \sallfris\Leadball\Client\Model\Channel[] findAllChannels()

Find all channels

Find all channels

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer_token
    $config = sallfris\Leadball\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new sallfris\Leadball\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->findAllChannels();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->findAllChannels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\sallfris\Leadball\Client\Model\Channel[]**](../Model/Channel.md)

### Authorization

[bearer_token](../../README.md#bearer_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findOneChannel**
> \sallfris\Leadball\Client\Model\Channel findOneChannel($channel_id)

Find channel by id

Returns a single channel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer_token
    $config = sallfris\Leadball\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new sallfris\Leadball\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 56; // int | Id of channel to return

try {
    $result = $apiInstance->findOneChannel($channel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->findOneChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name           | Type    | Description             | Notes |
|----------------|---------|-------------------------|-------|
| **channel_id** | **int** | Id of channel to return |       |

### Return type

[**\sallfris\Leadball\Client\Model\Channel**](../Model/Channel.md)

### Authorization

[bearer_token](../../README.md#bearer_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateChannel**
> \sallfris\Leadball\Client\Model\Channel updateChannel($channel_id, $body)

Update a channel

Update a channel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer_token
    $config = sallfris\Leadball\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new sallfris\Leadball\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 56; // int | Id of channel that needs to be updated
$body = new \sallfris\Leadball\Client\Model\UpdateChannelDto(); // \sallfris\Leadball\Client\Model\UpdateChannelDto | Update a channel

try {
    $result = $apiInstance->updateChannel($channel_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->updateChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name           | Type                                                                                 | Description                            | Notes      |
|----------------|--------------------------------------------------------------------------------------|----------------------------------------|------------|
| **channel_id** | **int**                                                                              | Id of channel that needs to be updated |            |
| **body**       | [**\sallfris\Leadball\Client\Model\UpdateChannelDto**](../Model/UpdateChannelDto.md) | Update a channel                       | [optional] |

### Return type

[**\sallfris\Leadball\Client\Model\Channel**](../Model/Channel.md)

### Authorization

[bearer_token](../../README.md#bearer_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


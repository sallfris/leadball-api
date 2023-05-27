# sallfris\Leadball\Client\HsmApi

All URIs are relative to *https://ms.leadball.app/api*

| Method                                                     | HTTP request                             | Description             |
|------------------------------------------------------------|------------------------------------------|-------------------------|
| [**createHsm**](HsmApi.md#createhsm)                       | **POST** /hsm-templates                  | Create a hsm            |
| [**deleteHsm**](HsmApi.md#deletehsm)                       | **DELETE** /hsm-templates/{hsmId}        | Delete a hsm            |
| [**findAllHsm**](HsmApi.md#findallhsm)                     | **GET** /hsm-templates                   | Find all hsm            |
| [**findOneHsm**](HsmApi.md#findonehsm)                     | **GET** /hsm-templates/{hsmId}           | Find hsm by id          |
| [**submitHsmForApproval**](HsmApi.md#submithsmforapproval) | **POST** /hsm-templates/{hsmId}/approval | Submit hsm for approval |
| [**updateHsm**](HsmApi.md#updatehsm)                       | **PATCH** /hsm-templates/{hsmId}         | Update a hsm            |

# **createHsm**
> \sallfris\Leadball\Client\Model\Hsm createHsm($body)

Create a hsm

Create a hsm

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer_token
    $config = sallfris\Leadball\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new sallfris\Leadball\Client\Api\HsmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \sallfris\Leadball\Client\Model\CreateHsmDto(); // \sallfris\Leadball\Client\Model\CreateHsmDto | Create a hsm

try {
    $result = $apiInstance->createHsm($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HsmApi->createHsm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name     | Type                                                                         | Description  | Notes |
|----------|------------------------------------------------------------------------------|--------------|-------|
| **body** | [**\sallfris\Leadball\Client\Model\CreateHsmDto**](../Model/CreateHsmDto.md) | Create a hsm |       |

### Return type

[**\sallfris\Leadball\Client\Model\Hsm**](../Model/Hsm.md)

### Authorization

[bearer_token](../../README.md#bearer_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteHsm**
> \sallfris\Leadball\Client\Model\Hsm deleteHsm($hsm_id)

Delete a hsm

Delete a hsm

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer_token
    $config = sallfris\Leadball\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new sallfris\Leadball\Client\Api\HsmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hsm_id = 56; // int | Hsm id to delete

try {
    $result = $apiInstance->deleteHsm($hsm_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HsmApi->deleteHsm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name       | Type    | Description      | Notes |
|------------|---------|------------------|-------|
| **hsm_id** | **int** | Hsm id to delete |       |

### Return type

[**\sallfris\Leadball\Client\Model\Hsm**](../Model/Hsm.md)

### Authorization

[bearer_token](../../README.md#bearer_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findAllHsm**
> \sallfris\Leadball\Client\Model\Hsm[] findAllHsm()

Find all hsm

Find all hsm

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer_token
    $config = sallfris\Leadball\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new sallfris\Leadball\Client\Api\HsmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->findAllHsm();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HsmApi->findAllHsm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\sallfris\Leadball\Client\Model\Hsm[]**](../Model/Hsm.md)

### Authorization

[bearer_token](../../README.md#bearer_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findOneHsm**
> \sallfris\Leadball\Client\Model\Hsm findOneHsm($hsm_id)

Find hsm by id

Returns a single hsm

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer_token
    $config = sallfris\Leadball\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new sallfris\Leadball\Client\Api\HsmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hsm_id = 56; // int | Id of hsm to return

try {
    $result = $apiInstance->findOneHsm($hsm_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HsmApi->findOneHsm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name       | Type    | Description         | Notes |
|------------|---------|---------------------|-------|
| **hsm_id** | **int** | Id of hsm to return |       |

### Return type

[**\sallfris\Leadball\Client\Model\Hsm**](../Model/Hsm.md)

### Authorization

[bearer_token](../../README.md#bearer_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **submitHsmForApproval**
> submitHsmForApproval($body, $hsm_id)

Submit hsm for approval

Submit hsm for approval

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer_token
    $config = sallfris\Leadball\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new sallfris\Leadball\Client\Api\HsmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \sallfris\Leadball\Client\Model\SubmitHsmForApprovalDto(); // \sallfris\Leadball\Client\Model\SubmitHsmForApprovalDto | Submit hsm for approval
$hsm_id = 56; // int | Id of hsm to return

try {
    $apiInstance->submitHsmForApproval($body, $hsm_id);
} catch (Exception $e) {
    echo 'Exception when calling HsmApi->submitHsmForApproval: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name       | Type                                                                                               | Description             | Notes |
|------------|----------------------------------------------------------------------------------------------------|-------------------------|-------|
| **body**   | [**\sallfris\Leadball\Client\Model\SubmitHsmForApprovalDto**](../Model/SubmitHsmForApprovalDto.md) | Submit hsm for approval |       |
| **hsm_id** | **int**                                                                                            | Id of hsm to return     |       |

### Return type

void (empty response body)

### Authorization

[bearer_token](../../README.md#bearer_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateHsm**
> \sallfris\Leadball\Client\Model\Hsm updateHsm($hsm_id, $body)

Update a hsm

Update a hsm

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer_token
    $config = sallfris\Leadball\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new sallfris\Leadball\Client\Api\HsmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$hsm_id = 56; // int | Id of hsm that needs to be updated
$body = new \sallfris\Leadball\Client\Model\UpdateHsmDto(); // \sallfris\Leadball\Client\Model\UpdateHsmDto | Update a hsm

try {
    $result = $apiInstance->updateHsm($hsm_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HsmApi->updateHsm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name       | Type                                                                         | Description                        | Notes      |
|------------|------------------------------------------------------------------------------|------------------------------------|------------|
| **hsm_id** | **int**                                                                      | Id of hsm that needs to be updated |            |
| **body**   | [**\sallfris\Leadball\Client\Model\UpdateHsmDto**](../Model/UpdateHsmDto.md) | Update a hsm                       | [optional] |

### Return type

[**\sallfris\Leadball\Client\Model\Hsm**](../Model/Hsm.md)

### Authorization

[bearer_token](../../README.md#bearer_token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


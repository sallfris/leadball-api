# sallfris\Leadball\Client\HsmApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiHsmTemplatesGet**](HsmApi.md#apihsmtemplatesget) | **GET** /api/hsm-templates | Find all hsm
[**apiHsmTemplatesIdApprovalPost**](HsmApi.md#apihsmtemplatesidapprovalpost) | **POST** /api/hsm-templates:/id/approval | Send hsm for approval
[**apiHsmTemplatesPost**](HsmApi.md#apihsmtemplatespost) | **POST** /api/hsm-templates | Create new hsm
[**apiHsmTemplatesidGet**](HsmApi.md#apihsmtemplatesidget) | **GET** /api/hsm-templates/:id | Find hsm by id
[**apiHsmTemplatesidPatch**](HsmApi.md#apihsmtemplatesidpatch) | **PATCH** /api/hsm-templates/:id | Update hsm
[**apiHsmidDelete**](HsmApi.md#apihsmiddelete) | **DELETE** /api/hsm/:id | Delete hsm

# **apiHsmTemplatesGet**
> apiHsmTemplatesGet()

Find all hsm

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new sallfris\Leadball\Client\Api\HsmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->apiHsmTemplatesGet();
} catch (Exception $e) {
    echo 'Exception when calling HsmApi->apiHsmTemplatesGet: ', $e->getMessage(), PHP_EOL;
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

# **apiHsmTemplatesIdApprovalPost**
> apiHsmTemplatesIdApprovalPost()

Send hsm for approval

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new sallfris\Leadball\Client\Api\HsmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->apiHsmTemplatesIdApprovalPost();
} catch (Exception $e) {
    echo 'Exception when calling HsmApi->apiHsmTemplatesIdApprovalPost: ', $e->getMessage(), PHP_EOL;
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

# **apiHsmTemplatesPost**
> apiHsmTemplatesPost()

Create new hsm

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new sallfris\Leadball\Client\Api\HsmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->apiHsmTemplatesPost();
} catch (Exception $e) {
    echo 'Exception when calling HsmApi->apiHsmTemplatesPost: ', $e->getMessage(), PHP_EOL;
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

# **apiHsmTemplatesidGet**
> apiHsmTemplatesidGet()

Find hsm by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new sallfris\Leadball\Client\Api\HsmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->apiHsmTemplatesidGet();
} catch (Exception $e) {
    echo 'Exception when calling HsmApi->apiHsmTemplatesidGet: ', $e->getMessage(), PHP_EOL;
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

# **apiHsmTemplatesidPatch**
> apiHsmTemplatesidPatch()

Update hsm

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new sallfris\Leadball\Client\Api\HsmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->apiHsmTemplatesidPatch();
} catch (Exception $e) {
    echo 'Exception when calling HsmApi->apiHsmTemplatesidPatch: ', $e->getMessage(), PHP_EOL;
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

# **apiHsmidDelete**
> apiHsmidDelete()

Delete hsm

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new sallfris\Leadball\Client\Api\HsmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->apiHsmidDelete();
} catch (Exception $e) {
    echo 'Exception when calling HsmApi->apiHsmidDelete: ', $e->getMessage(), PHP_EOL;
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


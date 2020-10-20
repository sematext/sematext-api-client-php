# sematext\stcloud\MetricsApi

All URIs are relative to *https://localhost*

| Method                                                               | HTTP request                                              | Description                                     |
| -------------------------------------------------------------------- | --------------------------------------------------------- | ----------------------------------------------- |
| [**listDataSeriesUsingPOST**](MetricsApi.md#listDataSeriesUsingPOST) | **POST** /spm-reports/api/v3/apps/{appId}/metrics/data    | Get metrics data points for an app              |
| [**listFiltersUsingPOST**](MetricsApi.md#listFiltersUsingPOST)       | **POST** /spm-reports/api/v3/apps/{appId}/metrics/filters | Get metrics filters and their values for an app |
| [**listMetricsKeysUsingGET**](MetricsApi.md#listMetricsKeysUsingGET) | **GET** /spm-reports/api/v3/apps/{appId}/metrics/keys     | Get metrics keys for an app                     |
| [**listMetricsUsingGET**](MetricsApi.md#listMetricsUsingGET)         | **GET** /spm-reports/api/v3/apps/{appId}/metrics          | Get metrics info for an app                     |


# **listDataSeriesUsingPOST**
> \sematext\stcloud\Model\GenericApiResponse listDataSeriesUsingPOST($app_id, $request_body)

Get metrics data points for an app

Default value of interval is 5m

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 789; // int | appId
$request_body = new \sematext\stcloud\Model\DataSeriesRequest(); // \sematext\stcloud\Model\DataSeriesRequest | Metric data points request

try {
    $result = $apiInstance->listDataSeriesUsingPOST($app_id, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->listDataSeriesUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name             | Type                                                                           | Description                | Notes |
| ---------------- | ------------------------------------------------------------------------------ | -------------------------- | ----- |
| **app_id**       | **int**                                                                        | appId                      |
| **request_body** | [**\sematext\stcloud\Model\DataSeriesRequest**](../Model/DataSeriesRequest.md) | Metric data points request |

### Return type

[**\sematext\stcloud\Model\GenericApiResponse**](../Model/GenericApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFiltersUsingPOST**
> \sematext\stcloud\Model\GenericApiResponse listFiltersUsingPOST($app_id, $request_body)

Get metrics filters and their values for an app

Default value of interval is 5m

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 789; // int | appId
$request_body = new \sematext\stcloud\Model\DataSeriesRequest(); // \sematext\stcloud\Model\DataSeriesRequest | Metric filters request

try {
    $result = $apiInstance->listFiltersUsingPOST($app_id, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->listFiltersUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name             | Type                                                                           | Description            | Notes |
| ---------------- | ------------------------------------------------------------------------------ | ---------------------- | ----- |
| **app_id**       | **int**                                                                        | appId                  |
| **request_body** | [**\sematext\stcloud\Model\DataSeriesRequest**](../Model/DataSeriesRequest.md) | Metric filters request |

### Return type

[**\sematext\stcloud\Model\GenericApiResponse**](../Model/GenericApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listMetricsKeysUsingGET**
> \sematext\stcloud\Model\GenericApiResponse listMetricsKeysUsingGET($app_id)

Get metrics keys for an app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 789; // int | appId

try {
    $result = $apiInstance->listMetricsKeysUsingGET($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->listMetricsKeysUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name       | Type    | Description | Notes |
| ---------- | ------- | ----------- | ----- |
| **app_id** | **int** | appId       |

### Return type

[**\sematext\stcloud\Model\GenericApiResponse**](../Model/GenericApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listMetricsUsingGET**
> \sematext\stcloud\Model\GenericApiResponse listMetricsUsingGET($app_id)

Get metrics info for an app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 789; // int | appId

try {
    $result = $apiInstance->listMetricsUsingGET($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->listMetricsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name       | Type    | Description | Notes |
| ---------- | ------- | ----------- | ----- |
| **app_id** | **int** | appId       |

### Return type

[**\sematext\stcloud\Model\GenericApiResponse**](../Model/GenericApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

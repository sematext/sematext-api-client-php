# Sematext\STCloud\LogsUsageApiControllerApi

All URIs are relative to */*

| Method                                                                      | HTTP request                                                   | Description |
| --------------------------------------------------------------------------- | -------------------------------------------------------------- | ----------- |
| [**getForRangeUsingGET**](LogsUsageApiControllerApi.md#getforrangeusingget) | **GET** /logsene-reports/api/v3/apps/{appId}/usage/{from}/{to} | getForRange |

# **getForRangeUsingGET**
> \Sematext\STCloud\Model\UsageResponse getForRangeUsingGET($app_id, $from, $to)

getForRange

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Sematext\STCloud\API\LogsUsageApiControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 789; // int | appId
$from = 789; // int | from
$to = 789; // int | to

try {
    $result = $apiInstance->getForRangeUsingGET($app_id, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsUsageApiControllerApi->getForRangeUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name       | Type    | Description | Notes |
| ---------- | ------- | ----------- | ----- |
| **app_id** | **int** | appId       |
| **from**   | **int** | from        |
| **to**     | **int** | to          |

### Return type

[**\Sematext\STCloud\Model\UsageResponse**](../Model/UsageResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

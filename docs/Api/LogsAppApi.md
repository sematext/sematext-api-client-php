# Sematext\STCloud\LogsAppApi

All URIs are relative to */*

| Method                                                                 | HTTP request                          | Description     |
| ---------------------------------------------------------------------- | ------------------------------------- | --------------- |
| [**createLogseneApplication**](LogsAppApi.md#createlogseneapplication) | **POST** /logsene-reports/api/v3/apps | Create Logs App |

# **createLogseneApplication**
> \Sematext\STCloud\Model\AppsResponse createLogseneApplication($body)

Create Logs App

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Sematext\STCloud\API\LogsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Sematext\STCloud\Model\CreateAppInfo(); // \Sematext\STCloud\Model\CreateAppInfo | Details of the application to be created

try {
    $result = $apiInstance->createLogseneApplication($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsAppApi->createLogseneApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name     | Type                                                                   | Description                              | Notes |
| -------- | ---------------------------------------------------------------------- | ---------------------------------------- | ----- |
| **body** | [**\Sematext\STCloud\Model\CreateAppInfo**](../Model/CreateAppInfo.md) | Details of the application to be created |

### Return type

[**\Sematext\STCloud\Model\AppsResponse**](../Model/AppsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

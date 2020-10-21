# sematext\stcloud\LogsAppApi

All URIs are relative to *https://localhost*

| Method                                                                 | HTTP request                          | Description     |
| ---------------------------------------------------------------------- | ------------------------------------- | --------------- |
| [**createLogseneApplication**](LogsAppApi.md#createLogseneApplication) | **POST** /logsene-reports/api/v3/apps | Create Logs App |


# **createLogseneApplication**
> \sematext\stcloud\Model\GenericApiResponse createLogseneApplication($application_details)

Create Logs App

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\Api\LogsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_details = new \sematext\stcloud\Model\CreateAppInfo(); // \sematext\stcloud\Model\CreateAppInfo | Details of the application to be created

try {
    $result = $apiInstance->createLogseneApplication($application_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsAppApi->createLogseneApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name                    | Type                                                                   | Description                              | Notes |
| ----------------------- | ---------------------------------------------------------------------- | ---------------------------------------- | ----- |
| **application_details** | [**\sematext\stcloud\Model\CreateAppInfo**](../Model/CreateAppInfo.md) | Details of the application to be created |

### Return type

[**\sematext\stcloud\Model\GenericApiResponse**](../Model/GenericApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

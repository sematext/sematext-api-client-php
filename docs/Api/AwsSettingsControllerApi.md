# Sematext\STCloud\AwsSettingsControllerApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**updateUsingPUT1**](AwsSettingsControllerApi.md#updateusingput1) | **PUT** /users-web/api/v3/apps/{appId}/aws | Update App&#x27;s AWS CloudWatch settings

# **updateUsingPUT1**
> \Sematext\STCloud\Model\CloudWatchSettingsResponse updateUsingPUT1($body, $app_id)

Update App's AWS CloudWatch settings

Applicable only for AWS Apps

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Sematext\STCloud\API\AwsSettingsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Sematext\STCloud\Model\CloudWatchSettings(); // \Sematext\STCloud\Model\CloudWatchSettings | dto
$app_id = 789; // int | appId

try {
    $result = $apiInstance->updateUsingPUT1($body, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AwsSettingsControllerApi->updateUsingPUT1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Sematext\STCloud\Model\CloudWatchSettings**](../Model/CloudWatchSettings.md)| dto |
 **app_id** | **int**| appId |

### Return type

[**\Sematext\STCloud\Model\CloudWatchSettingsResponse**](../Model/CloudWatchSettingsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


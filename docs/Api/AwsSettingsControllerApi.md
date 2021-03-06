# sematext\stcloud\AwsSettingsControllerApi

All URIs are relative to *https://localhost*

| Method                                                           | HTTP request                               | Description                              |
| ---------------------------------------------------------------- | ------------------------------------------ | ---------------------------------------- |
| [**updateUsingPUT**](AwsSettingsControllerApi.md#updateUsingPUT) | **PUT** /users-web/api/v3/apps/{appId}/aws | Update App&#39;s AWS CloudWatch settings |


# **updateUsingPUT**
> \sematext\stcloud\Model\GenericApiResponse updateUsingPUT($app_id, $dto)

Update App's AWS CloudWatch settings

Applicable only for AWS Apps

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\Api\AwsSettingsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 789; // int | appId
$dto = new \sematext\stcloud\Model\CloudWatchSettings(); // \sematext\stcloud\Model\CloudWatchSettings | dto

try {
    $result = $apiInstance->updateUsingPUT($app_id, $dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AwsSettingsControllerApi->updateUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name       | Type                                                                             | Description | Notes |
| ---------- | -------------------------------------------------------------------------------- | ----------- | ----- |
| **app_id** | **int**                                                                          | appId       |
| **dto**    | [**\sematext\stcloud\Model\CloudWatchSettings**](../Model/CloudWatchSettings.md) | dto         |

### Return type

[**\sematext\stcloud\Model\GenericApiResponse**](../Model/GenericApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

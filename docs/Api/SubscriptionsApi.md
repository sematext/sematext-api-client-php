# Sematext\STCloud\SubscriptionsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listUsingGET1**](SubscriptionsApi.md#listUsingGET1) | **GET** /users-web/api/v3/apps/{appId}/subscriptions | Get subscriptions for an app
[**sendReportUsingPOST**](SubscriptionsApi.md#sendReportUsingPOST) | **POST** /users-web/api/v3/apps/{appId}/report/send | Trigger emailing of report for an app


# **listUsingGET1**
> \Sematext\STCloud\Model\GenericApiResponse listUsingGET1($app_id)

Get subscriptions for an app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Sematext\STCloud\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 789; // int | appId

try {
    $result = $apiInstance->listUsingGET1($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->listUsingGET1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**| appId |

### Return type

[**\Sematext\STCloud\Model\GenericApiResponse**](../Model/GenericApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendReportUsingPOST**
> \Sematext\STCloud\Model\GenericApiResponse sendReportUsingPOST($app_id, $email_dto)

Trigger emailing of report for an app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Sematext\STCloud\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 789; // int | appId
$email_dto = new \Sematext\STCloud\Model\ReportInfo(); // \Sematext\STCloud\Model\ReportInfo | emailDto

try {
    $result = $apiInstance->sendReportUsingPOST($app_id, $email_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->sendReportUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**| appId |
 **email_dto** | [**\Sematext\STCloud\Model\ReportInfo**](../Model/ReportInfo.md)| emailDto |

### Return type

[**\Sematext\STCloud\Model\GenericApiResponse**](../Model/GenericApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


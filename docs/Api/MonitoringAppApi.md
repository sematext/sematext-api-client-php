# Swagger\Client\MonitoringAppApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSpmApplication**](MonitoringAppApi.md#createSpmApplication) | **POST** /spm-reports/api/v3/apps | Create Monitoring App


# **createSpmApplication**
> \Swagger\Client\Model\GenericApiResponse createSpmApplication($application_details)

Create Monitoring App

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MonitoringAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_details = new \Swagger\Client\Model\CreateAppInfo(); // \Swagger\Client\Model\CreateAppInfo | Details of the application to be created

try {
    $result = $apiInstance->createSpmApplication($application_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringAppApi->createSpmApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_details** | [**\Swagger\Client\Model\CreateAppInfo**](../Model/CreateAppInfo.md)| Details of the application to be created |

### Return type

[**\Swagger\Client\Model\GenericApiResponse**](../Model/GenericApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


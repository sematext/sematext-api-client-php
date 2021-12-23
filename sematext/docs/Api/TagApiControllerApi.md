# sematext\stcloud\TagApiControllerApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTagNamesUsingGET1**](TagApiControllerApi.md#gettagnamesusingget1) | **GET** /spm-reports/api/v3/apps/{appIds}/tagNames | Gets tag names for the given application identifiers appearing in the given time frame.
[**getUsingGET2**](TagApiControllerApi.md#getusingget2) | **GET** /spm-reports/api/v3/apps/{appIds}/metrics/filters | Gets values for specified tags for the given application identifiers appearing in the given time frame.
[**getUsingGET3**](TagApiControllerApi.md#getusingget3) | **GET** /spm-reports/api/v3/apps/{appIds}/tags | Gets values for specified tags for the given application identifiers appearing in the given time frame.

# **getTagNamesUsingGET1**
> \sematext\stcloud\Model\TagNamesResponse getTagNamesUsingGET1($app_ids, $from, $to, $metrics, $logs, $events, $rum)

Gets tag names for the given application identifiers appearing in the given time frame.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\API\TagApiControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_ids = "app_ids_example"; // string | appIds
$from = 789; // int | from
$to = 789; // int | to
$metrics = true; // bool | metrics
$logs = true; // bool | logs
$events = false; // bool | events
$rum = true; // bool | rum

try {
    $result = $apiInstance->getTagNamesUsingGET1($app_ids, $from, $to, $metrics, $logs, $events, $rum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApiControllerApi->getTagNamesUsingGET1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_ids** | **string**| appIds |
 **from** | **int**| from | [optional]
 **to** | **int**| to | [optional]
 **metrics** | **bool**| metrics | [optional] [default to true]
 **logs** | **bool**| logs | [optional] [default to true]
 **events** | **bool**| events | [optional] [default to false]
 **rum** | **bool**| rum | [optional] [default to true]

### Return type

[**\sematext\stcloud\Model\TagNamesResponse**](../Model/TagNamesResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsingGET2**
> map[string,\sematext\stcloud\Model\Dimension] getUsingGET2($app_ids, $tag, $from, $to, $metrics, $logs, $events, $rum)

Gets values for specified tags for the given application identifiers appearing in the given time frame.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\API\TagApiControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_ids = "app_ids_example"; // string | appIds
$tag = array("tag_example"); // string[] | tag
$from = 789; // int | from
$to = 789; // int | to
$metrics = true; // bool | metrics
$logs = true; // bool | logs
$events = false; // bool | events
$rum = true; // bool | rum

try {
    $result = $apiInstance->getUsingGET2($app_ids, $tag, $from, $to, $metrics, $logs, $events, $rum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApiControllerApi->getUsingGET2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_ids** | **string**| appIds |
 **tag** | [**string[]**](../Model/string.md)| tag |
 **from** | **int**| from | [optional]
 **to** | **int**| to | [optional]
 **metrics** | **bool**| metrics | [optional] [default to true]
 **logs** | **bool**| logs | [optional] [default to true]
 **events** | **bool**| events | [optional] [default to false]
 **rum** | **bool**| rum | [optional] [default to true]

### Return type

[**map[string,\sematext\stcloud\Model\Dimension]**](../Model/Dimension.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsingGET3**
> map[string,\sematext\stcloud\Model\Dimension] getUsingGET3($app_ids, $tag, $from, $to, $metrics, $logs, $events, $rum)

Gets values for specified tags for the given application identifiers appearing in the given time frame.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\API\TagApiControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_ids = "app_ids_example"; // string | appIds
$tag = array("tag_example"); // string[] | tag
$from = 789; // int | from
$to = 789; // int | to
$metrics = true; // bool | metrics
$logs = true; // bool | logs
$events = false; // bool | events
$rum = true; // bool | rum

try {
    $result = $apiInstance->getUsingGET3($app_ids, $tag, $from, $to, $metrics, $logs, $events, $rum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApiControllerApi->getUsingGET3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_ids** | **string**| appIds |
 **tag** | [**string[]**](../Model/string.md)| tag |
 **from** | **int**| from | [optional]
 **to** | **int**| to | [optional]
 **metrics** | **bool**| metrics | [optional] [default to true]
 **logs** | **bool**| logs | [optional] [default to true]
 **events** | **bool**| events | [optional] [default to false]
 **rum** | **bool**| rum | [optional] [default to true]

### Return type

[**map[string,\sematext\stcloud\Model\Dimension]**](../Model/Dimension.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


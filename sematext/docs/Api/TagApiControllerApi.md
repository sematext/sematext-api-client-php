# sematext\stcloud\TagApiControllerApi

All URIs are relative to */*

| Method                                                                                | HTTP request                                              | Description                                                                                             |
| ------------------------------------------------------------------------------------- | --------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| [**getTagNamesUsingGET**](TagApiControllerApi.md#gettagnamesusingget)                 | **GET** /spm-reports/api/v3/apps/{appIds}/tagNames        | Gets tag names for the given application identifiers appearing in the given time frame.                 |
| [**getTagsGroupedByIdUsingGET1**](TagApiControllerApi.md#gettagsgroupedbyidusingget1) | **GET** /spm-reports/api/v3/apps/{appIds}/grouped         | Gets tag names grouped by application id.                                                               |
| [**getUsingGET**](TagApiControllerApi.md#getusingget)                                 | **GET** /spm-reports/api/v3/apps/{appIds}/metrics/filters | Gets values for specified tags for the given application identifiers appearing in the given time frame. |
| [**getUsingGET1**](TagApiControllerApi.md#getusingget1)                               | **GET** /spm-reports/api/v3/apps/{appIds}/tags            | Gets values for specified tags for the given application identifiers appearing in the given time frame. |

# **getTagNamesUsingGET**

> \sematext\stcloud\Model\TagNamesResponse getTagNamesUsingGET($app_ids, $from, $to, $metrics, $logs, $events, $rum)

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
    $result = $apiInstance->getTagNamesUsingGET($app_ids, $from, $to, $metrics, $logs, $events, $rum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApiControllerApi->getTagNamesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name        | Type       | Description | Notes                         |
| ----------- | ---------- | ----------- | ----------------------------- |
| **app_ids** | **string** | appIds      |
| **from**    | **int**    | from        | [optional]                    |
| **to**      | **int**    | to          | [optional]                    |
| **metrics** | **bool**   | metrics     | [optional] [default to true]  |
| **logs**    | **bool**   | logs        | [optional] [default to true]  |
| **events**  | **bool**   | events      | [optional] [default to false] |
| **rum**     | **bool**   | rum         | [optional] [default to true]  |

### Return type

[**\sematext\stcloud\Model\TagNamesResponse**](../Model/TagNamesResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTagsGroupedByIdUsingGET1**

> \sematext\stcloud\Model\TagsGroupedResponse getTagsGroupedByIdUsingGET1($app_ids, $tag, $from, $to, $metrics, $logs, $events, $rum)

Gets tag names grouped by application id.

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
    $result = $apiInstance->getTagsGroupedByIdUsingGET1($app_ids, $tag, $from, $to, $metrics, $logs, $events, $rum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApiControllerApi->getTagsGroupedByIdUsingGET1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name        | Type                               | Description | Notes                         |
| ----------- | ---------------------------------- | ----------- | ----------------------------- |
| **app_ids** | **string**                         | appIds      |
| **tag**     | [**string[]**](../Model/string.md) | tag         |
| **from**    | **int**                            | from        | [optional]                    |
| **to**      | **int**                            | to          | [optional]                    |
| **metrics** | **bool**                           | metrics     | [optional] [default to true]  |
| **logs**    | **bool**                           | logs        | [optional] [default to true]  |
| **events**  | **bool**                           | events      | [optional] [default to false] |
| **rum**     | **bool**                           | rum         | [optional] [default to true]  |

### Return type

[**\sematext\stcloud\Model\TagsGroupedResponse**](../Model/TagsGroupedResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsingGET**

> map[string,\sematext\stcloud\Model\Dimension] getUsingGET($app_ids, $tag, $from, $to, $metrics, $logs, $events, $rum)

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
    $result = $apiInstance->getUsingGET($app_ids, $tag, $from, $to, $metrics, $logs, $events, $rum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApiControllerApi->getUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name        | Type                               | Description | Notes                         |
| ----------- | ---------------------------------- | ----------- | ----------------------------- |
| **app_ids** | **string**                         | appIds      |
| **tag**     | [**string[]**](../Model/string.md) | tag         |
| **from**    | **int**                            | from        | [optional]                    |
| **to**      | **int**                            | to          | [optional]                    |
| **metrics** | **bool**                           | metrics     | [optional] [default to true]  |
| **logs**    | **bool**                           | logs        | [optional] [default to true]  |
| **events**  | **bool**                           | events      | [optional] [default to false] |
| **rum**     | **bool**                           | rum         | [optional] [default to true]  |

### Return type

[**map[string,\sematext\stcloud\Model\Dimension]**](../Model/Dimension.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsingGET1**

> map[string,\sematext\stcloud\Model\Dimension] getUsingGET1($app_ids, $tag, $from, $to, $metrics, $logs, $events, $rum)

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
    $result = $apiInstance->getUsingGET1($app_ids, $tag, $from, $to, $metrics, $logs, $events, $rum);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApiControllerApi->getUsingGET1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name        | Type                               | Description | Notes                         |
| ----------- | ---------------------------------- | ----------- | ----------------------------- |
| **app_ids** | **string**                         | appIds      |
| **tag**     | [**string[]**](../Model/string.md) | tag         |
| **from**    | **int**                            | from        | [optional]                    |
| **to**      | **int**                            | to          | [optional]                    |
| **metrics** | **bool**                           | metrics     | [optional] [default to true]  |
| **logs**    | **bool**                           | logs        | [optional] [default to true]  |
| **events**  | **bool**                           | events      | [optional] [default to false] |
| **rum**     | **bool**                           | rum         | [optional] [default to true]  |

### Return type

[**map[string,\sematext\stcloud\Model\Dimension]**](../Model/Dimension.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

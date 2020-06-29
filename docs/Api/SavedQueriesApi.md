# sematext\stcloud\SavedQueriesApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteSavedQueryUsingDELETE**](SavedQueriesApi.md#deleteSavedQueryUsingDELETE) | **DELETE** /users-web/api/v3/savedQueries/{updateableQueryId} | Delete saved query
[**getSavedQueriesForAppUsingGET**](SavedQueriesApi.md#getSavedQueriesForAppUsingGET) | **GET** /users-web/api/v3/apps/{appId}/savedQueries | Get saved queries for an app
[**saveQueryUsingPOST**](SavedQueriesApi.md#saveQueryUsingPOST) | **POST** /users-web/api/v3/savedQueries | Create saved query
[**saveQueryUsingPUT**](SavedQueriesApi.md#saveQueryUsingPUT) | **PUT** /users-web/api/v3/savedQueries/{updateableQueryId} | Update saved query


# **deleteSavedQueryUsingDELETE**
> \sematext\stcloud\Model\GenericApiResponse deleteSavedQueryUsingDELETE($updateable_query_id)

Delete saved query

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\Api\SavedQueriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateable_query_id = 789; // int | updateableQueryId

try {
    $result = $apiInstance->deleteSavedQueryUsingDELETE($updateable_query_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SavedQueriesApi->deleteSavedQueryUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateable_query_id** | **int**| updateableQueryId |

### Return type

[**\sematext\stcloud\Model\GenericApiResponse**](../Model/GenericApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSavedQueriesForAppUsingGET**
> \sematext\stcloud\Model\GenericApiResponse getSavedQueriesForAppUsingGET($app_id)

Get saved queries for an app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\Api\SavedQueriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 789; // int | appId

try {
    $result = $apiInstance->getSavedQueriesForAppUsingGET($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SavedQueriesApi->getSavedQueriesForAppUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**| appId |

### Return type

[**\sematext\stcloud\Model\GenericApiResponse**](../Model/GenericApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveQueryUsingPOST**
> \sematext\stcloud\Model\GenericApiResponse saveQueryUsingPOST($saved_query_dto)

Create saved query

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\Api\SavedQueriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$saved_query_dto = new \sematext\stcloud\Model\SavedQuery(); // \sematext\stcloud\Model\SavedQuery | savedQueryDto

try {
    $result = $apiInstance->saveQueryUsingPOST($saved_query_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SavedQueriesApi->saveQueryUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **saved_query_dto** | [**\sematext\stcloud\Model\SavedQuery**](../Model/SavedQuery.md)| savedQueryDto |

### Return type

[**\sematext\stcloud\Model\GenericApiResponse**](../Model/GenericApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveQueryUsingPUT**
> \sematext\stcloud\Model\GenericApiResponse saveQueryUsingPUT($saved_query_dto, $updateable_query_id)

Update saved query

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\Api\SavedQueriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$saved_query_dto = new \sematext\stcloud\Model\SavedQuery(); // \sematext\stcloud\Model\SavedQuery | savedQueryDto
$updateable_query_id = 789; // int | updateableQueryId

try {
    $result = $apiInstance->saveQueryUsingPUT($saved_query_dto, $updateable_query_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SavedQueriesApi->saveQueryUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **saved_query_dto** | [**\sematext\stcloud\Model\SavedQuery**](../Model/SavedQuery.md)| savedQueryDto |
 **updateable_query_id** | **int**| updateableQueryId |

### Return type

[**\sematext\stcloud\Model\GenericApiResponse**](../Model/GenericApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

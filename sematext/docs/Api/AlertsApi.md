# sematext\stcloud\AlertsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAlertUsingPOST1**](AlertsApi.md#createalertusingpost1) | **POST** /users-web/api/v3/alerts | Create alert rule
[**deleteAlertRuleUsingDELETE1**](AlertsApi.md#deletealertruleusingdelete1) | **DELETE** /users-web/api/v3/alerts/{updateableAlertId} | Delete alert rule
[**disableAlertRuleUsingPUT1**](AlertsApi.md#disablealertruleusingput1) | **PUT** /users-web/api/v3/alerts/{updateableAlertId}/disable | Disable alert rule
[**enableAlertRuleUsingPUT1**](AlertsApi.md#enablealertruleusingput1) | **PUT** /users-web/api/v3/alerts/{updateableAlertId}/enable | Enable alert rule
[**getAlertRulesForAppUsingGET1**](AlertsApi.md#getalertrulesforappusingget1) | **GET** /users-web/api/v3/apps/{appId}/alerts | Get alert rules for an app

# **createAlertUsingPOST1**
> \sematext\stcloud\Model\AlertRuleResponse createAlertUsingPOST1($body)

Create alert rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\API\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \sematext\stcloud\Model\AlertRule(); // \sematext\stcloud\Model\AlertRule | dto

try {
    $result = $apiInstance->createAlertUsingPOST1($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->createAlertUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\sematext\stcloud\Model\AlertRule**](../Model/AlertRule.md)| dto |

### Return type

[**\sematext\stcloud\Model\AlertRuleResponse**](../Model/AlertRuleResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAlertRuleUsingDELETE1**
> \sematext\stcloud\Model\GenericMapBasedApiResponse deleteAlertRuleUsingDELETE1($updateable_alert_id)

Delete alert rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\API\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateable_alert_id = 789; // int | updateableAlertId

try {
    $result = $apiInstance->deleteAlertRuleUsingDELETE1($updateable_alert_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->deleteAlertRuleUsingDELETE1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateable_alert_id** | **int**| updateableAlertId |

### Return type

[**\sematext\stcloud\Model\GenericMapBasedApiResponse**](../Model/GenericMapBasedApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disableAlertRuleUsingPUT1**
> \sematext\stcloud\Model\GenericMapBasedApiResponse disableAlertRuleUsingPUT1($updateable_alert_id)

Disable alert rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\API\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateable_alert_id = 789; // int | updateableAlertId

try {
    $result = $apiInstance->disableAlertRuleUsingPUT1($updateable_alert_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->disableAlertRuleUsingPUT1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateable_alert_id** | **int**| updateableAlertId |

### Return type

[**\sematext\stcloud\Model\GenericMapBasedApiResponse**](../Model/GenericMapBasedApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enableAlertRuleUsingPUT1**
> \sematext\stcloud\Model\GenericMapBasedApiResponse enableAlertRuleUsingPUT1($updateable_alert_id)

Enable alert rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\API\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateable_alert_id = 789; // int | updateableAlertId

try {
    $result = $apiInstance->enableAlertRuleUsingPUT1($updateable_alert_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->enableAlertRuleUsingPUT1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateable_alert_id** | **int**| updateableAlertId |

### Return type

[**\sematext\stcloud\Model\GenericMapBasedApiResponse**](../Model/GenericMapBasedApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAlertRulesForAppUsingGET1**
> \sematext\stcloud\Model\AlertRulesResponse getAlertRulesForAppUsingGET1($app_id)

Get alert rules for an app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\API\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 789; // int | appId

try {
    $result = $apiInstance->getAlertRulesForAppUsingGET1($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->getAlertRulesForAppUsingGET1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**| appId |

### Return type

[**\sematext\stcloud\Model\AlertRulesResponse**](../Model/AlertRulesResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


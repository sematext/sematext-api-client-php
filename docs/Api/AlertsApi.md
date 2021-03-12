# Sematext\STCloud\AlertsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAlertUsingPOST1**](AlertsApi.md#createalertusingpost1) | **POST** /users-web/api/v3/alerts | Create alert rule
[**deleteAlertRuleUsingDELETE1**](AlertsApi.md#deletealertruleusingdelete1) | **DELETE** /users-web/api/v3/alerts/{updateableAlertId} | Delete alert rule
[**disableAlertRuleUsingPUT1**](AlertsApi.md#disablealertruleusingput1) | **PUT** /users-web/api/v3/alerts/{updateableAlertId}/disable | Disable alert rule
[**enableAlertRuleUsingPUT1**](AlertsApi.md#enablealertruleusingput1) | **PUT** /users-web/api/v3/alerts/{updateableAlertId}/enable | Enable alert rule
[**getAlertRulesForAppUsingGET**](AlertsApi.md#getalertrulesforappusingget) | **GET** /users-web/api/v3/apps/{appId}/alerts | Get alert rules for an app

# **createAlertUsingPOST1**
> \Sematext\STCloud\Model\AlertRuleResponse createAlertUsingPOST1($body)

Create alert rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Sematext\STCloud\API\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Sematext\STCloud\Model\AlertRule(); // \Sematext\STCloud\Model\AlertRule | dto

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
 **body** | [**\Sematext\STCloud\Model\AlertRule**](../Model/AlertRule.md)| dto |

### Return type

[**\Sematext\STCloud\Model\AlertRuleResponse**](../Model/AlertRuleResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAlertRuleUsingDELETE1**
> \Sematext\STCloud\Model\GenericMapBasedApiResponse deleteAlertRuleUsingDELETE1($updateable_alert_id)

Delete alert rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Sematext\STCloud\API\AlertsApi(
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

[**\Sematext\STCloud\Model\GenericMapBasedApiResponse**](../Model/GenericMapBasedApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disableAlertRuleUsingPUT1**
> \Sematext\STCloud\Model\GenericMapBasedApiResponse disableAlertRuleUsingPUT1($updateable_alert_id)

Disable alert rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Sematext\STCloud\API\AlertsApi(
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

[**\Sematext\STCloud\Model\GenericMapBasedApiResponse**](../Model/GenericMapBasedApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enableAlertRuleUsingPUT1**
> \Sematext\STCloud\Model\GenericMapBasedApiResponse enableAlertRuleUsingPUT1($updateable_alert_id)

Enable alert rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Sematext\STCloud\API\AlertsApi(
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

[**\Sematext\STCloud\Model\GenericMapBasedApiResponse**](../Model/GenericMapBasedApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAlertRulesForAppUsingGET**
> \Sematext\STCloud\Model\AlertRulesResponse getAlertRulesForAppUsingGET($app_id)

Get alert rules for an app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Sematext\STCloud\API\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 789; // int | appId

try {
    $result = $apiInstance->getAlertRulesForAppUsingGET($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->getAlertRulesForAppUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**| appId |

### Return type

[**\Sematext\STCloud\Model\AlertRulesResponse**](../Model/AlertRulesResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


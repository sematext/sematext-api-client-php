# Sematext\STCloud\AlertsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAlertUsingPOST**](AlertsApi.md#createAlertUsingPOST) | **POST** /users-web/api/v3/alerts | Create alert rule
[**deleteAlertRuleUsingDELETE**](AlertsApi.md#deleteAlertRuleUsingDELETE) | **DELETE** /users-web/api/v3/alerts/{updateableAlertId} | Delete alert rule
[**disableAlertRuleUsingPUT**](AlertsApi.md#disableAlertRuleUsingPUT) | **PUT** /users-web/api/v3/alerts/{updateableAlertId}/disable | Disable alert rule
[**enableAlertRuleUsingPUT**](AlertsApi.md#enableAlertRuleUsingPUT) | **PUT** /users-web/api/v3/alerts/{updateableAlertId}/enable | Enable alert rule
[**getAlertRulesForAppUsingGET**](AlertsApi.md#getAlertRulesForAppUsingGET) | **GET** /users-web/api/v3/apps/{appId}/alerts | Get alert rules for an app


# **createAlertUsingPOST**
> \Sematext\STCloud\Model\GenericApiResponse createAlertUsingPOST($dto)

Create alert rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Sematext\STCloud\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dto = new \Sematext\STCloud\Model\AlertRule(); // \Sematext\STCloud\Model\AlertRule | dto

try {
    $result = $apiInstance->createAlertUsingPOST($dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->createAlertUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dto** | [**\Sematext\STCloud\Model\AlertRule**](../Model/AlertRule.md)| dto |

### Return type

[**\Sematext\STCloud\Model\GenericApiResponse**](../Model/GenericApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAlertRuleUsingDELETE**
> \Sematext\STCloud\Model\GenericApiResponse deleteAlertRuleUsingDELETE($updateable_alert_id)

Delete alert rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Sematext\STCloud\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateable_alert_id = 789; // int | updateableAlertId

try {
    $result = $apiInstance->deleteAlertRuleUsingDELETE($updateable_alert_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->deleteAlertRuleUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateable_alert_id** | **int**| updateableAlertId |

### Return type

[**\Sematext\STCloud\Model\GenericApiResponse**](../Model/GenericApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disableAlertRuleUsingPUT**
> \Sematext\STCloud\Model\GenericApiResponse disableAlertRuleUsingPUT($updateable_alert_id)

Disable alert rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Sematext\STCloud\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateable_alert_id = 789; // int | updateableAlertId

try {
    $result = $apiInstance->disableAlertRuleUsingPUT($updateable_alert_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->disableAlertRuleUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateable_alert_id** | **int**| updateableAlertId |

### Return type

[**\Sematext\STCloud\Model\GenericApiResponse**](../Model/GenericApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enableAlertRuleUsingPUT**
> \Sematext\STCloud\Model\GenericApiResponse enableAlertRuleUsingPUT($updateable_alert_id)

Enable alert rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Sematext\STCloud\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateable_alert_id = 789; // int | updateableAlertId

try {
    $result = $apiInstance->enableAlertRuleUsingPUT($updateable_alert_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->enableAlertRuleUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateable_alert_id** | **int**| updateableAlertId |

### Return type

[**\Sematext\STCloud\Model\GenericApiResponse**](../Model/GenericApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAlertRulesForAppUsingGET**
> \Sematext\STCloud\Model\GenericApiResponse getAlertRulesForAppUsingGET($app_id)

Get alert rules for an app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Sematext\STCloud\Api\AlertsApi(
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

[**\Sematext\STCloud\Model\GenericApiResponse**](../Model/GenericApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


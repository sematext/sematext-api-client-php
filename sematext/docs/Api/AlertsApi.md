# sematext\stcloud\AlertsApi

All URIs are relative to */*

| Method                                                                      | HTTP request                                                 | Description                |
| --------------------------------------------------------------------------- | ------------------------------------------------------------ | -------------------------- |
| [**createAlertUsingPOST**](AlertsApi.md#createalertusingpost)               | **POST** /users-web/api/v3/alerts                            | Create alert rule          |
| [**deleteAlertRuleUsingDELETE**](AlertsApi.md#deletealertruleusingdelete)   | **DELETE** /users-web/api/v3/alerts/{updateableAlertId}      | Delete alert rule          |
| [**disableAlertRuleUsingPUT**](AlertsApi.md#disablealertruleusingput)       | **PUT** /users-web/api/v3/alerts/{updateableAlertId}/disable | Disable alert rule         |
| [**enableAlertRuleUsingPUT**](AlertsApi.md#enablealertruleusingput)         | **PUT** /users-web/api/v3/alerts/{updateableAlertId}/enable  | Enable alert rule          |
| [**getAlertRulesForAppUsingGET**](AlertsApi.md#getalertrulesforappusingget) | **GET** /users-web/api/v3/apps/{appId}/alerts                | Get alert rules for an app |

# **createAlertUsingPOST**

> \sematext\stcloud\Model\AlertRuleResponse createAlertUsingPOST($body)

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
    $result = $apiInstance->createAlertUsingPOST($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->createAlertUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name     | Type                                                           | Description | Notes |
| -------- | -------------------------------------------------------------- | ----------- | ----- |
| **body** | [**\sematext\stcloud\Model\AlertRule**](../Model/AlertRule.md) | dto         |

### Return type

[**\sematext\stcloud\Model\AlertRuleResponse**](../Model/AlertRuleResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAlertRuleUsingDELETE**

> \sematext\stcloud\Model\GenericMapBasedApiResponse deleteAlertRuleUsingDELETE($updateable_alert_id)

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
    $result = $apiInstance->deleteAlertRuleUsingDELETE($updateable_alert_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->deleteAlertRuleUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name                    | Type    | Description       | Notes |
| ----------------------- | ------- | ----------------- | ----- |
| **updateable_alert_id** | **int** | updateableAlertId |

### Return type

[**\sematext\stcloud\Model\GenericMapBasedApiResponse**](../Model/GenericMapBasedApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disableAlertRuleUsingPUT**

> \sematext\stcloud\Model\GenericMapBasedApiResponse disableAlertRuleUsingPUT($updateable_alert_id)

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
    $result = $apiInstance->disableAlertRuleUsingPUT($updateable_alert_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->disableAlertRuleUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name                    | Type    | Description       | Notes |
| ----------------------- | ------- | ----------------- | ----- |
| **updateable_alert_id** | **int** | updateableAlertId |

### Return type

[**\sematext\stcloud\Model\GenericMapBasedApiResponse**](../Model/GenericMapBasedApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enableAlertRuleUsingPUT**

> \sematext\stcloud\Model\GenericMapBasedApiResponse enableAlertRuleUsingPUT($updateable_alert_id)

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
    $result = $apiInstance->enableAlertRuleUsingPUT($updateable_alert_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->enableAlertRuleUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name                    | Type    | Description       | Notes |
| ----------------------- | ------- | ----------------- | ----- |
| **updateable_alert_id** | **int** | updateableAlertId |

### Return type

[**\sematext\stcloud\Model\GenericMapBasedApiResponse**](../Model/GenericMapBasedApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAlertRulesForAppUsingGET**

> \sematext\stcloud\Model\AlertRulesResponse getAlertRulesForAppUsingGET($app_id)

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
    $result = $apiInstance->getAlertRulesForAppUsingGET($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->getAlertRulesForAppUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name       | Type    | Description | Notes |
| ---------- | ------- | ----------- | ----- |
| **app_id** | **int** | appId       |

### Return type

[**\sematext\stcloud\Model\AlertRulesResponse**](../Model/AlertRulesResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

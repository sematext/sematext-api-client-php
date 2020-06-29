# sematext\stcloud\AlertNotificationsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAlertNotificationsForAppUsingPOST**](AlertNotificationsApi.md#getAlertNotificationsForAppUsingPOST) | **POST** /users-web/api/v3/apps/{appId}/notifications/alerts | Get alert notifications for an app
[**getAlertNotificationsForUserUsingPOST**](AlertNotificationsApi.md#getAlertNotificationsForUserUsingPOST) | **POST** /users-web/api/v3/notifications/alerts | Get alert notifications for a user


# **getAlertNotificationsForAppUsingPOST**
> \sematext\stcloud\Model\GenericApiResponse getAlertNotificationsForAppUsingPOST($app_id, $time_interval)

Get alert notifications for an app

Default value of interval is 1d

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\Api\AlertNotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 789; // int | appId
$time_interval = new \sematext\stcloud\Model\AlertNotificationRequest(); // \sematext\stcloud\Model\AlertNotificationRequest | Time Interval

try {
    $result = $apiInstance->getAlertNotificationsForAppUsingPOST($app_id, $time_interval);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertNotificationsApi->getAlertNotificationsForAppUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**| appId |
 **time_interval** | [**\sematext\stcloud\Model\AlertNotificationRequest**](../Model/AlertNotificationRequest.md)| Time Interval |

### Return type

[**\sematext\stcloud\Model\GenericApiResponse**](../Model/GenericApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAlertNotificationsForUserUsingPOST**
> \sematext\stcloud\Model\GenericApiResponse getAlertNotificationsForUserUsingPOST($time_interval)

Get alert notifications for a user

Default value of interval is 1d

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\Api\AlertNotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$time_interval = new \sematext\stcloud\Model\AlertNotificationRequest(); // \sematext\stcloud\Model\AlertNotificationRequest | Time Interval

try {
    $result = $apiInstance->getAlertNotificationsForUserUsingPOST($time_interval);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertNotificationsApi->getAlertNotificationsForUserUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **time_interval** | [**\sematext\stcloud\Model\AlertNotificationRequest**](../Model/AlertNotificationRequest.md)| Time Interval |

### Return type

[**\sematext\stcloud\Model\GenericApiResponse**](../Model/GenericApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

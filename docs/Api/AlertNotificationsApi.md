# Sematext\STCloud\AlertNotificationsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAlertNotificationsForAppUsingPOST**](AlertNotificationsApi.md#getalertnotificationsforappusingpost) | **POST** /users-web/api/v3/apps/{appId}/notifications/alerts | Get alert notifications for an app
[**getAlertNotificationsForUserUsingPOST**](AlertNotificationsApi.md#getalertnotificationsforuserusingpost) | **POST** /users-web/api/v3/notifications/alerts | Get alert notifications for a user

# **getAlertNotificationsForAppUsingPOST**
> \Sematext\STCloud\Model\NotificationsResponse getAlertNotificationsForAppUsingPOST($body, $app_id)

Get alert notifications for an app

Default value of interval is 1d

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Sematext\STCloud\API\AlertNotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Sematext\STCloud\Model\AlertNotificationRequest(); // \Sematext\STCloud\Model\AlertNotificationRequest | Time Interval
$app_id = 789; // int | appId

try {
    $result = $apiInstance->getAlertNotificationsForAppUsingPOST($body, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertNotificationsApi->getAlertNotificationsForAppUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Sematext\STCloud\Model\AlertNotificationRequest**](../Model/AlertNotificationRequest.md)| Time Interval |
 **app_id** | **int**| appId |

### Return type

[**\Sematext\STCloud\Model\NotificationsResponse**](../Model/NotificationsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAlertNotificationsForUserUsingPOST**
> \Sematext\STCloud\Model\NotificationsResponse getAlertNotificationsForUserUsingPOST($body)

Get alert notifications for a user

Default value of interval is 1d

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Sematext\STCloud\API\AlertNotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Sematext\STCloud\Model\AlertNotificationRequest(); // \Sematext\STCloud\Model\AlertNotificationRequest | Time Interval

try {
    $result = $apiInstance->getAlertNotificationsForUserUsingPOST($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertNotificationsApi->getAlertNotificationsForUserUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Sematext\STCloud\Model\AlertNotificationRequest**](../Model/AlertNotificationRequest.md)| Time Interval |

### Return type

[**\Sematext\STCloud\Model\NotificationsResponse**](../Model/NotificationsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# sematext\stcloud\AlertNotificationsApi

All URIs are relative to */*

| Method                                                                                                        | HTTP request                                                 | Description                        |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------ | ---------------------------------- |
| [**getAlertNotificationsForAppUsingPOST1**](AlertNotificationsApi.md#getalertnotificationsforappusingpost1)   | **POST** /users-web/api/v3/apps/{appId}/notifications/alerts | Get alert notifications for an app |
| [**getAlertNotificationsForUserUsingPOST1**](AlertNotificationsApi.md#getalertnotificationsforuserusingpost1) | **POST** /users-web/api/v3/notifications/alerts              | Get alert notifications for a user |

# **getAlertNotificationsForAppUsingPOST1**

> \sematext\stcloud\Model\NotificationsResponse getAlertNotificationsForAppUsingPOST1($body, $app_id)

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

$apiInstance = new sematext\stcloud\API\AlertNotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \sematext\stcloud\Model\AlertNotificationRequest(); // \sematext\stcloud\Model\AlertNotificationRequest | Time Interval
$app_id = 789; // int | appId

try {
    $result = $apiInstance->getAlertNotificationsForAppUsingPOST1($body, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertNotificationsApi->getAlertNotificationsForAppUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name       | Type                                                                                         | Description   | Notes |
| ---------- | -------------------------------------------------------------------------------------------- | ------------- | ----- |
| **body**   | [**\sematext\stcloud\Model\AlertNotificationRequest**](../Model/AlertNotificationRequest.md) | Time Interval |
| **app_id** | **int**                                                                                      | appId         |

### Return type

[**\sematext\stcloud\Model\NotificationsResponse**](../Model/NotificationsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAlertNotificationsForUserUsingPOST1**

> \sematext\stcloud\Model\NotificationsResponse getAlertNotificationsForUserUsingPOST1($body)

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

$apiInstance = new sematext\stcloud\API\AlertNotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \sematext\stcloud\Model\AlertNotificationRequest(); // \sematext\stcloud\Model\AlertNotificationRequest | Time Interval

try {
    $result = $apiInstance->getAlertNotificationsForUserUsingPOST1($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertNotificationsApi->getAlertNotificationsForUserUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name     | Type                                                                                         | Description   | Notes |
| -------- | -------------------------------------------------------------------------------------------- | ------------- | ----- |
| **body** | [**\sematext\stcloud\Model\AlertNotificationRequest**](../Model/AlertNotificationRequest.md) | Time Interval |

### Return type

[**\sematext\stcloud\Model\NotificationsResponse**](../Model/NotificationsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

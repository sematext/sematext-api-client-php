# sematext\stcloud\SubscriptionsApi

All URIs are relative to */*

| Method                                                                       | HTTP request                                                          | Description                              |
| ---------------------------------------------------------------------------- | --------------------------------------------------------------------- | ---------------------------------------- |
| [**createForAppUsingPOST**](SubscriptionsApi.md#createforappusingpost)       | **POST** /users-web/api/v3/apps/{appId}/subscription                  | Create App subscription                  |
| [**createForDashUsingPOST1**](SubscriptionsApi.md#createfordashusingpost1)   | **POST** /users-web/api/v3/dashboards/{dashId}/subscription           | Create dashboard subscription            |
| [**deleteUsingDELETE3**](SubscriptionsApi.md#deleteusingdelete3)             | **DELETE** /users-web/api/v3/subscriptions/{updateableSubscriptionId} | Delete subscription                      |
| [**listUsingGET2**](SubscriptionsApi.md#listusingget2)                       | **GET** /users-web/api/v3/apps/{appId}/subscriptions                  | Get subscriptions for an App             |
| [**listUsingGET5**](SubscriptionsApi.md#listusingget5)                       | **GET** /users-web/api/v3/subscriptions                               | Get current account&#x27;s subscriptions |
| [**sendAppReportUsingPOST1**](SubscriptionsApi.md#sendappreportusingpost1)   | **POST** /users-web/api/v3/apps/{appId}/report/send                   | Email an App report                      |
| [**sendDashReportUsingPOST1**](SubscriptionsApi.md#senddashreportusingpost1) | **POST** /users-web/api/v3/dashboards/{dashId}/report/send            | Email a dashboard report                 |
| [**toggleEnabledUsingPUT**](SubscriptionsApi.md#toggleenabledusingput)       | **PUT** /users-web/api/v3/subscriptions/{updateableSubscriptionId}    | Toggle subscription status               |
| [**updateForAppUsingPUT1**](SubscriptionsApi.md#updateforappusingput1)       | **PUT** /users-web/api/v3/apps/{appId}/subscription                   | Update App subscription                  |
| [**updateForDashUsingPUT**](SubscriptionsApi.md#updatefordashusingput)       | **PUT** /users-web/api/v3/dashboards/{dashId}/subscription            | Update dashboard subscription            |

# **createForAppUsingPOST**

> \sematext\stcloud\Model\SubscriptionResponse createForAppUsingPOST($body, $app_id)

Create App subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\API\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \sematext\stcloud\Model\SubscriptionDto(); // \sematext\stcloud\Model\SubscriptionDto | subscription
$app_id = 789; // int | appId

try {
    $result = $apiInstance->createForAppUsingPOST($body, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->createForAppUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name       | Type                                                                       | Description  | Notes |
| ---------- | -------------------------------------------------------------------------- | ------------ | ----- |
| **body**   | [**\sematext\stcloud\Model\SubscriptionDto**](../Model/SubscriptionDto.md) | subscription |
| **app_id** | **int**                                                                    | appId        |

### Return type

[**\sematext\stcloud\Model\SubscriptionResponse**](../Model/SubscriptionResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createForDashUsingPOST1**

> \sematext\stcloud\Model\SubscriptionResponse createForDashUsingPOST1($body, $dash_id)

Create dashboard subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\API\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \sematext\stcloud\Model\SubscriptionDashboardDto(); // \sematext\stcloud\Model\SubscriptionDashboardDto | subscription
$dash_id = 789; // int | dashId

try {
    $result = $apiInstance->createForDashUsingPOST1($body, $dash_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->createForDashUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name        | Type                                                                                         | Description  | Notes |
| ----------- | -------------------------------------------------------------------------------------------- | ------------ | ----- |
| **body**    | [**\sematext\stcloud\Model\SubscriptionDashboardDto**](../Model/SubscriptionDashboardDto.md) | subscription |
| **dash_id** | **int**                                                                                      | dashId       |

### Return type

[**\sematext\stcloud\Model\SubscriptionResponse**](../Model/SubscriptionResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUsingDELETE3**

> \sematext\stcloud\Model\GenericMapBasedApiResponse deleteUsingDELETE3($updateable_subscription_id)

Delete subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\API\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateable_subscription_id = 789; // int | updateableSubscriptionId

try {
    $result = $apiInstance->deleteUsingDELETE3($updateable_subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->deleteUsingDELETE3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name                           | Type    | Description              | Notes |
| ------------------------------ | ------- | ------------------------ | ----- |
| **updateable_subscription_id** | **int** | updateableSubscriptionId |

### Return type

[**\sematext\stcloud\Model\GenericMapBasedApiResponse**](../Model/GenericMapBasedApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listUsingGET2**

> \sematext\stcloud\Model\SubscriptionsResponse listUsingGET2($app_id)

Get subscriptions for an App

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\API\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 789; // int | appId

try {
    $result = $apiInstance->listUsingGET2($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->listUsingGET2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name       | Type    | Description | Notes |
| ---------- | ------- | ----------- | ----- |
| **app_id** | **int** | appId       |

### Return type

[**\sematext\stcloud\Model\SubscriptionsResponse**](../Model/SubscriptionsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listUsingGET5**

> \sematext\stcloud\Model\SubscriptionsResponse listUsingGET5()

Get current account's subscriptions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\API\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listUsingGET5();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->listUsingGET5: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\sematext\stcloud\Model\SubscriptionsResponse**](../Model/SubscriptionsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendAppReportUsingPOST1**

> \sematext\stcloud\Model\MailReportResponse sendAppReportUsingPOST1($body, $app_id)

Email an App report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\API\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \sematext\stcloud\Model\ReportInfo(); // \sematext\stcloud\Model\ReportInfo | emailDto
$app_id = 789; // int | appId

try {
    $result = $apiInstance->sendAppReportUsingPOST1($body, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->sendAppReportUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name       | Type                                                             | Description | Notes |
| ---------- | ---------------------------------------------------------------- | ----------- | ----- |
| **body**   | [**\sematext\stcloud\Model\ReportInfo**](../Model/ReportInfo.md) | emailDto    |
| **app_id** | **int**                                                          | appId       |

### Return type

[**\sematext\stcloud\Model\MailReportResponse**](../Model/MailReportResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendDashReportUsingPOST1**

> \sematext\stcloud\Model\MailReportResponse sendDashReportUsingPOST1($body, $dash_id)

Email a dashboard report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\API\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \sematext\stcloud\Model\ReportInfo(); // \sematext\stcloud\Model\ReportInfo | emailDto
$dash_id = 789; // int | dashId

try {
    $result = $apiInstance->sendDashReportUsingPOST1($body, $dash_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->sendDashReportUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name        | Type                                                             | Description | Notes |
| ----------- | ---------------------------------------------------------------- | ----------- | ----- |
| **body**    | [**\sematext\stcloud\Model\ReportInfo**](../Model/ReportInfo.md) | emailDto    |
| **dash_id** | **int**                                                          | dashId      |

### Return type

[**\sematext\stcloud\Model\MailReportResponse**](../Model/MailReportResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **toggleEnabledUsingPUT**

> \sematext\stcloud\Model\SubscriptionResponse toggleEnabledUsingPUT($body, $updateable_subscription_id)

Toggle subscription status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\API\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \sematext\stcloud\Model\UpdateSubscriptionDto(); // \sematext\stcloud\Model\UpdateSubscriptionDto | dto
$updateable_subscription_id = 789; // int | updateableSubscriptionId

try {
    $result = $apiInstance->toggleEnabledUsingPUT($body, $updateable_subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->toggleEnabledUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name                           | Type                                                                                   | Description              | Notes |
| ------------------------------ | -------------------------------------------------------------------------------------- | ------------------------ | ----- |
| **body**                       | [**\sematext\stcloud\Model\UpdateSubscriptionDto**](../Model/UpdateSubscriptionDto.md) | dto                      |
| **updateable_subscription_id** | **int**                                                                                | updateableSubscriptionId |

### Return type

[**\sematext\stcloud\Model\SubscriptionResponse**](../Model/SubscriptionResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateForAppUsingPUT1**

> \sematext\stcloud\Model\SubscriptionResponse updateForAppUsingPUT1($body, $app_id)

Update App subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\API\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \sematext\stcloud\Model\SubscriptionDto(); // \sematext\stcloud\Model\SubscriptionDto | subscription
$app_id = 789; // int | appId

try {
    $result = $apiInstance->updateForAppUsingPUT1($body, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->updateForAppUsingPUT1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name       | Type                                                                       | Description  | Notes |
| ---------- | -------------------------------------------------------------------------- | ------------ | ----- |
| **body**   | [**\sematext\stcloud\Model\SubscriptionDto**](../Model/SubscriptionDto.md) | subscription |
| **app_id** | **int**                                                                    | appId        |

### Return type

[**\sematext\stcloud\Model\SubscriptionResponse**](../Model/SubscriptionResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateForDashUsingPUT**

> \sematext\stcloud\Model\SubscriptionResponse updateForDashUsingPUT($body, $dash_id)

Update dashboard subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\API\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \sematext\stcloud\Model\SubscriptionDashboardDto(); // \sematext\stcloud\Model\SubscriptionDashboardDto | subscription
$dash_id = 789; // int | dashId

try {
    $result = $apiInstance->updateForDashUsingPUT($body, $dash_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->updateForDashUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name        | Type                                                                                         | Description  | Notes |
| ----------- | -------------------------------------------------------------------------------------------- | ------------ | ----- |
| **body**    | [**\sematext\stcloud\Model\SubscriptionDashboardDto**](../Model/SubscriptionDashboardDto.md) | subscription |
| **dash_id** | **int**                                                                                      | dashId       |

### Return type

[**\sematext\stcloud\Model\SubscriptionResponse**](../Model/SubscriptionResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

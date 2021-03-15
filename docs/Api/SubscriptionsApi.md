# Sematext\STCloud\SubscriptionsApi

All URIs are relative to */*

| Method                                                                     | HTTP request                                                          | Description                              |
| -------------------------------------------------------------------------- | --------------------------------------------------------------------- | ---------------------------------------- |
| [**createForAppUsingPOST1**](SubscriptionsApi.md#createforappusingpost1)   | **POST** /users-web/api/v3/apps/{appId}/subscription                  | Create App subscription                  |
| [**createForDashUsingPOST**](SubscriptionsApi.md#createfordashusingpost)   | **POST** /users-web/api/v3/dashboards/{dashId}/subscription           | Create dashboard subscription            |
| [**deleteUsingDELETE2**](SubscriptionsApi.md#deleteusingdelete2)           | **DELETE** /users-web/api/v3/subscriptions/{updateableSubscriptionId} | Delete subscription                      |
| [**listUsingGET2**](SubscriptionsApi.md#listusingget2)                     | **GET** /users-web/api/v3/apps/{appId}/subscriptions                  | Get subscriptions for an App             |
| [**listUsingGET5**](SubscriptionsApi.md#listusingget5)                     | **GET** /users-web/api/v3/subscriptions                               | Get current account&#x27;s subscriptions |
| [**sendAppReportUsingPOST1**](SubscriptionsApi.md#sendappreportusingpost1) | **POST** /users-web/api/v3/apps/{appId}/report/send                   | Email an App report                      |
| [**sendDashReportUsingPOST**](SubscriptionsApi.md#senddashreportusingpost) | **POST** /users-web/api/v3/dashboards/{dashId}/report/send            | Email a dashboard report                 |
| [**toggleEnabledUsingPUT1**](SubscriptionsApi.md#toggleenabledusingput1)   | **PUT** /users-web/api/v3/subscriptions/{updateableSubscriptionId}    | Toggle subscription status               |
| [**updateForAppUsingPUT**](SubscriptionsApi.md#updateforappusingput)       | **PUT** /users-web/api/v3/apps/{appId}/subscription                   | Update App subscription                  |
| [**updateForDashUsingPUT1**](SubscriptionsApi.md#updatefordashusingput1)   | **PUT** /users-web/api/v3/dashboards/{dashId}/subscription            | Update dashboard subscription            |

# **createForAppUsingPOST1**
> \Sematext\STCloud\Model\SubscriptionResponse createForAppUsingPOST1($body, $app_id)

Create App subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Sematext\STCloud\API\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Sematext\STCloud\Model\SubscriptionDto(); // \Sematext\STCloud\Model\SubscriptionDto | subscription
$app_id = 789; // int | appId

try {
    $result = $apiInstance->createForAppUsingPOST1($body, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->createForAppUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name       | Type                                                                       | Description  | Notes |
| ---------- | -------------------------------------------------------------------------- | ------------ | ----- |
| **body**   | [**\Sematext\STCloud\Model\SubscriptionDto**](../Model/SubscriptionDto.md) | subscription |
| **app_id** | **int**                                                                    | appId        |

### Return type

[**\Sematext\STCloud\Model\SubscriptionResponse**](../Model/SubscriptionResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createForDashUsingPOST**
> \Sematext\STCloud\Model\SubscriptionResponse createForDashUsingPOST($body, $dash_id)

Create dashboard subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Sematext\STCloud\API\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Sematext\STCloud\Model\SubscriptionDashboardDto(); // \Sematext\STCloud\Model\SubscriptionDashboardDto | subscription
$dash_id = 789; // int | dashId

try {
    $result = $apiInstance->createForDashUsingPOST($body, $dash_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->createForDashUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name        | Type                                                                                         | Description  | Notes |
| ----------- | -------------------------------------------------------------------------------------------- | ------------ | ----- |
| **body**    | [**\Sematext\STCloud\Model\SubscriptionDashboardDto**](../Model/SubscriptionDashboardDto.md) | subscription |
| **dash_id** | **int**                                                                                      | dashId       |

### Return type

[**\Sematext\STCloud\Model\SubscriptionResponse**](../Model/SubscriptionResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUsingDELETE2**
> \Sematext\STCloud\Model\GenericMapBasedApiResponse deleteUsingDELETE2($updateable_subscription_id)

Delete subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Sematext\STCloud\API\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateable_subscription_id = 789; // int | updateableSubscriptionId

try {
    $result = $apiInstance->deleteUsingDELETE2($updateable_subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->deleteUsingDELETE2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name                           | Type    | Description              | Notes |
| ------------------------------ | ------- | ------------------------ | ----- |
| **updateable_subscription_id** | **int** | updateableSubscriptionId |

### Return type

[**\Sematext\STCloud\Model\GenericMapBasedApiResponse**](../Model/GenericMapBasedApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listUsingGET2**
> \Sematext\STCloud\Model\SubscriptionsResponse listUsingGET2($app_id)

Get subscriptions for an App

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Sematext\STCloud\API\SubscriptionsApi(
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

[**\Sematext\STCloud\Model\SubscriptionsResponse**](../Model/SubscriptionsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listUsingGET5**
> \Sematext\STCloud\Model\SubscriptionsResponse listUsingGET5()

Get current account's subscriptions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Sematext\STCloud\API\SubscriptionsApi(
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

[**\Sematext\STCloud\Model\SubscriptionsResponse**](../Model/SubscriptionsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendAppReportUsingPOST1**
> \Sematext\STCloud\Model\MailReportResponse sendAppReportUsingPOST1($body, $app_id)

Email an App report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Sematext\STCloud\API\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Sematext\STCloud\Model\ReportInfo(); // \Sematext\STCloud\Model\ReportInfo | emailDto
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
| **body**   | [**\Sematext\STCloud\Model\ReportInfo**](../Model/ReportInfo.md) | emailDto    |
| **app_id** | **int**                                                          | appId       |

### Return type

[**\Sematext\STCloud\Model\MailReportResponse**](../Model/MailReportResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendDashReportUsingPOST**
> \Sematext\STCloud\Model\MailReportResponse sendDashReportUsingPOST($body, $dash_id)

Email a dashboard report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Sematext\STCloud\API\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Sematext\STCloud\Model\ReportInfo(); // \Sematext\STCloud\Model\ReportInfo | emailDto
$dash_id = 789; // int | dashId

try {
    $result = $apiInstance->sendDashReportUsingPOST($body, $dash_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->sendDashReportUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name        | Type                                                             | Description | Notes |
| ----------- | ---------------------------------------------------------------- | ----------- | ----- |
| **body**    | [**\Sematext\STCloud\Model\ReportInfo**](../Model/ReportInfo.md) | emailDto    |
| **dash_id** | **int**                                                          | dashId      |

### Return type

[**\Sematext\STCloud\Model\MailReportResponse**](../Model/MailReportResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **toggleEnabledUsingPUT1**
> \Sematext\STCloud\Model\SubscriptionResponse toggleEnabledUsingPUT1($body, $updateable_subscription_id)

Toggle subscription status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Sematext\STCloud\API\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Sematext\STCloud\Model\UpdateSubscriptionDto(); // \Sematext\STCloud\Model\UpdateSubscriptionDto | dto
$updateable_subscription_id = 789; // int | updateableSubscriptionId

try {
    $result = $apiInstance->toggleEnabledUsingPUT1($body, $updateable_subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->toggleEnabledUsingPUT1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name                           | Type                                                                                   | Description              | Notes |
| ------------------------------ | -------------------------------------------------------------------------------------- | ------------------------ | ----- |
| **body**                       | [**\Sematext\STCloud\Model\UpdateSubscriptionDto**](../Model/UpdateSubscriptionDto.md) | dto                      |
| **updateable_subscription_id** | **int**                                                                                | updateableSubscriptionId |

### Return type

[**\Sematext\STCloud\Model\SubscriptionResponse**](../Model/SubscriptionResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateForAppUsingPUT**
> \Sematext\STCloud\Model\SubscriptionResponse updateForAppUsingPUT($body, $app_id)

Update App subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Sematext\STCloud\API\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Sematext\STCloud\Model\SubscriptionDto(); // \Sematext\STCloud\Model\SubscriptionDto | subscription
$app_id = 789; // int | appId

try {
    $result = $apiInstance->updateForAppUsingPUT($body, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->updateForAppUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name       | Type                                                                       | Description  | Notes |
| ---------- | -------------------------------------------------------------------------- | ------------ | ----- |
| **body**   | [**\Sematext\STCloud\Model\SubscriptionDto**](../Model/SubscriptionDto.md) | subscription |
| **app_id** | **int**                                                                    | appId        |

### Return type

[**\Sematext\STCloud\Model\SubscriptionResponse**](../Model/SubscriptionResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateForDashUsingPUT1**
> \Sematext\STCloud\Model\SubscriptionResponse updateForDashUsingPUT1($body, $dash_id)

Update dashboard subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Sematext\STCloud\API\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Sematext\STCloud\Model\SubscriptionDashboardDto(); // \Sematext\STCloud\Model\SubscriptionDashboardDto | subscription
$dash_id = 789; // int | dashId

try {
    $result = $apiInstance->updateForDashUsingPUT1($body, $dash_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->updateForDashUsingPUT1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name        | Type                                                                                         | Description  | Notes |
| ----------- | -------------------------------------------------------------------------------------------- | ------------ | ----- |
| **body**    | [**\Sematext\STCloud\Model\SubscriptionDashboardDto**](../Model/SubscriptionDashboardDto.md) | subscription |
| **dash_id** | **int**                                                                                      | dashId       |

### Return type

[**\Sematext\STCloud\Model\SubscriptionResponse**](../Model/SubscriptionResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

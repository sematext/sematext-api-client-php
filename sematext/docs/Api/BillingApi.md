# sematext\stcloud\BillingApi

All URIs are relative to */*

| Method                                                                       | HTTP request                                                       | Description            |
| ---------------------------------------------------------------------------- | ------------------------------------------------------------------ | ---------------------- |
| [**getDetailedInvoiceUsingGET1**](BillingApi.md#getdetailedinvoiceusingget1) | **GET** /users-web/api/v3/billing/invoice/{service}/{year}/{month} | Get invoice details    |
| [**listAvailablePlansUsingGET1**](BillingApi.md#listavailableplansusingget1) | **GET** /users-web/api/v3/billing/availablePlans                   | Get available plans    |
| [**updatePlanUsingPUT1**](BillingApi.md#updateplanusingput1)                 | **PUT** /users-web/api/v3/billing/info/{appId}                     | Update plan for an app |

# **getDetailedInvoiceUsingGET1**

> \sematext\stcloud\Model\InvoiceResponse getDetailedInvoiceUsingGET1($service, $year, $month)

Get invoice details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\API\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service = "service_example"; // string | service
$year = 56; // int | year
$month = 56; // int | month

try {
    $result = $apiInstance->getDetailedInvoiceUsingGET1($service, $year, $month);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getDetailedInvoiceUsingGET1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name        | Type       | Description | Notes |
| ----------- | ---------- | ----------- | ----- |
| **service** | **string** | service     |
| **year**    | **int**    | year        |
| **month**   | **int**    | month       |

### Return type

[**\sematext\stcloud\Model\InvoiceResponse**](../Model/InvoiceResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAvailablePlansUsingGET1**

> \sematext\stcloud\Model\PlansResponse listAvailablePlansUsingGET1($integration_id, $app_type)

Get available plans

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\API\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integration_id = 789; // int | integrationId
$app_type = "app_type_example"; // string | appType

try {
    $result = $apiInstance->listAvailablePlansUsingGET1($integration_id, $app_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->listAvailablePlansUsingGET1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name               | Type       | Description   | Notes      |
| ------------------ | ---------- | ------------- | ---------- |
| **integration_id** | **int**    | integrationId | [optional] |
| **app_type**       | **string** | appType       | [optional] |

### Return type

[**\sematext\stcloud\Model\PlansResponse**](../Model/PlansResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePlanUsingPUT1**

> \sematext\stcloud\Model\UpdatePlanResponse updatePlanUsingPUT1($body, $app_id)

Update plan for an app

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\API\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \sematext\stcloud\Model\BillingInfo(); // \sematext\stcloud\Model\BillingInfo | dto
$app_id = 789; // int | appId

try {
    $result = $apiInstance->updatePlanUsingPUT1($body, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->updatePlanUsingPUT1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name       | Type                                                               | Description | Notes |
| ---------- | ------------------------------------------------------------------ | ----------- | ----- |
| **body**   | [**\sematext\stcloud\Model\BillingInfo**](../Model/BillingInfo.md) | dto         |
| **app_id** | **int**                                                            | appId       |

### Return type

[**\sematext\stcloud\Model\UpdatePlanResponse**](../Model/UpdatePlanResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

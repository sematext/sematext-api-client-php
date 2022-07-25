# sematext\stcloud\ResetPasswordApi

All URIs are relative to */*

| Method                                                                   | HTTP request                                      | Description    |
| ------------------------------------------------------------------------ | ------------------------------------------------- | -------------- |
| [**resetPasswordUsingPOST**](ResetPasswordApi.md#resetpasswordusingpost) | **POST** /users-web/api/v3/account/password/reset | Reset Password |

# **resetPasswordUsingPOST**

> \sematext\stcloud\Model\GenericMapBasedApiResponse resetPasswordUsingPOST($body)

Reset Password

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\API\ResetPasswordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \sematext\stcloud\Model\UserInfo(); // \sematext\stcloud\Model\UserInfo | dto

try {
    $result = $apiInstance->resetPasswordUsingPOST($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResetPasswordApi->resetPasswordUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name     | Type                                                         | Description | Notes |
| -------- | ------------------------------------------------------------ | ----------- | ----- |
| **body** | [**\sematext\stcloud\Model\UserInfo**](../Model/UserInfo.md) | dto         |

### Return type

[**\sematext\stcloud\Model\GenericMapBasedApiResponse**](../Model/GenericMapBasedApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

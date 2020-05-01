# Swagger\Client\ResetPasswordApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**resetPasswordUsingPOST**](ResetPasswordApi.md#resetPasswordUsingPOST) | **POST** /users-web/api/v3/account/password/reset | Reset Password


# **resetPasswordUsingPOST**
> \Swagger\Client\Model\GenericApiResponse resetPasswordUsingPOST($dto)

Reset Password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ResetPasswordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dto = new \Swagger\Client\Model\UserInfo(); // \Swagger\Client\Model\UserInfo | dto

try {
    $result = $apiInstance->resetPasswordUsingPOST($dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResetPasswordApi->resetPasswordUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dto** | [**\Swagger\Client\Model\UserInfo**](../Model/UserInfo.md)| dto |

### Return type

[**\Swagger\Client\Model\GenericApiResponse**](../Model/GenericApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


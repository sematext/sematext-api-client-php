# Sematext\STCloud\TokensApiControllerApi

All URIs are relative to *https://localhost*

| Method                                                                   | HTTP request                                                        | Description                               |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------- | ----------------------------------------- |
| [**createAppToken1**](TokensApiControllerApi.md#createAppToken1)         | **POST** /users-web/api/v3/apps/{appId}/tokens                      | Create new app token                      |
| [**deleteAppToken1**](TokensApiControllerApi.md#deleteAppToken1)         | **DELETE** /users-web/api/v3/apps/{appId}/tokens/{tokenId}          | Delete app token                          |
| [**getAppTokens**](TokensApiControllerApi.md#getAppTokens)               | **GET** /users-web/api/v3/apps/{appId}/tokens                       | Get app available tokens                  |
| [**regenerateAppToken1**](TokensApiControllerApi.md#regenerateAppToken1) | **POST** /users-web/api/v3/apps/{appId}/tokens/{tokenId}/regenerate | Regenerate app token)                     |
| [**updateAppToken**](TokensApiControllerApi.md#updateAppToken)           | **PUT** /users-web/api/v3/apps/{appId}/tokens/{tokenId}             | Update app token (enable/disable or name) |


# **createAppToken1**
> \Sematext\STCloud\Model\GenericApiResponse createAppToken1($app_id, $dto)

Create new app token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Sematext\STCloud\Api\TokensApiControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 789; // int | appId
$dto = new \Sematext\STCloud\Model\CreateTokenDto(); // \Sematext\STCloud\Model\CreateTokenDto | dto

try {
    $result = $apiInstance->createAppToken1($app_id, $dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApiControllerApi->createAppToken1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name       | Type                                                                     | Description | Notes |
| ---------- | ------------------------------------------------------------------------ | ----------- | ----- |
| **app_id** | **int**                                                                  | appId       |
| **dto**    | [**\Sematext\STCloud\Model\CreateTokenDto**](../Model/CreateTokenDto.md) | dto         |

### Return type

[**\Sematext\STCloud\Model\GenericApiResponse**](../Model/GenericApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAppToken1**
> \Sematext\STCloud\Model\GenericApiResponse deleteAppToken1($app_id, $token_id)

Delete app token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Sematext\STCloud\Api\TokensApiControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 789; // int | appId
$token_id = 789; // int | tokenId

try {
    $result = $apiInstance->deleteAppToken1($app_id, $token_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApiControllerApi->deleteAppToken1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name         | Type    | Description | Notes |
| ------------ | ------- | ----------- | ----- |
| **app_id**   | **int** | appId       |
| **token_id** | **int** | tokenId     |

### Return type

[**\Sematext\STCloud\Model\GenericApiResponse**](../Model/GenericApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppTokens**
> \Sematext\STCloud\Model\GenericApiResponse getAppTokens($app_id)

Get app available tokens

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Sematext\STCloud\Api\TokensApiControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 789; // int | appId

try {
    $result = $apiInstance->getAppTokens($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApiControllerApi->getAppTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name       | Type    | Description | Notes |
| ---------- | ------- | ----------- | ----- |
| **app_id** | **int** | appId       |

### Return type

[**\Sematext\STCloud\Model\GenericApiResponse**](../Model/GenericApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **regenerateAppToken1**
> \Sematext\STCloud\Model\GenericApiResponse regenerateAppToken1($app_id, $token_id)

Regenerate app token)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Sematext\STCloud\Api\TokensApiControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 789; // int | appId
$token_id = 789; // int | tokenId

try {
    $result = $apiInstance->regenerateAppToken1($app_id, $token_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApiControllerApi->regenerateAppToken1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name         | Type    | Description | Notes |
| ------------ | ------- | ----------- | ----- |
| **app_id**   | **int** | appId       |
| **token_id** | **int** | tokenId     |

### Return type

[**\Sematext\STCloud\Model\GenericApiResponse**](../Model/GenericApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAppToken**
> \Sematext\STCloud\Model\GenericApiResponse updateAppToken($app_id, $token_id, $dto)

Update app token (enable/disable or name)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Sematext\STCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Sematext\STCloud\Api\TokensApiControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 789; // int | appId
$token_id = 789; // int | tokenId
$dto = new \Sematext\STCloud\Model\UpdateTokenDto(); // \Sematext\STCloud\Model\UpdateTokenDto | dto

try {
    $result = $apiInstance->updateAppToken($app_id, $token_id, $dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApiControllerApi->updateAppToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name         | Type                                                                     | Description | Notes |
| ------------ | ------------------------------------------------------------------------ | ----------- | ----- |
| **app_id**   | **int**                                                                  | appId       |
| **token_id** | **int**                                                                  | tokenId     |
| **dto**      | [**\Sematext\STCloud\Model\UpdateTokenDto**](../Model/UpdateTokenDto.md) | dto         |

### Return type

[**\Sematext\STCloud\Model\GenericApiResponse**](../Model/GenericApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

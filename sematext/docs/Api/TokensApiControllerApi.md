# sematext\stcloud\TokensApiControllerApi

All URIs are relative to */*

| Method                                                                 | HTTP request                                                        | Description                               |
| ---------------------------------------------------------------------- | ------------------------------------------------------------------- | ----------------------------------------- |
| [**createAppToken1**](TokensApiControllerApi.md#createapptoken1)       | **POST** /users-web/api/v3/apps/{appId}/tokens                      | Create new app token                      |
| [**deleteAppToken1**](TokensApiControllerApi.md#deleteapptoken1)       | **DELETE** /users-web/api/v3/apps/{appId}/tokens/{tokenId}          | Delete app token                          |
| [**getAppTokens1**](TokensApiControllerApi.md#getapptokens1)           | **GET** /users-web/api/v3/apps/{appId}/tokens                       | Get app available tokens                  |
| [**regenerateAppToken**](TokensApiControllerApi.md#regenerateapptoken) | **POST** /users-web/api/v3/apps/{appId}/tokens/{tokenId}/regenerate | Regenerate app token)                     |
| [**updateAppToken1**](TokensApiControllerApi.md#updateapptoken1)       | **PUT** /users-web/api/v3/apps/{appId}/tokens/{tokenId}             | Update app token (enable/disable or name) |

# **createAppToken1**

> \sematext\stcloud\Model\TokenResponse createAppToken1($body, $app_id)

Create new app token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\API\TokensApiControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \sematext\stcloud\Model\CreateTokenDto(); // \sematext\stcloud\Model\CreateTokenDto | dto
$app_id = 789; // int | appId

try {
    $result = $apiInstance->createAppToken1($body, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApiControllerApi->createAppToken1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name       | Type                                                                     | Description | Notes |
| ---------- | ------------------------------------------------------------------------ | ----------- | ----- |
| **body**   | [**\sematext\stcloud\Model\CreateTokenDto**](../Model/CreateTokenDto.md) | dto         |
| **app_id** | **int**                                                                  | appId       |

### Return type

[**\sematext\stcloud\Model\TokenResponse**](../Model/TokenResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAppToken1**

> \sematext\stcloud\Model\GenericMapBasedApiResponse deleteAppToken1($app_id, $token_id)

Delete app token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\API\TokensApiControllerApi(
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

[**\sematext\stcloud\Model\GenericMapBasedApiResponse**](../Model/GenericMapBasedApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppTokens1**

> \sematext\stcloud\Model\TokensResponse getAppTokens1($app_id)

Get app available tokens

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\API\TokensApiControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 789; // int | appId

try {
    $result = $apiInstance->getAppTokens1($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApiControllerApi->getAppTokens1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name       | Type    | Description | Notes |
| ---------- | ------- | ----------- | ----- |
| **app_id** | **int** | appId       |

### Return type

[**\sematext\stcloud\Model\TokensResponse**](../Model/TokensResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **regenerateAppToken**

> \sematext\stcloud\Model\TokenResponse regenerateAppToken($app_id, $token_id)

Regenerate app token)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\API\TokensApiControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 789; // int | appId
$token_id = 789; // int | tokenId

try {
    $result = $apiInstance->regenerateAppToken($app_id, $token_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApiControllerApi->regenerateAppToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name         | Type    | Description | Notes |
| ------------ | ------- | ----------- | ----- |
| **app_id**   | **int** | appId       |
| **token_id** | **int** | tokenId     |

### Return type

[**\sematext\stcloud\Model\TokenResponse**](../Model/TokenResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAppToken1**

> \sematext\stcloud\Model\TokenResponse updateAppToken1($body, $app_id, $token_id)

Update app token (enable/disable or name)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\API\TokensApiControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \sematext\stcloud\Model\UpdateTokenDto(); // \sematext\stcloud\Model\UpdateTokenDto | dto
$app_id = 789; // int | appId
$token_id = 789; // int | tokenId

try {
    $result = $apiInstance->updateAppToken1($body, $app_id, $token_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApiControllerApi->updateAppToken1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name         | Type                                                                     | Description | Notes |
| ------------ | ------------------------------------------------------------------------ | ----------- | ----- |
| **body**     | [**\sematext\stcloud\Model\UpdateTokenDto**](../Model/UpdateTokenDto.md) | dto         |
| **app_id**   | **int**                                                                  | appId       |
| **token_id** | **int**                                                                  | tokenId     |

### Return type

[**\sematext\stcloud\Model\TokenResponse**](../Model/TokenResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

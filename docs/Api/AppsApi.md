# sematext\stcloud\AppsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAppTypesUsingGET**](AppsApi.md#getAppTypesUsingGET) | **GET** /users-web/api/v3/apps/types | Get all App types supported for the account identified with apiKey
[**getUsingGET**](AppsApi.md#getUsingGET) | **GET** /users-web/api/v3/apps/{anyStateAppId} | Gets defails for one particular App
[**inviteAppGuestsUsingPOST**](AppsApi.md#inviteAppGuestsUsingPOST) | **POST** /users-web/api/v3/apps/guests | Invite guests to an app
[**listAppsUsersUsingGET**](AppsApi.md#listAppsUsersUsingGET) | **GET** /users-web/api/v3/apps/users | Get all users of apps accessible to this account
[**listUsingGET**](AppsApi.md#listUsingGET) | **GET** /users-web/api/v3/apps | Get all apps accessible by account identified with apiKey
[**updateDescriptionUsingPUT**](AppsApi.md#updateDescriptionUsingPUT) | **PUT** /users-web/api/v3/apps/{anyStateAppId}/description | Update description of the app
[**updateUsingPUT1**](AppsApi.md#updateUsingPUT1) | **PUT** /users-web/api/v3/apps/{anyStateAppId} | Update app


# **getAppTypesUsingGET**
> \sematext\stcloud\Model\GenericApiResponse getAppTypesUsingGET()

Get all App types supported for the account identified with apiKey

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAppTypesUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->getAppTypesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\sematext\stcloud\Model\GenericApiResponse**](../Model/GenericApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsingGET**
> \sematext\stcloud\Model\GenericApiResponse getUsingGET($any_state_app_id)

Gets defails for one particular App

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$any_state_app_id = 789; // int | anyStateAppId

try {
    $result = $apiInstance->getUsingGET($any_state_app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->getUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **any_state_app_id** | **int**| anyStateAppId |

### Return type

[**\sematext\stcloud\Model\GenericApiResponse**](../Model/GenericApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inviteAppGuestsUsingPOST**
> \sematext\stcloud\Model\GenericApiResponse inviteAppGuestsUsingPOST($invitation)

Invite guests to an app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invitation = new \sematext\stcloud\Model\Invitation(); // \sematext\stcloud\Model\Invitation | For `app` and `apps` fields only `id` needs to be populated.Other fields can be left empty or with default values

try {
    $result = $apiInstance->inviteAppGuestsUsingPOST($invitation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->inviteAppGuestsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invitation** | [**\sematext\stcloud\Model\Invitation**](../Model/Invitation.md)| For &#x60;app&#x60; and &#x60;apps&#x60; fields only &#x60;id&#x60; needs to be populated.Other fields can be left empty or with default values |

### Return type

[**\sematext\stcloud\Model\GenericApiResponse**](../Model/GenericApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAppsUsersUsingGET**
> \sematext\stcloud\Model\GenericApiResponse listAppsUsersUsingGET()

Get all users of apps accessible to this account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listAppsUsersUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->listAppsUsersUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\sematext\stcloud\Model\GenericApiResponse**](../Model/GenericApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listUsingGET**
> \sematext\stcloud\Model\GenericApiResponse listUsingGET()

Get all apps accessible by account identified with apiKey

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->listUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\sematext\stcloud\Model\GenericApiResponse**](../Model/GenericApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDescriptionUsingPUT**
> \sematext\stcloud\Model\GenericApiResponse updateDescriptionUsingPUT($any_state_app_id, $update_details)

Update description of the app

App can be in any state

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$any_state_app_id = 789; // int | App Id
$update_details = new \sematext\stcloud\Model\AppDescription(); // \sematext\stcloud\Model\AppDescription | Update Details

try {
    $result = $apiInstance->updateDescriptionUsingPUT($any_state_app_id, $update_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->updateDescriptionUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **any_state_app_id** | **int**| App Id |
 **update_details** | [**\sematext\stcloud\Model\AppDescription**](../Model/AppDescription.md)| Update Details | [optional]

### Return type

[**\sematext\stcloud\Model\GenericApiResponse**](../Model/GenericApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUsingPUT1**
> \sematext\stcloud\Model\GenericApiResponse updateUsingPUT1($dto, $any_state_app_id)

Update app

App can be in any state

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dto = new \sematext\stcloud\Model\UpdateAppInfo(); // \sematext\stcloud\Model\UpdateAppInfo | dto
$any_state_app_id = 789; // int | App Id

try {
    $result = $apiInstance->updateUsingPUT1($dto, $any_state_app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->updateUsingPUT1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dto** | [**\sematext\stcloud\Model\UpdateAppInfo**](../Model/UpdateAppInfo.md)| dto |
 **any_state_app_id** | **int**| App Id |

### Return type

[**\sematext\stcloud\Model\GenericApiResponse**](../Model/GenericApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

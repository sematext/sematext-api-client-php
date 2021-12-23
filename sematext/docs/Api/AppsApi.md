# sematext\stcloud\AppsApi

All URIs are relative to */*

| Method                                                                  | HTTP request                                               | Description                                                        |
| ----------------------------------------------------------------------- | ---------------------------------------------------------- | ------------------------------------------------------------------ |
| [**deleteUsingDELETE1**](AppsApi.md#deleteusingdelete1)                 | **DELETE** /users-web/api/v3/apps/{anyStateAppId}          | delete                                                             |
| [**getAppTypesUsingGET1**](AppsApi.md#getapptypesusingget1)             | **GET** /users-web/api/v3/apps/types                       | Get all App types supported for the account identified with apiKey |
| [**getUsingGET1**](AppsApi.md#getusingget1)                             | **GET** /users-web/api/v3/apps/{anyStateAppId}             | Gets defails for one particular App                                |
| [**inviteAppGuestsUsingPOST1**](AppsApi.md#inviteappguestsusingpost1)   | **POST** /users-web/api/v3/apps/guests                     | Invite guests to an app                                            |
| [**listAppsUsersUsingGET**](AppsApi.md#listappsusersusingget)           | **GET** /users-web/api/v3/apps/users                       | Get all users of apps accessible to this account                   |
| [**listUsingGET1**](AppsApi.md#listusingget1)                           | **GET** /users-web/api/v3/apps                             | Get all apps accessible by account identified with apiKey          |
| [**updateDescriptionUsingPUT1**](AppsApi.md#updatedescriptionusingput1) | **PUT** /users-web/api/v3/apps/{anyStateAppId}/description | Update description of the app                                      |
| [**updateUsingPUT3**](AppsApi.md#updateusingput3)                       | **PUT** /users-web/api/v3/apps/{anyStateAppId}             | Update app                                                         |

# **deleteUsingDELETE1**

> \sematext\stcloud\Model\GenericMapBasedApiResponse deleteUsingDELETE1($any_state_app_id)

delete

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\API\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$any_state_app_id = 789; // int | anyStateAppId

try {
    $result = $apiInstance->deleteUsingDELETE1($any_state_app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->deleteUsingDELETE1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name                 | Type    | Description   | Notes |
| -------------------- | ------- | ------------- | ----- |
| **any_state_app_id** | **int** | anyStateAppId |

### Return type

[**\sematext\stcloud\Model\GenericMapBasedApiResponse**](../Model/GenericMapBasedApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppTypesUsingGET1**

> \sematext\stcloud\Model\AppTypesResponse getAppTypesUsingGET1()

Get all App types supported for the account identified with apiKey

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\API\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAppTypesUsingGET1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->getAppTypesUsingGET1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\sematext\stcloud\Model\AppTypesResponse**](../Model/AppTypesResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsingGET1**

> \sematext\stcloud\Model\AppResponse getUsingGET1($any_state_app_id)

Gets defails for one particular App

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\API\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$any_state_app_id = 789; // int | anyStateAppId

try {
    $result = $apiInstance->getUsingGET1($any_state_app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->getUsingGET1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name                 | Type    | Description   | Notes |
| -------------------- | ------- | ------------- | ----- |
| **any_state_app_id** | **int** | anyStateAppId |

### Return type

[**\sematext\stcloud\Model\AppResponse**](../Model/AppResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inviteAppGuestsUsingPOST1**

> \sematext\stcloud\Model\GenericMapBasedApiResponse inviteAppGuestsUsingPOST1($body)

Invite guests to an app

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\API\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \sematext\stcloud\Model\Invitation(); // \sematext\stcloud\Model\Invitation | For `app` and `apps` fields only `id` needs to be populated.Other fields can be left empty or with default values

try {
    $result = $apiInstance->inviteAppGuestsUsingPOST1($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->inviteAppGuestsUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name     | Type                                                             | Description                                                                                                                                     | Notes |
| -------- | ---------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----- |
| **body** | [**\sematext\stcloud\Model\Invitation**](../Model/Invitation.md) | For &#x60;app&#x60; and &#x60;apps&#x60; fields only &#x60;id&#x60; needs to be populated.Other fields can be left empty or with default values |

### Return type

[**\sematext\stcloud\Model\GenericMapBasedApiResponse**](../Model/GenericMapBasedApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAppsUsersUsingGET**

> \sematext\stcloud\Model\AppsResponse listAppsUsersUsingGET()

Get all users of apps accessible to this account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\API\AppsApi(
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

[**\sematext\stcloud\Model\AppsResponse**](../Model/AppsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listUsingGET1**

> \sematext\stcloud\Model\AppsResponse listUsingGET1()

Get all apps accessible by account identified with apiKey

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = sematext\stcloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new sematext\stcloud\API\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listUsingGET1();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->listUsingGET1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\sematext\stcloud\Model\AppsResponse**](../Model/AppsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDescriptionUsingPUT1**

> \sematext\stcloud\Model\AppResponse updateDescriptionUsingPUT1($any_state_app_id, $body)

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

$apiInstance = new sematext\stcloud\API\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$any_state_app_id = 789; // int | App Id
$body = new \sematext\stcloud\Model\AppDescription(); // \sematext\stcloud\Model\AppDescription | Update Details

try {
    $result = $apiInstance->updateDescriptionUsingPUT1($any_state_app_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->updateDescriptionUsingPUT1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name                 | Type                                                                     | Description    | Notes      |
| -------------------- | ------------------------------------------------------------------------ | -------------- | ---------- |
| **any_state_app_id** | **int**                                                                  | App Id         |
| **body**             | [**\sematext\stcloud\Model\AppDescription**](../Model/AppDescription.md) | Update Details | [optional] |

### Return type

[**\sematext\stcloud\Model\AppResponse**](../Model/AppResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUsingPUT3**

> \sematext\stcloud\Model\AppResponse updateUsingPUT3($body, $any_state_app_id)

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

$apiInstance = new sematext\stcloud\API\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \sematext\stcloud\Model\UpdateAppInfo(); // \sematext\stcloud\Model\UpdateAppInfo | dto
$any_state_app_id = 789; // int | App Id

try {
    $result = $apiInstance->updateUsingPUT3($body, $any_state_app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->updateUsingPUT3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

| Name                 | Type                                                                   | Description | Notes |
| -------------------- | ---------------------------------------------------------------------- | ----------- | ----- |
| **body**             | [**\sematext\stcloud\Model\UpdateAppInfo**](../Model/UpdateAppInfo.md) | dto         |
| **any_state_app_id** | **int**                                                                | App Id      |

### Return type

[**\sematext\stcloud\Model\AppResponse**](../Model/AppResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

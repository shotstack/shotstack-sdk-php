# Shotstack\Client\ServeApi

All URIs are relative to https://api.shotstack.io/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAsset()**](ServeApi.md#deleteAsset) | **DELETE** /assets/{id} | Delete Asset
[**getAsset()**](ServeApi.md#getAsset) | **GET** /assets/{id} | Get Asset
[**getAssetByRenderId()**](ServeApi.md#getAssetByRenderId) | **GET** /assets/render/{id} | Get Asset by Render ID


## `deleteAsset()`

```php
deleteAsset($id)
```

Delete Asset

Delete an asset by its asset id. If a render creates multiple assets, such as thumbnail and poster images, each asset must be deleted individually by the asset id.  **Base URL:** https://api.shotstack.io/serve/{version}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: DeveloperKey
$config = Shotstack\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Shotstack\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Shotstack\Client\Api\ServeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the asset in UUID format

try {
    $apiInstance->deleteAsset($id);
} catch (Exception $e) {
    echo 'Exception when calling ServeApi->deleteAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the asset in UUID format |

### Return type

void (empty response body)

### Authorization

[DeveloperKey](../../README.md#DeveloperKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAsset()`

```php
getAsset($id): \Shotstack\Client\Model\AssetResponse
```

Get Asset

The Serve API is used to interact with, and delete hosted assets including videos, images, audio files,  thumbnails and poster images. Use this endpoint to fetch an asset by asset id. Note that an asset id is unique for each asset and different from the render id.  **Base URL:** https://api.shotstack.io/serve/{version}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: DeveloperKey
$config = Shotstack\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Shotstack\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Shotstack\Client\Api\ServeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the asset in UUID format

try {
    $result = $apiInstance->getAsset($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServeApi->getAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the asset in UUID format |

### Return type

[**\Shotstack\Client\Model\AssetResponse**](../Model/AssetResponse.md)

### Authorization

[DeveloperKey](../../README.md#DeveloperKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetByRenderId()`

```php
getAssetByRenderId($id): \Shotstack\Client\Model\AssetRenderResponse
```

Get Asset by Render ID

A render may generate more than one file, such as a video, thumbnail and poster image. When the assets are created the only known id is the render id returned by the original [render request](#render-video), status  request or webhook. This endpoint lets you look up one or more assets by the render id.  **Base URL:** https://api.shotstack.io/serve/{version}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: DeveloperKey
$config = Shotstack\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Shotstack\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Shotstack\Client\Api\ServeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The render id associated with the asset in UUID format

try {
    $result = $apiInstance->getAssetByRenderId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServeApi->getAssetByRenderId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The render id associated with the asset in UUID format |

### Return type

[**\Shotstack\Client\Model\AssetRenderResponse**](../Model/AssetRenderResponse.md)

### Authorization

[DeveloperKey](../../README.md#DeveloperKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

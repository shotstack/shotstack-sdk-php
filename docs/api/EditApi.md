# Shotstack\Client\EditApi

All URIs are relative to https://api.shotstack.io/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getRender()**](EditApi.md#getRender) | **GET** /render/{id} | Get Render Status
[**postRender()**](EditApi.md#postRender) | **POST** /render | Render Asset
[**probe()**](EditApi.md#probe) | **GET** /probe/{url} | Inspect Media


## `getRender()`

```php
getRender($id, $data, $merged): \Shotstack\Client\Model\RenderResponse
```

Get Render Status

Get the rendering status, temporary asset url and details of a render by ID.  **Base URL:** https://api.shotstack.io/{version}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: DeveloperKey
$config = Shotstack\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Shotstack\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Shotstack\Client\Api\EditApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The id of the timeline render task in UUID format
$data = false; // bool | Include the data parameter in the response. The data parameter includes the original timeline, output and other settings sent to the API.<br><br><b>Note:</b> the default is currently `true`, this is deprecated and the default will soon be `false`. If you rely on the data being returned in the response you should explicitly set the parameter to `true`.
$merged = false; // bool | Used when data is set to true, it will show the [merge fields](#tocs_mergefield) merged in to the data response.

try {
    $result = $apiInstance->getRender($id, $data, $merged);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditApi->getRender: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the timeline render task in UUID format |
 **data** | **bool**| Include the data parameter in the response. The data parameter includes the original timeline, output and other settings sent to the API.&lt;br&gt;&lt;br&gt;&lt;b&gt;Note:&lt;/b&gt; the default is currently &#x60;true&#x60;, this is deprecated and the default will soon be &#x60;false&#x60;. If you rely on the data being returned in the response you should explicitly set the parameter to &#x60;true&#x60;. | [optional]
 **merged** | **bool**| Used when data is set to true, it will show the [merge fields](#tocs_mergefield) merged in to the data response. | [optional]

### Return type

[**\Shotstack\Client\Model\RenderResponse**](../Model/RenderResponse.md)

### Authorization

[DeveloperKey](../../README.md#DeveloperKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postRender()`

```php
postRender($edit): \Shotstack\Client\Model\QueuedResponse
```

Render Asset

Queue and render the contents of a timeline as a video, image or audio file.  **Base URL:** https://api.shotstack.io/{version}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: DeveloperKey
$config = Shotstack\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Shotstack\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Shotstack\Client\Api\EditApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edit = {"timeline":{"soundtrack":{"src":"https://s3-ap-northeast-1.amazonaws.com/my-bucket/music.mp3","effect":"fadeInFadeOut"},"background":"#000000","tracks":[{"clips":[{"asset":{"type":"title","text":"Hello World","style":"minimal"},"start":0,"length":4,"transition":{"in":"fade","out":"fade"},"effect":"slideRight"},{"asset":{"type":"image","src":"https://s3-ap-northeast-1.amazonaws.com/my-bucket/my-image.jpg"},"start":3,"length":4,"effect":"zoomIn","filter":"greyscale"}]},{"clips":[{"asset":{"type":"video","src":"https://s3-ap-northeast-1.amazonaws.com/my-bucket/my-clip-1.mp4","trim":10.5},"start":7,"length":4.5},{"asset":{"type":"video","src":"https://s3-ap-northeast-1.amazonaws.com/my-bucket/my-clip-2.mp4","volume":0.5},"start":11.5,"length":5,"transition":{"out":"wipeLeft"}}]}]},"output":{"format":"mp4","resolution":"sd"}}; // \Shotstack\Client\Model\Edit | The video, image or audio edit specified using JSON.

try {
    $result = $apiInstance->postRender($edit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditApi->postRender: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edit** | [**\Shotstack\Client\Model\Edit**](../Model/Edit.md)| The video, image or audio edit specified using JSON. |

### Return type

[**\Shotstack\Client\Model\QueuedResponse**](../Model/QueuedResponse.md)

### Authorization

[DeveloperKey](../../README.md#DeveloperKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `probe()`

```php
probe($url): \Shotstack\Client\Model\ProbeResponse
```

Inspect Media

Inspects any media asset (image, video, audio) on the internet using a hosted version of [FFprobe](https://ffmpeg.org/ffprobe.html). The probe endpoint returns useful information about an asset such as width, height, duration, rotation, framerate, etc...  **Base URL:** https://api.shotstack.io/{version}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: DeveloperKey
$config = Shotstack\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Shotstack\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new Shotstack\Client\Api\EditApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$url = 'url_example'; // string | The URL of the media to inspect, must be **URL encoded**.

try {
    $result = $apiInstance->probe($url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditApi->probe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **url** | **string**| The URL of the media to inspect, must be **URL encoded**. |

### Return type

[**\Shotstack\Client\Model\ProbeResponse**](../Model/ProbeResponse.md)

### Authorization

[DeveloperKey](../../README.md#DeveloperKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

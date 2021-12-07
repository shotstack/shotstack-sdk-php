# Shotstack PHP SDK

PHP SDK for the Shotstack [PHP video editor](https://shotstack.io/product/sdk/php) and cloud video editing API.

Shotstack is a cloud based video editing platform that enables the editing of videos using code.

The platform uses an API and a JSON format for specifying how videos should be edited and what assets and titles should be used.

A server based render farm takes care of rendering the videos allowing multiple videos to be created simultaneously.

For examples of how to use the SDK to create videos using code checkout the PHP demo repo: https://github.com/shotstack/php-demos

## Documentation and Guides

- [Getting Started Guide](https://shotstack.io/docs/guide/getting-started/core-concepts/)
- [API Reference](https://shotstack.io/docs/api/)
- [Examples](https://github.com/shotstack/php-demos)
- [Shotstack Website](https://shotstack.io)

## Using the PHP SDK
### Installation

The recommended way to use the SDK is as a composer package. Install using the command:

```bash
composer require shotstack/shotstack-sdk-php
```

### Editing Example

The example below trims the start of a video clip and plays it for 8 seconds. The edit is prepared using the SDK models
and then sent to the API for rendering.

```php
<?php
require 'vendor/autoload.php';

use Shotstack\Client\Api\EditApi;
use Shotstack\Client\Configuration;
use Shotstack\Client\Model\Edit;
use Shotstack\Client\Model\Output;
use Shotstack\Client\Model\Timeline;
use Shotstack\Client\Model\Track;
use Shotstack\Client\Model\Clip;
use Shotstack\Client\Model\VideoAsset;

$config = Configuration::getDefaultConfiguration()
    ->setHost('https://api.shotstack.io/stage')
    ->setApiKey('x-api-key', 'H7jKyj90kd09lbLOF7J900jNbSWS67X87xs9j0cD'); // use the correct API key

$client = new EditApi(null, $config);

$videoAsset = new VideoAsset();
$videoAsset
    ->setSrc('https://s3-ap-southeast-2.amazonaws.com/shotstack-assets/footage/skater.hd.mp4')
    ->setTrim(3);

$videoClip = new Clip();
$videoClip
    ->setAsset($videoAsset)
    ->setLength(8)
    ->setStart(0);

$track = new Track();
$track->setClips([$videoClip]);

$timeline = new Timeline();
$timeline->setTracks([$track]);

$output = new Output();
$output
    ->setFormat('mp4')
    ->setResolution('sd');

$edit = new Edit();
$edit
    ->setTimeline($timeline)
    ->setOutput($output);

$render = $client->postRender($edit)->getResponse();
```

The example request below can be called a few seconds after the render above is posted. It will return the status of 
the render, which can take several seconds to process.

```php
use Shotstack\Client\Api\EditApi;
use Shotstack\Client\Configuration;

$config = Configuration::getDefaultConfiguration()
    ->setHost('https://api.shotstack.io/stage')
    ->setApiKey('x-api-key', 'H7jKyj90kd09lbLOF7J900jNbSWS67X87xs9j0cD'); // use the correct API key

$client = new EditApi(null, $config);

$video = $client->getRender($render->getId())->getResponse();

if ($video->getStatus() === 'done') {
    echo $video->getUrl();
}
```

## Schemas

### Edit()

An **Edit** defines the arrangement of a video on a timeline, an audio edit or an image design and the output format.

#### Example:

```php
use Shotstack\Client\Model\Edit;

$edit = new Edit();
$edit
  ->setTimeline($timeline)
  ->setOutput($output)
  ->setMerge($merge)
  ->setCallback("https://my-server.com/callback.php")
  ->setDisk("local");
```

#### Methods:

Method | Description | Required
:--- | :--- | :---: 
setTimeline([\Shotstack\Client\Model\Timeline](Timeline.md)) | A timeline represents the contents of a video edit over time, an audio edit over time, in seconds, or an image layout. A timeline consists of layers called tracks. Tracks are composed of titles, images, audio, html or video segments referred to as clips which are placed along the track at specific starting point and lasting for a specific amount of time. | -
setOutput([\Shotstack\Client\Model\Output](Output.md)) | The output format, render range and type of media to generate. | Y
setMerge([\Shotstack\Client\Model\MergeField[]](MergeField.md) $mergeField) | An array of key/value pairs that provides an easy way to create templates with placeholders. The placeholders can be used to find and replace keys with values. For example you can search for the placeholder `{{NAME}}` and replace it with the value `Jane`. | -
setCallback(string $callback) | An optional webhook callback URL used to receive status notifications when a render completes or fails. See [webhooks](https://shotstack.io/docs/guide/architecting-an-application/webhooks/) for  more details. | -
setDisk(string $disk) | The disk type to use for storing footage and assets for each render. See [disk types](https://shotstack.io/docs/guide/architecting-an-application/disk-types/) for more details. [default to `local`] <ul><li>`local` - optimized for high speed rendering with up to 512MB storage</li><li>`mount` - optimized for larger file sizes and longer videos with 5GB for source footage and 512MB for output render</li></ul> | -

-----

### Timeline()

A **Timeline** represents the contents of a video edit over time, an audio edit over time, in seconds, or an image layout. A timeline consists of layers called tracks. Tracks are composed of titles, images, audio, html or video segments referred to as clips which are placed along the track at specific starting point and lasting for a specific amount of time.

#### Example:

```php
use Shotstack\Client\Model\Timeline;

$timeline = new Timeline();
$timeline
  ->setSoundtrack($soundtrack)
  ->setBackground('#000000')
  ->setFonts($fonts)
  ->setTracks($tracks)
  ->setCache(true);
```

#### Methods:

Method | Description | Required
:--- | :--- | :---: 
setSoundtrack([**\Shotstack\Client\Model\Soundtrack**](Soundtrack.md) $soundtrack) | A music or audio soundtrack file in mp3 format. | -
setBackground(string $background) | A hexadecimal value for the timeline background colour. Defaults to `#000000` (black). | -
setFonts([\Shotstack\Client\Model\Font[]](Font.md) $fonts) | An array of custom fonts to be downloaded for use by the HTML assets. | -
setTracks([\Shotstack\Client\Model\Track[]](Track.md) $tracks) | A timeline consists of an array of tracks, each track containing clips. Tracks are layered on top of each other in the same order they are added to the array with the top most track layered over the top of those below it. Ensure that a track containing titles is the top most track so that it is displayed above videos and images. | Y
setCache(bool $cache) | Disable the caching of ingested source footage and assets. See  [caching](https://shotstack.io/docs/guide/architecting-an-application/caching) for more details. [default to `true`] | -

---
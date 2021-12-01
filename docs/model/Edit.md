# Edit()

An **Edit** defines the arrangement of a video on a timeline, an audio edit or an image design and the output format.

### Example:

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

### Methods:

Method | Description | Required
:--- | :--- | :---: 
setTimeline([\Shotstack\Client\Model\Timeline](Timeline.md)) | A timeline represents the contents of a video edit over time, an audio edit over time, in seconds, or an image layout. A timeline consists of layers called tracks. Tracks are composed of titles, images, audio, html or video segments referred to as clips which are placed along the track at specific starting point and lasting for a specific amount of time. | -
setOutput([\Shotstack\Client\Model\Output](Output.md)) | The output format, render range and type of media to generate. | Y
setMerge([\Shotstack\Client\Model\MergeField[]](MergeField.md) $mergeField) | An array of key/value pairs that provides an easy way to create templates with placeholders. The placeholders can be used to find and replace keys with values. For example you can search for the placeholder `{{NAME}}` and replace it with the value `Jane`. | -
setCallback(string $callback) | An optional webhook callback URL used to receive status notifications when a render completes or fails. See [webhooks](https://shotstack.io/docs/guide/architecting-an-application/webhooks/) for  more details. | -
setDisk(string $disk) | The disk type to use for storing footage and assets for each render. See [disk types](https://shotstack.io/docs/guide/architecting-an-application/disk-types/) for more details. [default to `local`] <ul><li>`local` - optimized for high speed rendering with up to 512MB storage</li><li>`mount` - optimized for larger file sizes and longer videos with 5GB for source footage and 512MB for output render</li></ul> | -

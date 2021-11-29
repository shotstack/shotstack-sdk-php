# ShotstackDestination()

Send rendered assets to the Shotstack hosting and CDN service. This destination is enabled by default.

### Example:

```php
use Shotstack\Client\Model\ShotstackDestination;

$shotstackDestination = new ShotstackDestination();
$shotstackDestination
  ->setProvider('shotstack')
  ->setExclude(false);
```

### Methods:

Method | Description | Required
:--- | :--- | :---: 
setProvider(string $provider) | The destination to send rendered assets to - set to `shotstack` for Shotstack hosting and CDN. [default to `shotstack`] | Y
setExclude(bool $exclude) | Set to `true` to opt-out from the Shotstack hosting and CDN service. All files must be downloaded within 24 hours of rendering. [default to `false`] | -
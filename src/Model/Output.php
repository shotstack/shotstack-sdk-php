<?php
/**
 * Output
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Shotstack\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Shotstack
 *
 * The Shotstack API is a video editing service that allows for the automated creation of videos using JSON. You can configure an edit and POST it to the Shotstack API which will render your video and provide a file location when complete. For more details visit [shotstack.io](https://shotstack.io) or checkout our [getting started](https://shotstack.gitbook.io/docs/guides/getting-started) documentation.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Shotstack\Client\Model;

use \ArrayAccess;
use \Shotstack\Client\ObjectSerializer;

/**
 * Output Class Doc Comment
 *
 * @category Class
 * @description The output format, render range and type of media to generate.
 * @package  Shotstack\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Output implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Output';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'format' => 'string',
        'resolution' => 'string',
        'aspect_ratio' => 'string',
        'fps' => 'int',
        'scale_to' => 'string',
        'range' => '\Shotstack\Client\Model\Range',
        'poster' => '\Shotstack\Client\Model\Poster',
        'thumbnail' => '\Shotstack\Client\Model\Thumbnail'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'format' => null,
        'resolution' => null,
        'aspect_ratio' => null,
        'fps' => null,
        'scale_to' => null,
        'range' => null,
        'poster' => null,
        'thumbnail' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'format' => 'format',
        'resolution' => 'resolution',
        'aspect_ratio' => 'aspectRatio',
        'fps' => 'fps',
        'scale_to' => 'scaleTo',
        'range' => 'range',
        'poster' => 'poster',
        'thumbnail' => 'thumbnail'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'format' => 'setFormat',
        'resolution' => 'setResolution',
        'aspect_ratio' => 'setAspectRatio',
        'fps' => 'setFps',
        'scale_to' => 'setScaleTo',
        'range' => 'setRange',
        'poster' => 'setPoster',
        'thumbnail' => 'setThumbnail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'format' => 'getFormat',
        'resolution' => 'getResolution',
        'aspect_ratio' => 'getAspectRatio',
        'fps' => 'getFps',
        'scale_to' => 'getScaleTo',
        'range' => 'getRange',
        'poster' => 'getPoster',
        'thumbnail' => 'getThumbnail'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const FORMAT_MP4 = 'mp4';
    const FORMAT_GIF = 'gif';
    const FORMAT_MP3 = 'mp3';
    const RESOLUTION_PREVIEW = 'preview';
    const RESOLUTION_MOBILE = 'mobile';
    const RESOLUTION_SD = 'sd';
    const RESOLUTION_HD = 'hd';
    const RESOLUTION__1080 = '1080';
    const ASPECT_RATIO__169 = '16:9';
    const ASPECT_RATIO__916 = '9:16';
    const ASPECT_RATIO__11 = '1:1';
    const ASPECT_RATIO__45 = '4:5';
    const FPS_12 = 12;
    const FPS_15 = 15;
    const FPS_24 = 24;
    const FPS_25 = 25;
    const FPS_30 = 30;
    const SCALE_TO_PREVIEW = 'preview';
    const SCALE_TO_MOBILE = 'mobile';
    const SCALE_TO_SD = 'sd';
    const SCALE_TO_HD = 'hd';
    const SCALE_TO__1080 = '1080';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFormatAllowableValues()
    {
        return [
            self::FORMAT_MP4,
            self::FORMAT_GIF,
            self::FORMAT_MP3,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResolutionAllowableValues()
    {
        return [
            self::RESOLUTION_PREVIEW,
            self::RESOLUTION_MOBILE,
            self::RESOLUTION_SD,
            self::RESOLUTION_HD,
            self::RESOLUTION__1080,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAspectRatioAllowableValues()
    {
        return [
            self::ASPECT_RATIO__169,
            self::ASPECT_RATIO__916,
            self::ASPECT_RATIO__11,
            self::ASPECT_RATIO__45,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFpsAllowableValues()
    {
        return [
            self::FPS_12,
            self::FPS_15,
            self::FPS_24,
            self::FPS_25,
            self::FPS_30,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getScaleToAllowableValues()
    {
        return [
            self::SCALE_TO_PREVIEW,
            self::SCALE_TO_MOBILE,
            self::SCALE_TO_SD,
            self::SCALE_TO_HD,
            self::SCALE_TO__1080,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['format'] = $data['format'] ?? null;
        $this->container['resolution'] = $data['resolution'] ?? null;
        $this->container['aspect_ratio'] = $data['aspect_ratio'] ?? null;
        $this->container['fps'] = $data['fps'] ?? self::FPS_25;
        $this->container['scale_to'] = $data['scale_to'] ?? null;
        $this->container['range'] = $data['range'] ?? null;
        $this->container['poster'] = $data['poster'] ?? null;
        $this->container['thumbnail'] = $data['thumbnail'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['format'] === null) {
            $invalidProperties[] = "'format' can't be null";
        }
        $allowedValues = $this->getFormatAllowableValues();
        if (!is_null($this->container['format']) && !in_array($this->container['format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'format', must be one of '%s'",
                $this->container['format'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['resolution'] === null) {
            $invalidProperties[] = "'resolution' can't be null";
        }
        $allowedValues = $this->getResolutionAllowableValues();
        if (!is_null($this->container['resolution']) && !in_array($this->container['resolution'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'resolution', must be one of '%s'",
                $this->container['resolution'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAspectRatioAllowableValues();
        if (!is_null($this->container['aspect_ratio']) && !in_array($this->container['aspect_ratio'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'aspect_ratio', must be one of '%s'",
                $this->container['aspect_ratio'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFpsAllowableValues();
        if (!is_null($this->container['fps']) && !in_array($this->container['fps'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'fps', must be one of '%s'",
                $this->container['fps'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getScaleToAllowableValues();
        if (!is_null($this->container['scale_to']) && !in_array($this->container['scale_to'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'scale_to', must be one of '%s'",
                $this->container['scale_to'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string $format The output format and type of media file to generate. <ul>   <li>`mp4` - mp4 video file</li>   <li>`gif` - animated gif</li>   <li>`mp3` - mp3 audio file (no video)</li> </ul>
     *
     * @return self
     */
    public function setFormat($format)
    {
        $allowedValues = $this->getFormatAllowableValues();
        if (!in_array($format, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'format', must be one of '%s'",
                    $format,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets resolution
     *
     * @return string
     */
    public function getResolution()
    {
        return $this->container['resolution'];
    }

    /**
     * Sets resolution
     *
     * @param string $resolution The output resolution of the video. <ul>   <li>`preview` - 512px x 288px @ 15fps</li>   <li>`mobile` - 640px x 360px @ 25fps</li>   <li>`sd` - 1024px x 576px @ 25fps</li>   <li>`hd` - 1280px x 720px @ 25fps</li>   <li>`1080` - 1920px x 1080px @ 25fps</li> </ul>
     *
     * @return self
     */
    public function setResolution($resolution)
    {
        $allowedValues = $this->getResolutionAllowableValues();
        if (!in_array($resolution, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'resolution', must be one of '%s'",
                    $resolution,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['resolution'] = $resolution;

        return $this;
    }

    /**
     * Gets aspect_ratio
     *
     * @return string|null
     */
    public function getAspectRatio()
    {
        return $this->container['aspect_ratio'];
    }

    /**
     * Sets aspect_ratio
     *
     * @param string|null $aspect_ratio The aspect ratio (shape) of the video. Useful for social media video. Options are: <ul>   <li>`16:9` - regular landscape/horizontal aspect ratio (default)</li>   <li>`9:16` - vertical/portrait aspect ratio</li>   <li>`1:1` - square aspect ratio</li>   <li>`4:5` - short vertical/portrait aspect ratio</li> </ul>
     *
     * @return self
     */
    public function setAspectRatio($aspect_ratio)
    {
        $allowedValues = $this->getAspectRatioAllowableValues();
        if (!is_null($aspect_ratio) && !in_array($aspect_ratio, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'aspect_ratio', must be one of '%s'",
                    $aspect_ratio,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['aspect_ratio'] = $aspect_ratio;

        return $this;
    }

    /**
     * Gets fps
     *
     * @return int|null
     */
    public function getFps()
    {
        return $this->container['fps'];
    }

    /**
     * Sets fps
     *
     * @param int|null $fps Override the default frames per second. Useful for when the source footage is recorded at 30fps, i.e. on  mobile devices. Lower frame rates can be used to add cinematic quality (24fps) or to create smaller file size/faster render times or animated gifs (12 or 15fps). Default is 25fps. <ul>   <li>`12` - 12fps</li>   <li>`15` - 15fps</li>   <li>`24` - 24fps</li>   <li>`25` - 25fps</li>   <li>`30` - 30fps</li> </ul>
     *
     * @return self
     */
    public function setFps($fps)
    {
        $allowedValues = $this->getFpsAllowableValues();
        if (!is_null($fps) && !in_array($fps, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'fps', must be one of '%s'",
                    $fps,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fps'] = $fps;

        return $this;
    }

    /**
     * Gets scale_to
     *
     * @return string|null
     */
    public function getScaleTo()
    {
        return $this->container['scale_to'];
    }

    /**
     * Sets scale_to
     *
     * @param string|null $scale_to Override the resolution and scale the video to render at a different size. When using scaleTo the video should be edited at the resolution dimensions, i.e. use font sizes that look best at HD, then use scaleTo to output the video at SD and the text will be scaled to the correct size. This is useful if you want to create multiple video sizes. <ul>   <li>`preview` - 512px x 288px @ 15fps</li>   <li>`mobile` - 640px x 360px @ 25fps</li>   <li>`sd` - 1024px x 576px @25fps</li>   <li>`hd` - 1280px x 720px @25fps</li>   <li>`1080` - 1920px x 1080px @25fps</li> </ul>
     *
     * @return self
     */
    public function setScaleTo($scale_to)
    {
        $allowedValues = $this->getScaleToAllowableValues();
        if (!is_null($scale_to) && !in_array($scale_to, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'scale_to', must be one of '%s'",
                    $scale_to,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['scale_to'] = $scale_to;

        return $this;
    }

    /**
     * Gets range
     *
     * @return \Shotstack\Client\Model\Range|null
     */
    public function getRange()
    {
        return $this->container['range'];
    }

    /**
     * Sets range
     *
     * @param \Shotstack\Client\Model\Range|null $range range
     *
     * @return self
     */
    public function setRange($range)
    {
        $this->container['range'] = $range;

        return $this;
    }

    /**
     * Gets poster
     *
     * @return \Shotstack\Client\Model\Poster|null
     */
    public function getPoster()
    {
        return $this->container['poster'];
    }

    /**
     * Sets poster
     *
     * @param \Shotstack\Client\Model\Poster|null $poster poster
     *
     * @return self
     */
    public function setPoster($poster)
    {
        $this->container['poster'] = $poster;

        return $this;
    }

    /**
     * Gets thumbnail
     *
     * @return \Shotstack\Client\Model\Thumbnail|null
     */
    public function getThumbnail()
    {
        return $this->container['thumbnail'];
    }

    /**
     * Sets thumbnail
     *
     * @param \Shotstack\Client\Model\Thumbnail|null $thumbnail thumbnail
     *
     * @return self
     */
    public function setThumbnail($thumbnail)
    {
        $this->container['thumbnail'] = $thumbnail;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



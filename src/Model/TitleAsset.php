<?php
/**
 * TitleAsset
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Shotstack\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Shotstack
 *
 * Shotstack is a video, image and audio editing service that allows for the automated generation of videos, images and audio using JSON and a RESTful API.  You arrange and configure an edit and POST it to the API which will render your media and provide a file  location when complete.  For more details visit [shotstack.io](https://shotstack.io) or checkout our [getting started](https://shotstack.io/docs/guide/) documentation.  There are two main API's, one for editing and generating assets (Edit API) and one for managing hosted assets (Serve API).  The Edit API base URL is: <b>https://api.shotstack.io/{version}</b>  The Serve API base URL is: <b>https://api.shotstack.io/serve/{version}</b>
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
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
 * TitleAsset Class Doc Comment
 *
 * @category Class
 * @description The TitleAsset clip type lets you create video titles from a text string and apply styling and positioning.
 * @package  Shotstack\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TitleAsset implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TitleAsset';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'text' => 'string',
        'style' => 'string',
        'color' => 'string',
        'size' => 'string',
        'background' => 'string',
        'position' => 'string',
        'offset' => '\Shotstack\Client\Model\Offset'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'text' => null,
        'style' => null,
        'color' => null,
        'size' => null,
        'background' => null,
        'position' => null,
        'offset' => null
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
        'type' => 'type',
        'text' => 'text',
        'style' => 'style',
        'color' => 'color',
        'size' => 'size',
        'background' => 'background',
        'position' => 'position',
        'offset' => 'offset'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'text' => 'setText',
        'style' => 'setStyle',
        'color' => 'setColor',
        'size' => 'setSize',
        'background' => 'setBackground',
        'position' => 'setPosition',
        'offset' => 'setOffset'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'text' => 'getText',
        'style' => 'getStyle',
        'color' => 'getColor',
        'size' => 'getSize',
        'background' => 'getBackground',
        'position' => 'getPosition',
        'offset' => 'getOffset'
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

    const STYLE_MINIMAL = 'minimal';
    const STYLE_BLOCKBUSTER = 'blockbuster';
    const STYLE_VOGUE = 'vogue';
    const STYLE_SKETCHY = 'sketchy';
    const STYLE_SKINNY = 'skinny';
    const STYLE_CHUNK = 'chunk';
    const STYLE_CHUNK_LIGHT = 'chunkLight';
    const STYLE_MARKER = 'marker';
    const STYLE_FUTURE = 'future';
    const STYLE_SUBTITLE = 'subtitle';
    const SIZE_XX_SMALL = 'xx-small';
    const SIZE_X_SMALL = 'x-small';
    const SIZE_SMALL = 'small';
    const SIZE_MEDIUM = 'medium';
    const SIZE_LARGE = 'large';
    const SIZE_X_LARGE = 'x-large';
    const SIZE_XX_LARGE = 'xx-large';
    const POSITION_TOP = 'top';
    const POSITION_TOP_RIGHT = 'topRight';
    const POSITION_RIGHT = 'right';
    const POSITION_BOTTOM_RIGHT = 'bottomRight';
    const POSITION_BOTTOM = 'bottom';
    const POSITION_BOTTOM_LEFT = 'bottomLeft';
    const POSITION_LEFT = 'left';
    const POSITION_TOP_LEFT = 'topLeft';
    const POSITION_CENTER = 'center';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStyleAllowableValues()
    {
        return [
            self::STYLE_MINIMAL,
            self::STYLE_BLOCKBUSTER,
            self::STYLE_VOGUE,
            self::STYLE_SKETCHY,
            self::STYLE_SKINNY,
            self::STYLE_CHUNK,
            self::STYLE_CHUNK_LIGHT,
            self::STYLE_MARKER,
            self::STYLE_FUTURE,
            self::STYLE_SUBTITLE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSizeAllowableValues()
    {
        return [
            self::SIZE_XX_SMALL,
            self::SIZE_X_SMALL,
            self::SIZE_SMALL,
            self::SIZE_MEDIUM,
            self::SIZE_LARGE,
            self::SIZE_X_LARGE,
            self::SIZE_XX_LARGE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPositionAllowableValues()
    {
        return [
            self::POSITION_TOP,
            self::POSITION_TOP_RIGHT,
            self::POSITION_RIGHT,
            self::POSITION_BOTTOM_RIGHT,
            self::POSITION_BOTTOM,
            self::POSITION_BOTTOM_LEFT,
            self::POSITION_LEFT,
            self::POSITION_TOP_LEFT,
            self::POSITION_CENTER,
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
        $this->container['type'] = $data['type'] ?? 'title';
        $this->container['text'] = $data['text'] ?? null;
        $this->container['style'] = $data['style'] ?? null;
        $this->container['color'] = $data['color'] ?? null;
        $this->container['size'] = $data['size'] ?? null;
        $this->container['background'] = $data['background'] ?? null;
        $this->container['position'] = $data['position'] ?? null;
        $this->container['offset'] = $data['offset'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['text'] === null) {
            $invalidProperties[] = "'text' can't be null";
        }
        $allowedValues = $this->getStyleAllowableValues();
        if (!is_null($this->container['style']) && !in_array($this->container['style'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'style', must be one of '%s'",
                $this->container['style'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSizeAllowableValues();
        if (!is_null($this->container['size']) && !in_array($this->container['size'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'size', must be one of '%s'",
                $this->container['size'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPositionAllowableValues();
        if (!is_null($this->container['position']) && !in_array($this->container['position'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'position', must be one of '%s'",
                $this->container['position'],
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The type of asset - set to `title` for titles.
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text The title text string - i.e. \"My Title\".
     *
     * @return self
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets style
     *
     * @return string|null
     */
    public function getStyle()
    {
        return $this->container['style'];
    }

    /**
     * Sets style
     *
     * @param string|null $style Uses a preset to apply font properties and styling to the title. <ul>   <li>`minimal`</li>   <li>`blockbuster`</li>   <li>`vogue`</li>   <li>`sketchy`</li>   <li>`skinny`</li>   <li>`chunk`</li>   <li>`chunkLight`</li>   <li>`marker`</li>   <li>`future`</li>   <li>`subtitle`</li> </ul>
     *
     * @return self
     */
    public function setStyle($style)
    {
        $allowedValues = $this->getStyleAllowableValues();
        if (!is_null($style) && !in_array($style, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'style', must be one of '%s'",
                    $style,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['style'] = $style;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string|null
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string|null $color Set the text color using hexadecimal color notation. Transparency is supported by setting the first two characters of the hex string (opposite to HTML),  i.e. #80ffffff will be white with  50% transparency.
     *
     * @return self
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets size
     *
     * @return string|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param string|null $size Set the relative size of the text using predefined sizes from xx-small to xx-large. <ul>   <li>`xx-small`</li>   <li>`x-small`</li>   <li>`small`</li>   <li>`medium`</li>   <li>`large`</li>   <li>`x-large`</li>   <li>`xx-large`</li> </ul>
     *
     * @return self
     */
    public function setSize($size)
    {
        $allowedValues = $this->getSizeAllowableValues();
        if (!is_null($size) && !in_array($size, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'size', must be one of '%s'",
                    $size,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets background
     *
     * @return string|null
     */
    public function getBackground()
    {
        return $this->container['background'];
    }

    /**
     * Sets background
     *
     * @param string|null $background Apply a background color behind the text. Set the text color using hexadecimal color notation. Transparency is supported by setting the first two characters of the hex string (opposite to HTML),  i.e. #80ffffff will be white with 50% transparency. Omit to use transparent background.
     *
     * @return self
     */
    public function setBackground($background)
    {
        $this->container['background'] = $background;

        return $this;
    }

    /**
     * Gets position
     *
     * @return string|null
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param string|null $position Place the title in one of nine predefined positions of the viewport. <ul>   <li>`top` - top (center)</li>   <li>`topRight` - top right</li>   <li>`right` - right (center)</li>   <li>`bottomRight` - bottom right</li>   <li>`bottom` - bottom (center)</li>   <li>`bottomLeft` - bottom left</li>   <li>`left` - left (center)</li>   <li>`topLeft` - top left</li>   <li>`center` - center</li> </ul>
     *
     * @return self
     */
    public function setPosition($position)
    {
        $allowedValues = $this->getPositionAllowableValues();
        if (!is_null($position) && !in_array($position, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'position', must be one of '%s'",
                    $position,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets offset
     *
     * @return \Shotstack\Client\Model\Offset|null
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     *
     * @param \Shotstack\Client\Model\Offset|null $offset offset
     *
     * @return self
     */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;

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



<?php
/**
 * Transition
 *
 * PHP version 5
 *
 * @category Class
 * @package  Shotstack\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Shotstack
 *
 * The Shotstack API is a video editing service that allows for the automated creation of videos using JSON. You can configure an edit and POST it to the Shotstack API which will render your video and provide a file location when complete. For more details check https://shotstack.io
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.1
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
 * Transition Class Doc Comment
 *
 * @category Class
 * @description In and out transitions for a clip - i.e. fade in and fade out
 * @package  Shotstack\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Transition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Transition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'in' => 'string',
        'out' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'in' => null,
        'out' => null
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
        'in' => 'in',
        'out' => 'out'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'in' => 'setIn',
        'out' => 'setOut'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'in' => 'getIn',
        'out' => 'getOut'
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

    const IN_FADE = 'fade';
    const IN_REVEAL = 'reveal';
    const IN_WIPE_LEFT = 'wipeLeft';
    const IN_WIPE_RIGHT = 'wipeRight';
    const IN_SLIDE_LEFT = 'slideLeft';
    const IN_SLIDE_RIGHT = 'slideRight';
    const IN_SLIDE_UP = 'slideUp';
    const IN_SLIDE_DOWN = 'slideDown';
    const IN_CAROUSEL_LEFT = 'carouselLeft';
    const IN_CAROUSEL_RIGHT = 'carouselRight';
    const IN_CAROUSEL_UP = 'carouselUp';
    const IN_CAROUSEL_DOWN = 'carouselDown';
    const IN_ZOOM = 'zoom';
    const OUT_FADE = 'fade';
    const OUT_REVEAL = 'reveal';
    const OUT_WIPE_LEFT = 'wipeLeft';
    const OUT_WIPE_RIGHT = 'wipeRight';
    const OUT_SLIDE_LEFT = 'slideLeft';
    const OUT_SLIDE_RIGHT = 'slideRight';
    const OUT_SLIDE_UP = 'slideUp';
    const OUT_SLIDE_DOWN = 'slideDown';
    const OUT_CAROUSEL_LEFT = 'carouselLeft';
    const OUT_CAROUSEL_RIGHT = 'carouselRight';
    const OUT_CAROUSEL_UP = 'carouselUp';
    const OUT_CAROUSEL_DOWN = 'carouselDown';
    const OUT_ZOOM = 'zoom';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInAllowableValues()
    {
        return [
            self::IN_FADE,
            self::IN_REVEAL,
            self::IN_WIPE_LEFT,
            self::IN_WIPE_RIGHT,
            self::IN_SLIDE_LEFT,
            self::IN_SLIDE_RIGHT,
            self::IN_SLIDE_UP,
            self::IN_SLIDE_DOWN,
            self::IN_CAROUSEL_LEFT,
            self::IN_CAROUSEL_RIGHT,
            self::IN_CAROUSEL_UP,
            self::IN_CAROUSEL_DOWN,
            self::IN_ZOOM,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOutAllowableValues()
    {
        return [
            self::OUT_FADE,
            self::OUT_REVEAL,
            self::OUT_WIPE_LEFT,
            self::OUT_WIPE_RIGHT,
            self::OUT_SLIDE_LEFT,
            self::OUT_SLIDE_RIGHT,
            self::OUT_SLIDE_UP,
            self::OUT_SLIDE_DOWN,
            self::OUT_CAROUSEL_LEFT,
            self::OUT_CAROUSEL_RIGHT,
            self::OUT_CAROUSEL_UP,
            self::OUT_CAROUSEL_DOWN,
            self::OUT_ZOOM,
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
        $this->container['in'] = isset($data['in']) ? $data['in'] : null;
        $this->container['out'] = isset($data['out']) ? $data['out'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getInAllowableValues();
        if (!is_null($this->container['in']) && !in_array($this->container['in'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'in', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getOutAllowableValues();
        if (!is_null($this->container['out']) && !in_array($this->container['out'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'out', must be one of '%s'",
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
     * Gets in
     *
     * @return string|null
     */
    public function getIn()
    {
        return $this->container['in'];
    }

    /**
     * Sets in
     *
     * @param string|null $in The transition in. Available transitions are:   <ul>     <li>`fade` - fade in</li>     <li>`reveal` - reveal from left to right</li>     <li>`wipeLeft` - fade across screen to the left</li>     <li>`wipeRight` - fade across screen to the right</li>     <li>`slideLeft` - move slightly left and fade in</li>     <li>`slideRight` - move slightly right and fade in</li>     <li>`slideUp` - move slightly up and fade in</li>     <li>`slideDown` - move slightly down and fade in</li>     <li>`carouselLeft` - slide in from right to left</li>     <li>`carouselRight` - slide in from left to right</li>     <li>`carouselUp` - slide in from bottom to top</li>     <li>`carouselDown` - slide in from top  to bottom</li>     <li>`zoom` - fast zoom in</li>   </ul>
     *
     * @return $this
     */
    public function setIn($in)
    {
        $allowedValues = $this->getInAllowableValues();
        if (!is_null($in) && !in_array($in, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'in', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['in'] = $in;

        return $this;
    }

    /**
     * Gets out
     *
     * @return string|null
     */
    public function getOut()
    {
        return $this->container['out'];
    }

    /**
     * Sets out
     *
     * @param string|null $out The transition out. Available transitions are:   <ul>     <li>`fade` - fade out</li>     <li>`reveal` - reveal from right to left</li>     <li>`wipeLeft` - fade across screen to the left</li>     <li>`wipeRight` - fade across screen to the right</li>     <li>`slideLeft` - move slightly left and fade out</li>     <li>`slideRight` - move slightly right and fade out</li>     <li>`slideUp` - move slightly up and fade out</li>     <li>`slideDown` - move slightly down and fade out</li>     <li>`carouselLeft` - slide out from right to left</li>     <li>`carouselRight` - slide out from left to right</li>     <li>`carouselUp` - slide out from bottom to top</li>     <li>`carouselDown` - slide out from top  to bottom</li>     <li>`zoom` - fast zoom out</li>   </ul>
     *
     * @return $this
     */
    public function setOut($out)
    {
        $allowedValues = $this->getOutAllowableValues();
        if (!is_null($out) && !in_array($out, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'out', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['out'] = $out;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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



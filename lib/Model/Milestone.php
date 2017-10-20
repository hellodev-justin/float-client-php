<?php
/**
 * Milestone
 *
 * PHP version 5
 *
 * @category Class
 * @package  Float\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * API Reference
 *
 * This API allows 3rd party integration of your Float data.
 *
 * OpenAPI spec version: 3.0.0-beta
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Float\Client\Model;

use \ArrayAccess;

/**
 * Milestone Class Doc Comment
 *
 * @category    Class
 * @package     Float\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Milestone implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Milestone';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'milestoneId' => 'int',
        'name' => 'string',
        'projectId' => 'int',
        'date' => 'string',
        'endDate' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'milestoneId' => null,
        'name' => null,
        'projectId' => null,
        'date' => null,
        'endDate' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'milestoneId' => 'milestone_id',
        'name' => 'name',
        'projectId' => 'project_id',
        'date' => 'date',
        'endDate' => 'end_date'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'milestoneId' => 'setMilestoneId',
        'name' => 'setName',
        'projectId' => 'setProjectId',
        'date' => 'setDate',
        'endDate' => 'setEndDate'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'milestoneId' => 'getMilestoneId',
        'name' => 'getName',
        'projectId' => 'getProjectId',
        'date' => 'getDate',
        'endDate' => 'getEndDate'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['milestoneId'] = isset($data['milestoneId']) ? $data['milestoneId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ((strlen($this->container['name']) > 200)) {
            $invalid_properties[] = "invalid value for 'name', the character length must be smaller than or equal to 200.";
        }

        if ($this->container['projectId'] === null) {
            $invalid_properties[] = "'projectId' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalid_properties[] = "'date' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['name'] === null) {
            return false;
        }
        if (strlen($this->container['name']) > 200) {
            return false;
        }
        if ($this->container['projectId'] === null) {
            return false;
        }
        if ($this->container['date'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets milestoneId
     * @return int
     */
    public function getMilestoneId()
    {
        return $this->container['milestoneId'];
    }

    /**
     * Sets milestoneId
     * @param int $milestoneId The ID of this milestone. Read-only
     * @return $this
     */
    public function setMilestoneId($milestoneId)
    {
        $this->container['milestoneId'] = $milestoneId;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name The name of the milestone
     * @return $this
     */
    public function setName($name)
    {
        if ((strlen($name) > 200)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Milestone., must be smaller than or equal to 200.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets projectId
     * @return int
     */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
     * Sets projectId
     * @param int $projectId The project that this milestone belongs to
     * @return $this
     */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;

        return $this;
    }

    /**
     * Gets date
     * @return string
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     * @param string $date Start date of the milestone
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets endDate
     * @return string
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     * @param string $endDate End date of the milestone if more than 1 day
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Float\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Float\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


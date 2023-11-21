<?php
/**
 * CvssV31
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Msn\Apis\FastCVE
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * FastCVE
 *
 * fast, rich and API-based search for CVE and more (CPE, CWE, CAPEC)
 *
 * The version of the OpenAPI document: 0.1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Msn\Apis\FastCVE\Model;

use \ArrayAccess;
use \Msn\Apis\FastCVE\ObjectSerializer;

/**
 * CvssV31 Class Doc Comment
 *
 * @category Class
 * @package  Msn\Apis\FastCVE
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CvssV31 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CvssV31';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'source' => 'string',
        'type' => '\Msn\Apis\FastCVE\Model\CommonModelsCveType',
        'cvss_data' => '\Msn\Apis\FastCVE\Model\CommonModelsCvssV31CveCvssDataModel',
        'exploitability_score' => 'float',
        'impact_score' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'source' => null,
        'type' => null,
        'cvss_data' => null,
        'exploitability_score' => null,
        'impact_score' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'source' => false,
		'type' => false,
		'cvss_data' => false,
		'exploitability_score' => false,
		'impact_score' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'source' => 'source',
        'type' => 'type',
        'cvss_data' => 'cvssData',
        'exploitability_score' => 'exploitabilityScore',
        'impact_score' => 'impactScore'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'source' => 'setSource',
        'type' => 'setType',
        'cvss_data' => 'setCvssData',
        'exploitability_score' => 'setExploitabilityScore',
        'impact_score' => 'setImpactScore'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'source' => 'getSource',
        'type' => 'getType',
        'cvss_data' => 'getCvssData',
        'exploitability_score' => 'getExploitabilityScore',
        'impact_score' => 'getImpactScore'
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
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('cvss_data', $data ?? [], null);
        $this->setIfExists('exploitability_score', $data ?? [], null);
        $this->setIfExists('impact_score', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['cvss_data'] === null) {
            $invalidProperties[] = "'cvss_data' can't be null";
        }
        if (!is_null($this->container['exploitability_score']) && ($this->container['exploitability_score'] > 10.0)) {
            $invalidProperties[] = "invalid value for 'exploitability_score', must be smaller than or equal to 10.0.";
        }

        if (!is_null($this->container['exploitability_score']) && ($this->container['exploitability_score'] < 0.0)) {
            $invalidProperties[] = "invalid value for 'exploitability_score', must be bigger than or equal to 0.0.";
        }

        if (!is_null($this->container['impact_score']) && ($this->container['impact_score'] > 10.0)) {
            $invalidProperties[] = "invalid value for 'impact_score', must be smaller than or equal to 10.0.";
        }

        if (!is_null($this->container['impact_score']) && ($this->container['impact_score'] < 0.0)) {
            $invalidProperties[] = "invalid value for 'impact_score', must be bigger than or equal to 0.0.";
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
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source source
     *
     * @return self
     */
    public function setSource($source)
    {
        if (is_null($source)) {
            throw new \InvalidArgumentException('non-nullable source cannot be null');
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Msn\Apis\FastCVE\Model\CommonModelsCveType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Msn\Apis\FastCVE\Model\CommonModelsCveType $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets cvss_data
     *
     * @return \Msn\Apis\FastCVE\Model\CommonModelsCvssV31CveCvssDataModel
     */
    public function getCvssData()
    {
        return $this->container['cvss_data'];
    }

    /**
     * Sets cvss_data
     *
     * @param \Msn\Apis\FastCVE\Model\CommonModelsCvssV31CveCvssDataModel $cvss_data cvss_data
     *
     * @return self
     */
    public function setCvssData($cvss_data)
    {
        if (is_null($cvss_data)) {
            throw new \InvalidArgumentException('non-nullable cvss_data cannot be null');
        }
        $this->container['cvss_data'] = $cvss_data;

        return $this;
    }

    /**
     * Gets exploitability_score
     *
     * @return float|null
     */
    public function getExploitabilityScore()
    {
        return $this->container['exploitability_score'];
    }

    /**
     * Sets exploitability_score
     *
     * @param float|null $exploitability_score CVSS subscore.
     *
     * @return self
     */
    public function setExploitabilityScore($exploitability_score)
    {
        if (is_null($exploitability_score)) {
            throw new \InvalidArgumentException('non-nullable exploitability_score cannot be null');
        }

        if (($exploitability_score > 10.0)) {
            throw new \InvalidArgumentException('invalid value for $exploitability_score when calling CvssV31., must be smaller than or equal to 10.0.');
        }
        if (($exploitability_score < 0.0)) {
            throw new \InvalidArgumentException('invalid value for $exploitability_score when calling CvssV31., must be bigger than or equal to 0.0.');
        }

        $this->container['exploitability_score'] = $exploitability_score;

        return $this;
    }

    /**
     * Gets impact_score
     *
     * @return float|null
     */
    public function getImpactScore()
    {
        return $this->container['impact_score'];
    }

    /**
     * Sets impact_score
     *
     * @param float|null $impact_score CVSS subscore.
     *
     * @return self
     */
    public function setImpactScore($impact_score)
    {
        if (is_null($impact_score)) {
            throw new \InvalidArgumentException('non-nullable impact_score cannot be null');
        }

        if (($impact_score > 10.0)) {
            throw new \InvalidArgumentException('invalid value for $impact_score when calling CvssV31., must be smaller than or equal to 10.0.');
        }
        if (($impact_score < 0.0)) {
            throw new \InvalidArgumentException('invalid value for $impact_score when calling CvssV31., must be bigger than or equal to 0.0.');
        }

        $this->container['impact_score'] = $impact_score;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


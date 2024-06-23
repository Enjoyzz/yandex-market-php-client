<?php
/**
 * CategoryParameterDTO
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Партнерский API Маркета
 *
 * API Яндекс Маркета помогает продавцам автоматизировать и упростить работу с маркетплейсом.  В числе возможностей интеграции:  * управление каталогом товаров и витриной,  * обработка заказов,  * изменение настроек магазина,  * получение отчетов.
 *
 * The version of the OpenAPI document: LATEST
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * CategoryParameterDTO Class Doc Comment
 *
 * @category Class
 * @description Характеристика товара.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CategoryParameterDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CategoryParameterDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'type' => '\OpenAPI\Client\Model\ParameterType',
        'unit' => '\OpenAPI\Client\Model\CategoryParameterUnitDTO',
        'description' => 'string',
        'recommendation_types' => '\OpenAPI\Client\Model\OfferCardRecommendationType[]',
        'required' => 'bool',
        'filtering' => 'bool',
        'distinctive' => 'bool',
        'multivalue' => 'bool',
        'allow_custom_values' => 'bool',
        'values' => '\OpenAPI\Client\Model\ParameterValueOptionDTO[]',
        'constraints' => '\OpenAPI\Client\Model\ParameterValueConstraintsDTO',
        'value_restrictions' => '\OpenAPI\Client\Model\ValueRestrictionDTO[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'name' => null,
        'type' => null,
        'unit' => null,
        'description' => null,
        'recommendation_types' => null,
        'required' => null,
        'filtering' => null,
        'distinctive' => null,
        'multivalue' => null,
        'allow_custom_values' => null,
        'values' => null,
        'constraints' => null,
        'value_restrictions' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'name' => false,
        'type' => false,
        'unit' => false,
        'description' => false,
        'recommendation_types' => false,
        'required' => false,
        'filtering' => false,
        'distinctive' => false,
        'multivalue' => false,
        'allow_custom_values' => false,
        'values' => false,
        'constraints' => false,
        'value_restrictions' => false
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
        'id' => 'id',
        'name' => 'name',
        'type' => 'type',
        'unit' => 'unit',
        'description' => 'description',
        'recommendation_types' => 'recommendationTypes',
        'required' => 'required',
        'filtering' => 'filtering',
        'distinctive' => 'distinctive',
        'multivalue' => 'multivalue',
        'allow_custom_values' => 'allowCustomValues',
        'values' => 'values',
        'constraints' => 'constraints',
        'value_restrictions' => 'valueRestrictions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'type' => 'setType',
        'unit' => 'setUnit',
        'description' => 'setDescription',
        'recommendation_types' => 'setRecommendationTypes',
        'required' => 'setRequired',
        'filtering' => 'setFiltering',
        'distinctive' => 'setDistinctive',
        'multivalue' => 'setMultivalue',
        'allow_custom_values' => 'setAllowCustomValues',
        'values' => 'setValues',
        'constraints' => 'setConstraints',
        'value_restrictions' => 'setValueRestrictions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'type' => 'getType',
        'unit' => 'getUnit',
        'description' => 'getDescription',
        'recommendation_types' => 'getRecommendationTypes',
        'required' => 'getRequired',
        'filtering' => 'getFiltering',
        'distinctive' => 'getDistinctive',
        'multivalue' => 'getMultivalue',
        'allow_custom_values' => 'getAllowCustomValues',
        'values' => 'getValues',
        'constraints' => 'getConstraints',
        'value_restrictions' => 'getValueRestrictions'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('unit', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('recommendation_types', $data ?? [], null);
        $this->setIfExists('required', $data ?? [], null);
        $this->setIfExists('filtering', $data ?? [], null);
        $this->setIfExists('distinctive', $data ?? [], null);
        $this->setIfExists('multivalue', $data ?? [], null);
        $this->setIfExists('allow_custom_values', $data ?? [], null);
        $this->setIfExists('values', $data ?? [], null);
        $this->setIfExists('constraints', $data ?? [], null);
        $this->setIfExists('value_restrictions', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['required'] === null) {
            $invalidProperties[] = "'required' can't be null";
        }
        if ($this->container['filtering'] === null) {
            $invalidProperties[] = "'filtering' can't be null";
        }
        if ($this->container['distinctive'] === null) {
            $invalidProperties[] = "'distinctive' can't be null";
        }
        if ($this->container['multivalue'] === null) {
            $invalidProperties[] = "'multivalue' can't be null";
        }
        if ($this->container['allow_custom_values'] === null) {
            $invalidProperties[] = "'allow_custom_values' can't be null";
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Идентификатор характеристики.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Название характеристики.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \OpenAPI\Client\Model\ParameterType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\ParameterType $type type
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
     * Gets unit
     *
     * @return \OpenAPI\Client\Model\CategoryParameterUnitDTO|null
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param \OpenAPI\Client\Model\CategoryParameterUnitDTO|null $unit unit
     *
     * @return self
     */
    public function setUnit($unit)
    {
        if (is_null($unit)) {
            throw new \InvalidArgumentException('non-nullable unit cannot be null');
        }
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Описание характеристики.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets recommendation_types
     *
     * @return \OpenAPI\Client\Model\OfferCardRecommendationType[]|null
     */
    public function getRecommendationTypes()
    {
        return $this->container['recommendation_types'];
    }

    /**
     * Sets recommendation_types
     *
     * @param \OpenAPI\Client\Model\OfferCardRecommendationType[]|null $recommendation_types Перечень возможных рекомендаций по заполнению карточки, к которым относится данная характеристика.
     *
     * @return self
     */
    public function setRecommendationTypes($recommendation_types)
    {
        if (is_null($recommendation_types)) {
            throw new \InvalidArgumentException('non-nullable recommendation_types cannot be null');
        }
        $this->container['recommendation_types'] = $recommendation_types;

        return $this;
    }

    /**
     * Gets required
     *
     * @return bool
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     *
     * @param bool $required Обязательность характеристики.
     *
     * @return self
     */
    public function setRequired($required)
    {
        if (is_null($required)) {
            throw new \InvalidArgumentException('non-nullable required cannot be null');
        }
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets filtering
     *
     * @return bool
     */
    public function getFiltering()
    {
        return $this->container['filtering'];
    }

    /**
     * Sets filtering
     *
     * @param bool $filtering Используется ли характеристика в фильтре.
     *
     * @return self
     */
    public function setFiltering($filtering)
    {
        if (is_null($filtering)) {
            throw new \InvalidArgumentException('non-nullable filtering cannot be null');
        }
        $this->container['filtering'] = $filtering;

        return $this;
    }

    /**
     * Gets distinctive
     *
     * @return bool
     */
    public function getDistinctive()
    {
        return $this->container['distinctive'];
    }

    /**
     * Sets distinctive
     *
     * @param bool $distinctive Является ли характеристика особенностью варианта.
     *
     * @return self
     */
    public function setDistinctive($distinctive)
    {
        if (is_null($distinctive)) {
            throw new \InvalidArgumentException('non-nullable distinctive cannot be null');
        }
        $this->container['distinctive'] = $distinctive;

        return $this;
    }

    /**
     * Gets multivalue
     *
     * @return bool
     */
    public function getMultivalue()
    {
        return $this->container['multivalue'];
    }

    /**
     * Sets multivalue
     *
     * @param bool $multivalue Можно ли передать сразу несколько значений.
     *
     * @return self
     */
    public function setMultivalue($multivalue)
    {
        if (is_null($multivalue)) {
            throw new \InvalidArgumentException('non-nullable multivalue cannot be null');
        }
        $this->container['multivalue'] = $multivalue;

        return $this;
    }

    /**
     * Gets allow_custom_values
     *
     * @return bool
     */
    public function getAllowCustomValues()
    {
        return $this->container['allow_custom_values'];
    }

    /**
     * Sets allow_custom_values
     *
     * @param bool $allow_custom_values Можно ли передавать собственное значение, которого нет в списке вариантов Маркета. Только для характеристик типа `ENUM`.
     *
     * @return self
     */
    public function setAllowCustomValues($allow_custom_values)
    {
        if (is_null($allow_custom_values)) {
            throw new \InvalidArgumentException('non-nullable allow_custom_values cannot be null');
        }
        $this->container['allow_custom_values'] = $allow_custom_values;

        return $this;
    }

    /**
     * Gets values
     *
     * @return \OpenAPI\Client\Model\ParameterValueOptionDTO[]|null
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param \OpenAPI\Client\Model\ParameterValueOptionDTO[]|null $values Список допустимых значений параметра. Только для характеристик типа `ENUM`.
     *
     * @return self
     */
    public function setValues($values)
    {
        if (is_null($values)) {
            throw new \InvalidArgumentException('non-nullable values cannot be null');
        }
        $this->container['values'] = $values;

        return $this;
    }

    /**
     * Gets constraints
     *
     * @return \OpenAPI\Client\Model\ParameterValueConstraintsDTO|null
     */
    public function getConstraints()
    {
        return $this->container['constraints'];
    }

    /**
     * Sets constraints
     *
     * @param \OpenAPI\Client\Model\ParameterValueConstraintsDTO|null $constraints constraints
     *
     * @return self
     */
    public function setConstraints($constraints)
    {
        if (is_null($constraints)) {
            throw new \InvalidArgumentException('non-nullable constraints cannot be null');
        }
        $this->container['constraints'] = $constraints;

        return $this;
    }

    /**
     * Gets value_restrictions
     *
     * @return \OpenAPI\Client\Model\ValueRestrictionDTO[]|null
     */
    public function getValueRestrictions()
    {
        return $this->container['value_restrictions'];
    }

    /**
     * Sets value_restrictions
     *
     * @param \OpenAPI\Client\Model\ValueRestrictionDTO[]|null $value_restrictions Ограничения на значения, накладываемые другими характеристиками. Только для характеристик типа `ENUM`.
     *
     * @return self
     */
    public function setValueRestrictions($value_restrictions)
    {
        if (is_null($value_restrictions)) {
            throw new \InvalidArgumentException('non-nullable value_restrictions cannot be null');
        }
        $this->container['value_restrictions'] = $value_restrictions;

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



<?php
/**
 * ChangeOutletRequest
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
 * OpenAPI Generator version: 7.0.1
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
 * ChangeOutletRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ChangeOutletRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChangeOutletRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'type' => '\OpenAPI\Client\Model\OutletType',
        'coords' => 'string',
        'is_main' => 'bool',
        'shop_outlet_code' => 'string',
        'visibility' => '\OpenAPI\Client\Model\OutletVisibilityType',
        'address' => '\OpenAPI\Client\Model\OutletAddressDTO',
        'phones' => 'string[]',
        'working_schedule' => '\OpenAPI\Client\Model\OutletWorkingScheduleDTO',
        'delivery_rules' => '\OpenAPI\Client\Model\OutletDeliveryRuleDTO[]',
        'emails' => 'string[]',
        'storage_period' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
        'coords' => null,
        'is_main' => null,
        'shop_outlet_code' => null,
        'visibility' => null,
        'address' => null,
        'phones' => null,
        'working_schedule' => null,
        'delivery_rules' => null,
        'emails' => null,
        'storage_period' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
		'type' => false,
		'coords' => false,
		'is_main' => false,
		'shop_outlet_code' => false,
		'visibility' => false,
		'address' => false,
		'phones' => false,
		'working_schedule' => false,
		'delivery_rules' => false,
		'emails' => false,
		'storage_period' => false
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
        'name' => 'name',
        'type' => 'type',
        'coords' => 'coords',
        'is_main' => 'isMain',
        'shop_outlet_code' => 'shopOutletCode',
        'visibility' => 'visibility',
        'address' => 'address',
        'phones' => 'phones',
        'working_schedule' => 'workingSchedule',
        'delivery_rules' => 'deliveryRules',
        'emails' => 'emails',
        'storage_period' => 'storagePeriod'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'type' => 'setType',
        'coords' => 'setCoords',
        'is_main' => 'setIsMain',
        'shop_outlet_code' => 'setShopOutletCode',
        'visibility' => 'setVisibility',
        'address' => 'setAddress',
        'phones' => 'setPhones',
        'working_schedule' => 'setWorkingSchedule',
        'delivery_rules' => 'setDeliveryRules',
        'emails' => 'setEmails',
        'storage_period' => 'setStoragePeriod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'type' => 'getType',
        'coords' => 'getCoords',
        'is_main' => 'getIsMain',
        'shop_outlet_code' => 'getShopOutletCode',
        'visibility' => 'getVisibility',
        'address' => 'getAddress',
        'phones' => 'getPhones',
        'working_schedule' => 'getWorkingSchedule',
        'delivery_rules' => 'getDeliveryRules',
        'emails' => 'getEmails',
        'storage_period' => 'getStoragePeriod'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('coords', $data ?? [], null);
        $this->setIfExists('is_main', $data ?? [], null);
        $this->setIfExists('shop_outlet_code', $data ?? [], null);
        $this->setIfExists('visibility', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('phones', $data ?? [], null);
        $this->setIfExists('working_schedule', $data ?? [], null);
        $this->setIfExists('delivery_rules', $data ?? [], null);
        $this->setIfExists('emails', $data ?? [], null);
        $this->setIfExists('storage_period', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['phones'] === null) {
            $invalidProperties[] = "'phones' can't be null";
        }
        if ((count($this->container['phones']) < 1)) {
            $invalidProperties[] = "invalid value for 'phones', number of items must be greater than or equal to 1.";
        }

        if ($this->container['working_schedule'] === null) {
            $invalidProperties[] = "'working_schedule' can't be null";
        }
        if (!is_null($this->container['emails']) && (count($this->container['emails']) > 1)) {
            $invalidProperties[] = "invalid value for 'emails', number of items must be less than or equal to 1.";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Название точки продаж. Обязательный параметр.
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
     * @return \OpenAPI\Client\Model\OutletType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\OutletType $type type
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
     * Gets coords
     *
     * @return string|null
     */
    public function getCoords()
    {
        return $this->container['coords'];
    }

    /**
     * Sets coords
     *
     * @param string|null $coords Координаты точки продаж.  Формат: долгота, широта. Разделители: запятая и / или пробел. Например, `20.4522144, 54.7104264`.  Если параметр не передан, координаты будут определены по значениям параметров, вложенных в `address`.
     *
     * @return self
     */
    public function setCoords($coords)
    {
        if (is_null($coords)) {
            throw new \InvalidArgumentException('non-nullable coords cannot be null');
        }
        $this->container['coords'] = $coords;

        return $this;
    }

    /**
     * Gets is_main
     *
     * @return bool|null
     */
    public function getIsMain()
    {
        return $this->container['is_main'];
    }

    /**
     * Sets is_main
     *
     * @param bool|null $is_main Признак основной точки продаж. Возможные значения: * `false` — неосновная точка продаж. * `true` — основная точка продаж.
     *
     * @return self
     */
    public function setIsMain($is_main)
    {
        if (is_null($is_main)) {
            throw new \InvalidArgumentException('non-nullable is_main cannot be null');
        }
        $this->container['is_main'] = $is_main;

        return $this;
    }

    /**
     * Gets shop_outlet_code
     *
     * @return string|null
     */
    public function getShopOutletCode()
    {
        return $this->container['shop_outlet_code'];
    }

    /**
     * Sets shop_outlet_code
     *
     * @param string|null $shop_outlet_code Идентификатор точки продаж, присвоенный магазином.
     *
     * @return self
     */
    public function setShopOutletCode($shop_outlet_code)
    {
        if (is_null($shop_outlet_code)) {
            throw new \InvalidArgumentException('non-nullable shop_outlet_code cannot be null');
        }
        $this->container['shop_outlet_code'] = $shop_outlet_code;

        return $this;
    }

    /**
     * Gets visibility
     *
     * @return \OpenAPI\Client\Model\OutletVisibilityType|null
     */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
     * Sets visibility
     *
     * @param \OpenAPI\Client\Model\OutletVisibilityType|null $visibility visibility
     *
     * @return self
     */
    public function setVisibility($visibility)
    {
        if (is_null($visibility)) {
            throw new \InvalidArgumentException('non-nullable visibility cannot be null');
        }
        $this->container['visibility'] = $visibility;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \OpenAPI\Client\Model\OutletAddressDTO
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \OpenAPI\Client\Model\OutletAddressDTO $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets phones
     *
     * @return string[]
     */
    public function getPhones()
    {
        return $this->container['phones'];
    }

    /**
     * Sets phones
     *
     * @param string[] $phones Номера телефонов точки продаж. Передавайте в формате: `+7 (999) 999-99-99`. Обязательный параметр.
     *
     * @return self
     */
    public function setPhones($phones)
    {
        if (is_null($phones)) {
            throw new \InvalidArgumentException('non-nullable phones cannot be null');
        }


        if ((count($phones) < 1)) {
            throw new \InvalidArgumentException('invalid length for $phones when calling ChangeOutletRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['phones'] = $phones;

        return $this;
    }

    /**
     * Gets working_schedule
     *
     * @return \OpenAPI\Client\Model\OutletWorkingScheduleDTO
     */
    public function getWorkingSchedule()
    {
        return $this->container['working_schedule'];
    }

    /**
     * Sets working_schedule
     *
     * @param \OpenAPI\Client\Model\OutletWorkingScheduleDTO $working_schedule working_schedule
     *
     * @return self
     */
    public function setWorkingSchedule($working_schedule)
    {
        if (is_null($working_schedule)) {
            throw new \InvalidArgumentException('non-nullable working_schedule cannot be null');
        }
        $this->container['working_schedule'] = $working_schedule;

        return $this;
    }

    /**
     * Gets delivery_rules
     *
     * @return \OpenAPI\Client\Model\OutletDeliveryRuleDTO[]|null
     */
    public function getDeliveryRules()
    {
        return $this->container['delivery_rules'];
    }

    /**
     * Sets delivery_rules
     *
     * @param \OpenAPI\Client\Model\OutletDeliveryRuleDTO[]|null $delivery_rules Информация об условиях доставки для данной точки продаж. Обязательный параметр, если параметр `type=DEPOT` или `type=MIXED`.
     *
     * @return self
     */
    public function setDeliveryRules($delivery_rules)
    {
        if (is_null($delivery_rules)) {
            throw new \InvalidArgumentException('non-nullable delivery_rules cannot be null');
        }
        $this->container['delivery_rules'] = $delivery_rules;

        return $this;
    }

    /**
     * Gets emails
     *
     * @return string[]|null
     */
    public function getEmails()
    {
        return $this->container['emails'];
    }

    /**
     * Sets emails
     *
     * @param string[]|null $emails Адрес электронной почты точки продаж. Может содержать только один параметр `email`.
     *
     * @return self
     */
    public function setEmails($emails)
    {
        if (is_null($emails)) {
            throw new \InvalidArgumentException('non-nullable emails cannot be null');
        }

        if ((count($emails) > 1)) {
            throw new \InvalidArgumentException('invalid value for $emails when calling ChangeOutletRequest., number of items must be less than or equal to 1.');
        }
        $this->container['emails'] = $emails;

        return $this;
    }

    /**
     * Gets storage_period
     *
     * @return int|null
     */
    public function getStoragePeriod()
    {
        return $this->container['storage_period'];
    }

    /**
     * Sets storage_period
     *
     * @param int|null $storage_period Срок хранения заказа в собственном пункте выдачи заказов. Считается в днях.
     *
     * @return self
     */
    public function setStoragePeriod($storage_period)
    {
        if (is_null($storage_period)) {
            throw new \InvalidArgumentException('non-nullable storage_period cannot be null');
        }
        $this->container['storage_period'] = $storage_period;

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



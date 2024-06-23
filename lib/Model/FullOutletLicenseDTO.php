<?php
/**
 * FullOutletLicenseDTO
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
 * FullOutletLicenseDTO Class Doc Comment
 *
 * @category Class
 * @description Информация о лицензии.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FullOutletLicenseDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FullOutletLicenseDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'outlet_id' => 'int',
        'license_type' => '\OpenAPI\Client\Model\LicenseType',
        'number' => 'string',
        'date_of_issue' => '\DateTime',
        'date_of_expiry' => '\DateTime',
        'check_status' => '\OpenAPI\Client\Model\LicenseCheckStatusType',
        'check_comment' => 'string'
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
        'outlet_id' => 'int64',
        'license_type' => null,
        'number' => null,
        'date_of_issue' => 'date-time',
        'date_of_expiry' => 'date-time',
        'check_status' => null,
        'check_comment' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'outlet_id' => false,
        'license_type' => false,
        'number' => false,
        'date_of_issue' => false,
        'date_of_expiry' => false,
        'check_status' => false,
        'check_comment' => false
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
        'outlet_id' => 'outletId',
        'license_type' => 'licenseType',
        'number' => 'number',
        'date_of_issue' => 'dateOfIssue',
        'date_of_expiry' => 'dateOfExpiry',
        'check_status' => 'checkStatus',
        'check_comment' => 'checkComment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'outlet_id' => 'setOutletId',
        'license_type' => 'setLicenseType',
        'number' => 'setNumber',
        'date_of_issue' => 'setDateOfIssue',
        'date_of_expiry' => 'setDateOfExpiry',
        'check_status' => 'setCheckStatus',
        'check_comment' => 'setCheckComment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'outlet_id' => 'getOutletId',
        'license_type' => 'getLicenseType',
        'number' => 'getNumber',
        'date_of_issue' => 'getDateOfIssue',
        'date_of_expiry' => 'getDateOfExpiry',
        'check_status' => 'getCheckStatus',
        'check_comment' => 'getCheckComment'
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
        $this->setIfExists('outlet_id', $data ?? [], null);
        $this->setIfExists('license_type', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('date_of_issue', $data ?? [], null);
        $this->setIfExists('date_of_expiry', $data ?? [], null);
        $this->setIfExists('check_status', $data ?? [], null);
        $this->setIfExists('check_comment', $data ?? [], null);
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
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Идентификатор лицензии.  Параметр указывается, только если нужно изменить информацию о существующей лицензии. Ее идентификатор можно узнать с помощью запроса [GET campaigns/{campaignId}/outlets/licenses](../../reference/outlets/getOutletLicenses.md). При передаче информации о новой лицензии указывать идентификатор не нужно.  Идентификатор лицензии присваивается Маркетом. Не путайте его с номером, указанным на лицензии: он передается в параметре `number`.
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
     * Gets outlet_id
     *
     * @return int|null
     */
    public function getOutletId()
    {
        return $this->container['outlet_id'];
    }

    /**
     * Sets outlet_id
     *
     * @param int|null $outlet_id Идентификатор точки продаж, для которой действительна лицензия.
     *
     * @return self
     */
    public function setOutletId($outlet_id)
    {
        if (is_null($outlet_id)) {
            throw new \InvalidArgumentException('non-nullable outlet_id cannot be null');
        }
        $this->container['outlet_id'] = $outlet_id;

        return $this;
    }

    /**
     * Gets license_type
     *
     * @return \OpenAPI\Client\Model\LicenseType|null
     */
    public function getLicenseType()
    {
        return $this->container['license_type'];
    }

    /**
     * Sets license_type
     *
     * @param \OpenAPI\Client\Model\LicenseType|null $license_type license_type
     *
     * @return self
     */
    public function setLicenseType($license_type)
    {
        if (is_null($license_type)) {
            throw new \InvalidArgumentException('non-nullable license_type cannot be null');
        }
        $this->container['license_type'] = $license_type;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string|null $number Номер лицензии.
     *
     * @return self
     */
    public function setNumber($number)
    {
        if (is_null($number)) {
            throw new \InvalidArgumentException('non-nullable number cannot be null');
        }
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets date_of_issue
     *
     * @return \DateTime|null
     */
    public function getDateOfIssue()
    {
        return $this->container['date_of_issue'];
    }

    /**
     * Sets date_of_issue
     *
     * @param \DateTime|null $date_of_issue Дата выдачи лицензии.  Формат даты: ISO 8601 со смещением относительно UTC. Нужно передать дату, указанную на лицензии, время `00:00:00` и часовой пояс, соответствующий региону точки продаж. Например, если лицензия для точки продаж в Москве выдана 13 ноября 2017 года, то параметр должен иметь значение `2017-11-13T00:00:00+03:00`.  Обязательный параметр.  Не может быть позже даты окончания срока действия, указанной в параметре `dateOfExpiry`.
     *
     * @return self
     */
    public function setDateOfIssue($date_of_issue)
    {
        if (is_null($date_of_issue)) {
            throw new \InvalidArgumentException('non-nullable date_of_issue cannot be null');
        }
        $this->container['date_of_issue'] = $date_of_issue;

        return $this;
    }

    /**
     * Gets date_of_expiry
     *
     * @return \DateTime|null
     */
    public function getDateOfExpiry()
    {
        return $this->container['date_of_expiry'];
    }

    /**
     * Sets date_of_expiry
     *
     * @param \DateTime|null $date_of_expiry Дата окончания действия лицензии.  Формат даты: ISO 8601 со смещением относительно UTC. Нужно передать дату, указанную на лицензии, время `00:00:00` и часовой пояс, соответствующий региону точки продаж. Например, если действие лицензии для точки продаж в Москве заканчивается 20 ноября 2022 года, то параметр должен иметь значение `2022-11-20T00:00:00+03:00`.  Обязательный параметр.  Не может быть раньше даты выдачи, указанной в параметре `dateOfIssue`.
     *
     * @return self
     */
    public function setDateOfExpiry($date_of_expiry)
    {
        if (is_null($date_of_expiry)) {
            throw new \InvalidArgumentException('non-nullable date_of_expiry cannot be null');
        }
        $this->container['date_of_expiry'] = $date_of_expiry;

        return $this;
    }

    /**
     * Gets check_status
     *
     * @return \OpenAPI\Client\Model\LicenseCheckStatusType|null
     */
    public function getCheckStatus()
    {
        return $this->container['check_status'];
    }

    /**
     * Sets check_status
     *
     * @param \OpenAPI\Client\Model\LicenseCheckStatusType|null $check_status check_status
     *
     * @return self
     */
    public function setCheckStatus($check_status)
    {
        if (is_null($check_status)) {
            throw new \InvalidArgumentException('non-nullable check_status cannot be null');
        }
        $this->container['check_status'] = $check_status;

        return $this;
    }

    /**
     * Gets check_comment
     *
     * @return string|null
     */
    public function getCheckComment()
    {
        return $this->container['check_comment'];
    }

    /**
     * Sets check_comment
     *
     * @param string|null $check_comment Причина, по которой лицензия не прошла проверку.  Параметр возвращается, только если параметр `checkStatus` имеет значение `FAIL`.
     *
     * @return self
     */
    public function setCheckComment($check_comment)
    {
        if (is_null($check_comment)) {
            throw new \InvalidArgumentException('non-nullable check_comment cannot be null');
        }
        $this->container['check_comment'] = $check_comment;

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



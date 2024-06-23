<?php
/**
 * ReturnDecisionDTO
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
 * ReturnDecisionDTO Class Doc Comment
 *
 * @category Class
 * @description Решения по возвратам.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ReturnDecisionDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReturnDecisionDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'return_item_id' => 'int',
        'count' => 'int',
        'comment' => 'string',
        'reason_type' => '\OpenAPI\Client\Model\ReturnDecisionReasonType',
        'subreason_type' => '\OpenAPI\Client\Model\ReturnDecisionSubreasonType',
        'decision_type' => '\OpenAPI\Client\Model\ReturnDecisionType',
        'refund_amount' => 'int',
        'partner_compensation' => 'int',
        'images' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'return_item_id' => 'int64',
        'count' => 'int32',
        'comment' => null,
        'reason_type' => null,
        'subreason_type' => null,
        'decision_type' => null,
        'refund_amount' => 'int64',
        'partner_compensation' => 'int64',
        'images' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'return_item_id' => false,
        'count' => false,
        'comment' => false,
        'reason_type' => false,
        'subreason_type' => false,
        'decision_type' => false,
        'refund_amount' => false,
        'partner_compensation' => false,
        'images' => false
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
        'return_item_id' => 'returnItemId',
        'count' => 'count',
        'comment' => 'comment',
        'reason_type' => 'reasonType',
        'subreason_type' => 'subreasonType',
        'decision_type' => 'decisionType',
        'refund_amount' => 'refundAmount',
        'partner_compensation' => 'partnerCompensation',
        'images' => 'images'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'return_item_id' => 'setReturnItemId',
        'count' => 'setCount',
        'comment' => 'setComment',
        'reason_type' => 'setReasonType',
        'subreason_type' => 'setSubreasonType',
        'decision_type' => 'setDecisionType',
        'refund_amount' => 'setRefundAmount',
        'partner_compensation' => 'setPartnerCompensation',
        'images' => 'setImages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'return_item_id' => 'getReturnItemId',
        'count' => 'getCount',
        'comment' => 'getComment',
        'reason_type' => 'getReasonType',
        'subreason_type' => 'getSubreasonType',
        'decision_type' => 'getDecisionType',
        'refund_amount' => 'getRefundAmount',
        'partner_compensation' => 'getPartnerCompensation',
        'images' => 'getImages'
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
        $this->setIfExists('return_item_id', $data ?? [], null);
        $this->setIfExists('count', $data ?? [], null);
        $this->setIfExists('comment', $data ?? [], null);
        $this->setIfExists('reason_type', $data ?? [], null);
        $this->setIfExists('subreason_type', $data ?? [], null);
        $this->setIfExists('decision_type', $data ?? [], null);
        $this->setIfExists('refund_amount', $data ?? [], null);
        $this->setIfExists('partner_compensation', $data ?? [], null);
        $this->setIfExists('images', $data ?? [], null);
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
     * Gets return_item_id
     *
     * @return int|null
     */
    public function getReturnItemId()
    {
        return $this->container['return_item_id'];
    }

    /**
     * Sets return_item_id
     *
     * @param int|null $return_item_id Идентификатор товара в возврате.
     *
     * @return self
     */
    public function setReturnItemId($return_item_id)
    {
        if (is_null($return_item_id)) {
            throw new \InvalidArgumentException('non-nullable return_item_id cannot be null');
        }
        $this->container['return_item_id'] = $return_item_id;

        return $this;
    }

    /**
     * Gets count
     *
     * @return int|null
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int|null $count Количество единиц товара.
     *
     * @return self
     */
    public function setCount($count)
    {
        if (is_null($count)) {
            throw new \InvalidArgumentException('non-nullable count cannot be null');
        }
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment Комментарий.
     *
     * @return self
     */
    public function setComment($comment)
    {
        if (is_null($comment)) {
            throw new \InvalidArgumentException('non-nullable comment cannot be null');
        }
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets reason_type
     *
     * @return \OpenAPI\Client\Model\ReturnDecisionReasonType|null
     */
    public function getReasonType()
    {
        return $this->container['reason_type'];
    }

    /**
     * Sets reason_type
     *
     * @param \OpenAPI\Client\Model\ReturnDecisionReasonType|null $reason_type reason_type
     *
     * @return self
     */
    public function setReasonType($reason_type)
    {
        if (is_null($reason_type)) {
            throw new \InvalidArgumentException('non-nullable reason_type cannot be null');
        }
        $this->container['reason_type'] = $reason_type;

        return $this;
    }

    /**
     * Gets subreason_type
     *
     * @return \OpenAPI\Client\Model\ReturnDecisionSubreasonType|null
     */
    public function getSubreasonType()
    {
        return $this->container['subreason_type'];
    }

    /**
     * Sets subreason_type
     *
     * @param \OpenAPI\Client\Model\ReturnDecisionSubreasonType|null $subreason_type subreason_type
     *
     * @return self
     */
    public function setSubreasonType($subreason_type)
    {
        if (is_null($subreason_type)) {
            throw new \InvalidArgumentException('non-nullable subreason_type cannot be null');
        }
        $this->container['subreason_type'] = $subreason_type;

        return $this;
    }

    /**
     * Gets decision_type
     *
     * @return \OpenAPI\Client\Model\ReturnDecisionType|null
     */
    public function getDecisionType()
    {
        return $this->container['decision_type'];
    }

    /**
     * Sets decision_type
     *
     * @param \OpenAPI\Client\Model\ReturnDecisionType|null $decision_type decision_type
     *
     * @return self
     */
    public function setDecisionType($decision_type)
    {
        if (is_null($decision_type)) {
            throw new \InvalidArgumentException('non-nullable decision_type cannot be null');
        }
        $this->container['decision_type'] = $decision_type;

        return $this;
    }

    /**
     * Gets refund_amount
     *
     * @return int|null
     */
    public function getRefundAmount()
    {
        return $this->container['refund_amount'];
    }

    /**
     * Sets refund_amount
     *
     * @param int|null $refund_amount Сумма возврата.
     *
     * @return self
     */
    public function setRefundAmount($refund_amount)
    {
        if (is_null($refund_amount)) {
            throw new \InvalidArgumentException('non-nullable refund_amount cannot be null');
        }
        $this->container['refund_amount'] = $refund_amount;

        return $this;
    }

    /**
     * Gets partner_compensation
     *
     * @return int|null
     */
    public function getPartnerCompensation()
    {
        return $this->container['partner_compensation'];
    }

    /**
     * Sets partner_compensation
     *
     * @param int|null $partner_compensation Компенсация за обратную доставку.
     *
     * @return self
     */
    public function setPartnerCompensation($partner_compensation)
    {
        if (is_null($partner_compensation)) {
            throw new \InvalidArgumentException('non-nullable partner_compensation cannot be null');
        }
        $this->container['partner_compensation'] = $partner_compensation;

        return $this;
    }

    /**
     * Gets images
     *
     * @return string[]|null
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param string[]|null $images Список хеш-кодов фотографий товара от покупателя.
     *
     * @return self
     */
    public function setImages($images)
    {
        if (is_null($images)) {
            throw new \InvalidArgumentException('non-nullable images cannot be null');
        }
        $this->container['images'] = $images;

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



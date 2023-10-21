<?php
/**
 * HiddenOfferDTO
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
 * HiddenOfferDTO Class Doc Comment
 *
 * @category Class
 * @description Информация о скрытии.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class HiddenOfferDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'HiddenOfferDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'feed_id' => 'int',
        'offer_id' => 'string',
        'ttl_in_hours' => 'int',
        'comment' => 'string',
        'market_sku' => 'int',
        'priority' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'feed_id' => 'int64',
        'offer_id' => null,
        'ttl_in_hours' => null,
        'comment' => null,
        'market_sku' => 'int64',
        'priority' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'feed_id' => false,
		'offer_id' => false,
		'ttl_in_hours' => false,
		'comment' => false,
		'market_sku' => false,
		'priority' => false
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
        'feed_id' => 'feedId',
        'offer_id' => 'offerId',
        'ttl_in_hours' => 'ttlInHours',
        'comment' => 'comment',
        'market_sku' => 'marketSku',
        'priority' => 'priority'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'feed_id' => 'setFeedId',
        'offer_id' => 'setOfferId',
        'ttl_in_hours' => 'setTtlInHours',
        'comment' => 'setComment',
        'market_sku' => 'setMarketSku',
        'priority' => 'setPriority'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'feed_id' => 'getFeedId',
        'offer_id' => 'getOfferId',
        'ttl_in_hours' => 'getTtlInHours',
        'comment' => 'getComment',
        'market_sku' => 'getMarketSku',
        'priority' => 'getPriority'
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
        $this->setIfExists('feed_id', $data ?? [], null);
        $this->setIfExists('offer_id', $data ?? [], null);
        $this->setIfExists('ttl_in_hours', $data ?? [], null);
        $this->setIfExists('comment', $data ?? [], null);
        $this->setIfExists('market_sku', $data ?? [], null);
        $this->setIfExists('priority', $data ?? [], null);
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

        if (!is_null($this->container['offer_id']) && (mb_strlen($this->container['offer_id']) > 80)) {
            $invalidProperties[] = "invalid value for 'offer_id', the character length must be smaller than or equal to 80.";
        }

        if (!is_null($this->container['offer_id']) && (mb_strlen($this->container['offer_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'offer_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['offer_id']) && !preg_match("/^[\\da-zA-ZА-Яа-я\\.,\/\\\\\\(\\)\\[\\]\\-=_]*$/", $this->container['offer_id'])) {
            $invalidProperties[] = "invalid value for 'offer_id', must be conform to the pattern /^[\\da-zA-ZА-Яа-я\\.,\/\\\\\\(\\)\\[\\]\\-=_]*$/.";
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
     * Gets feed_id
     *
     * @return int|null
     */
    public function getFeedId()
    {
        return $this->container['feed_id'];
    }

    /**
     * Sets feed_id
     *
     * @param int|null $feed_id feed_id
     *
     * @return self
     */
    public function setFeedId($feed_id)
    {
        if (is_null($feed_id)) {
            throw new \InvalidArgumentException('non-nullable feed_id cannot be null');
        }
        $this->container['feed_id'] = $feed_id;

        return $this;
    }

    /**
     * Gets offer_id
     *
     * @return string|null
     */
    public function getOfferId()
    {
        return $this->container['offer_id'];
    }

    /**
     * Sets offer_id
     *
     * @param string|null $offer_id **Ваш SKU**  Идентификатор товара в магазине. Разрешены английские и русские буквы (кроме ё), цифры и символы `. , / \\ ( ) [ ] - = _`  Максимальная длина — 80 знаков.  [Что такое SKU и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields).
     *
     * @return self
     */
    public function setOfferId($offer_id)
    {
        if (is_null($offer_id)) {
            throw new \InvalidArgumentException('non-nullable offer_id cannot be null');
        }
        if ((mb_strlen($offer_id) > 80)) {
            throw new \InvalidArgumentException('invalid length for $offer_id when calling HiddenOfferDTO., must be smaller than or equal to 80.');
        }
        if ((mb_strlen($offer_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $offer_id when calling HiddenOfferDTO., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[\\da-zA-ZА-Яа-я\\.,\/\\\\\\(\\)\\[\\]\\-=_]*$/", ObjectSerializer::toString($offer_id)))) {
            throw new \InvalidArgumentException("invalid value for \$offer_id when calling HiddenOfferDTO., must conform to the pattern /^[\\da-zA-ZА-Яа-я\\.,\/\\\\\\(\\)\\[\\]\\-=_]*$/.");
        }

        $this->container['offer_id'] = $offer_id;

        return $this;
    }

    /**
     * Gets ttl_in_hours
     *
     * @return int|null
     * @deprecated
     */
    public function getTtlInHours()
    {
        return $this->container['ttl_in_hours'];
    }

    /**
     * Sets ttl_in_hours
     *
     * @param int|null $ttl_in_hours {% note alert \"Это поле устарело\" %}  Не используйте его — это может привести к ошибкам.  {% endnote %}  Количество часов до возобновления показа товара.  Минимальное значение — `1`.  Максимальное значение — `720`.  Значение по умолчанию — `48`.  Используется только совместно с параметром `priority=\"true\"`.
     *
     * @return self
     * @deprecated
     */
    public function setTtlInHours($ttl_in_hours)
    {
        if (is_null($ttl_in_hours)) {
            throw new \InvalidArgumentException('non-nullable ttl_in_hours cannot be null');
        }
        $this->container['ttl_in_hours'] = $ttl_in_hours;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     * @deprecated
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment {% note alert \"Это поле устарело\" %}  Не используйте его — это может привести к ошибкам.  {% endnote %}  Комментарий магазина.  Максимальная длина комментария — 100 символов.  Используется только совместно с параметром `priority=\"true\"`. Если скрытие было без приоритета, комментарий не вернется в ответе.
     *
     * @return self
     * @deprecated
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
     * Gets market_sku
     *
     * @return int|null
     */
    public function getMarketSku()
    {
        return $this->container['market_sku'];
    }

    /**
     * Sets market_sku
     *
     * @param int|null $market_sku SKU на Маркете.
     *
     * @return self
     */
    public function setMarketSku($market_sku)
    {
        if (is_null($market_sku)) {
            throw new \InvalidArgumentException('non-nullable market_sku cannot be null');
        }
        $this->container['market_sku'] = $market_sku;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return bool|null
     * @deprecated
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param bool|null $priority {% note alert \"Это поле устарело\" %}  Не используйте его — это может привести к ошибкам.  {% endnote %}  Приоритет скрытия предложений через API над скрытием в личном кабинете. Параметр принимает только значение true.
     *
     * @return self
     * @deprecated
     */
    public function setPriority($priority)
    {
        if (is_null($priority)) {
            throw new \InvalidArgumentException('non-nullable priority cannot be null');
        }
        $this->container['priority'] = $priority;

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



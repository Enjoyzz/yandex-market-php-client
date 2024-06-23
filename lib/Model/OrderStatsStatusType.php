<?php
/**
 * OrderStatsStatusType
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
use \OpenAPI\Client\ObjectSerializer;

/**
 * OrderStatsStatusType Class Doc Comment
 *
 * @category Class
 * @description Текущий статус заказа:  * &#x60;CANCELLED_BEFORE_PROCESSING&#x60; — заказ отменен до начала его обработки.  * &#x60;CANCELLED_IN_DELIVERY&#x60; — заказ отменен во время его доставки.  * &#x60;CANCELLED_IN_PROCESSING&#x60; — заказ отменен во время его обработки.  * &#x60;DELIVERY&#x60; — заказ передан службе доставки.  * &#x60;DELIVERED&#x60; — заказ доставлен.  * &#x60;PARTIALLY_DELIVERED&#x60; — заказ частично доставлен.  * &#x60;PARTIALLY_RETURNED&#x60; — заказ частично возвращен покупателем.  * &#x60;PENDING&#x60; — заказ ожидает подтверждения.  * &#x60;PICKUP&#x60; — заказ доставлен в пункт выдачи.  * &#x60;PROCESSING&#x60; — заказ в обработке.  * &#x60;RESERVED&#x60; — товар зарезервирован на складе.  * &#x60;RETURNED&#x60; — заказ полностью возвращен покупателем.  * &#x60;UNKNOWN&#x60; — неизвестный статус заказа.  * &#x60;UNPAID&#x60; — заказ от юридического лица ожидает оплаты.  * &#x60;LOST&#x60; — заказ утерян.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderStatsStatusType
{
    /**
     * Possible values of this enum
     */
    public const CANCELLED_BEFORE_PROCESSING = 'CANCELLED_BEFORE_PROCESSING';

    public const CANCELLED_IN_DELIVERY = 'CANCELLED_IN_DELIVERY';

    public const CANCELLED_IN_PROCESSING = 'CANCELLED_IN_PROCESSING';

    public const DELIVERY = 'DELIVERY';

    public const DELIVERED = 'DELIVERED';

    public const PARTIALLY_DELIVERED = 'PARTIALLY_DELIVERED';

    public const PARTIALLY_RETURNED = 'PARTIALLY_RETURNED';

    public const PENDING = 'PENDING';

    public const PICKUP = 'PICKUP';

    public const PROCESSING = 'PROCESSING';

    public const RESERVED = 'RESERVED';

    public const RETURNED = 'RETURNED';

    public const UNKNOWN = 'UNKNOWN';

    public const UNPAID = 'UNPAID';

    public const LOST = 'LOST';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CANCELLED_BEFORE_PROCESSING,
            self::CANCELLED_IN_DELIVERY,
            self::CANCELLED_IN_PROCESSING,
            self::DELIVERY,
            self::DELIVERED,
            self::PARTIALLY_DELIVERED,
            self::PARTIALLY_RETURNED,
            self::PENDING,
            self::PICKUP,
            self::PROCESSING,
            self::RESERVED,
            self::RETURNED,
            self::UNKNOWN,
            self::UNPAID,
            self::LOST
        ];
    }
}



<?php
/**
 * OrderDeliveryType
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
use \OpenAPI\Client\ObjectSerializer;

/**
 * OrderDeliveryType Class Doc Comment
 *
 * @category Class
 * @description Способ доставки заказа:  * &#x60;DELIVERY&#x60; — курьерская доставка.  * &#x60;PICKUP&#x60; — самовывоз.  * &#x60;POST&#x60; — почта.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderDeliveryType
{
    /**
     * Possible values of this enum
     */
    public const DELIVERY = 'DELIVERY';

    public const PICKUP = 'PICKUP';

    public const POST = 'POST';

    public const DIGITAL = 'DIGITAL';

    public const UNKNOWN = 'UNKNOWN';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DELIVERY,
            self::PICKUP,
            self::POST,
            self::DIGITAL,
            self::UNKNOWN
        ];
    }
}



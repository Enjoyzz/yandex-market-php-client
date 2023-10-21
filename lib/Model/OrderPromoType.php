<?php
/**
 * OrderPromoType
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
 * OrderPromoType Class Doc Comment
 *
 * @category Class
 * @description Тип скидки:  * &#x60;MARKET_COUPON&#x60; — скидка по промокоду от Маркета. * &#x60;MARKET_DEAL&#x60; — скидка в рамках соглашения на оказание услуг по продвижению сервиса между маркетплейсом Яндекс Маркета и партнером. * &#x60;MARKET_COIN&#x60; — скидка по купонам.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderPromoType
{
    /**
     * Possible values of this enum
     */
    public const DIRECT_DISCOUNT = 'DIRECT_DISCOUNT';

    public const BLUE_SET = 'BLUE_SET';

    public const BLUE_FLASH = 'BLUE_FLASH';

    public const GENERIC_BUNDLE = 'GENERIC_BUNDLE';

    public const MARKET_COUPON = 'MARKET_COUPON';

    public const MARKET_PROMOCODE = 'MARKET_PROMOCODE';

    public const MARKET_DEAL = 'MARKET_DEAL';

    public const MARKET_BLUE = 'MARKET_BLUE';

    public const MARKET_PRIME = 'MARKET_PRIME';

    public const YANDEX_PLUS = 'YANDEX_PLUS';

    public const BERU_PLUS = 'BERU_PLUS';

    public const MARKET_COIN = 'MARKET_COIN';

    public const YANDEX_EMPLOYEE = 'YANDEX_EMPLOYEE';

    public const LIMITED_FREE_DELIVERY_PROMO = 'LIMITED_FREE_DELIVERY_PROMO';

    public const FREE_DELIVERY_THRESHOLD = 'FREE_DELIVERY_THRESHOLD';

    public const MULTICART_DISCOUNT = 'MULTICART_DISCOUNT';

    public const PRICE_DROP_AS_YOU_SHOP = 'PRICE_DROP_AS_YOU_SHOP';

    public const FREE_DELIVERY_FOR_LDI = 'FREE_DELIVERY_FOR_LDI';

    public const FREE_DELIVERY_FOR_LSC = 'FREE_DELIVERY_FOR_LSC';

    public const SECRET_SALE = 'SECRET_SALE';

    public const FREE_PICKUP = 'FREE_PICKUP';

    public const CHEAPEST_AS_GIFT = 'CHEAPEST_AS_GIFT';

    public const CASHBACK = 'CASHBACK';

    public const SUPPLIER_MULTICART_DISCOUNT = 'SUPPLIER_MULTICART_DISCOUNT';

    public const SPREAD_DISCOUNT_COUNT = 'SPREAD_DISCOUNT_COUNT';

    public const SPREAD_DISCOUNT_RECEIPT = 'SPREAD_DISCOUNT_RECEIPT';

    public const ANNOUNCEMENT_PROMO = 'ANNOUNCEMENT_PROMO';

    public const DISCOUNT_BY_PAYMENT_TYPE = 'DISCOUNT_BY_PAYMENT_TYPE';

    public const PERCENT_DISCOUNT = 'PERCENT_DISCOUNT';

    public const EMPTY_PROMO = 'EMPTY_PROMO';

    public const UNKNOWN = 'UNKNOWN';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DIRECT_DISCOUNT,
            self::BLUE_SET,
            self::BLUE_FLASH,
            self::GENERIC_BUNDLE,
            self::MARKET_COUPON,
            self::MARKET_PROMOCODE,
            self::MARKET_DEAL,
            self::MARKET_BLUE,
            self::MARKET_PRIME,
            self::YANDEX_PLUS,
            self::BERU_PLUS,
            self::MARKET_COIN,
            self::YANDEX_EMPLOYEE,
            self::LIMITED_FREE_DELIVERY_PROMO,
            self::FREE_DELIVERY_THRESHOLD,
            self::MULTICART_DISCOUNT,
            self::PRICE_DROP_AS_YOU_SHOP,
            self::FREE_DELIVERY_FOR_LDI,
            self::FREE_DELIVERY_FOR_LSC,
            self::SECRET_SALE,
            self::FREE_PICKUP,
            self::CHEAPEST_AS_GIFT,
            self::CASHBACK,
            self::SUPPLIER_MULTICART_DISCOUNT,
            self::SPREAD_DISCOUNT_COUNT,
            self::SPREAD_DISCOUNT_RECEIPT,
            self::ANNOUNCEMENT_PROMO,
            self::DISCOUNT_BY_PAYMENT_TYPE,
            self::PERCENT_DISCOUNT,
            self::EMPTY_PROMO,
            self::UNKNOWN
        ];
    }
}



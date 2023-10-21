<?php
/**
 * GoodsStatsTariffType
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
 * GoodsStatsTariffType Class Doc Comment
 *
 * @category Class
 * @description Услуга Маркета, за которую начисляется тариф:  * &#x60;AGENCY_COMMISSION&#x60; — приём платежа покупателя.  * &#x60;PAYMENT_TRANSFER&#x60; — перевод платежа покупателя.  * &#x60;FULFILLMENT&#x60; — обработка товара на складе Маркета.  * &#x60;STORAGE&#x60; — хранение товара на складе Маркета в течение суток.  * &#x60;SURPLUS&#x60; — хранение излишков на складе Маркета.  * &#x60;WITHDRAW&#x60; — вывоз товара со склада Маркета.  * &#x60;FEE&#x60; — размещение товара на Маркете.  Все тарифы описаны [в Справке для продавцов](https://yandex.ru/support/marketplace/introduction/rates/index.html).
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GoodsStatsTariffType
{
    /**
     * Possible values of this enum
     */
    public const AGENCY_COMMISSION = 'AGENCY_COMMISSION';

    public const PAYMENT_TRANSFER = 'PAYMENT_TRANSFER';

    public const FULFILLMENT = 'FULFILLMENT';

    public const STORAGE = 'STORAGE';

    public const WITHDRAW = 'WITHDRAW';

    public const SURPLUS = 'SURPLUS';

    public const FEE = 'FEE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AGENCY_COMMISSION,
            self::PAYMENT_TRANSFER,
            self::FULFILLMENT,
            self::STORAGE,
            self::WITHDRAW,
            self::SURPLUS,
            self::FEE
        ];
    }
}



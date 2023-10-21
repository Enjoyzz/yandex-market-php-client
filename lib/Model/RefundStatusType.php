<?php
/**
 * RefundStatusType
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
 * RefundStatusType Class Doc Comment
 *
 * @category Class
 * @description Cтатус возврата средств:  * STARTED_BY_USER — создан клиентом из личного кабинета.  * REFUND_IN_PROGRESS — ждет решение о возврате средств.  * REFUNDED — по возврату проведены все возвратные денежные транзакции.  * FAILED — невозможно провести возврат покупателю.  * WAITING_FOR_DECISION — ожидает решения.  * DECISION_MADE — по возврату принято решение.  * REFUNDED_WITH_BONUSES — возврат осуществлен баллами Плюса или промокодом.  * REFUNDED_BY_SHOP — магазин сделал самостоятельно возврат средств.  * CANCELLED — возврат отменен.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RefundStatusType
{
    /**
     * Possible values of this enum
     */
    public const STARTED_BY_USER = 'STARTED_BY_USER';

    public const REFUND_IN_PROGRESS = 'REFUND_IN_PROGRESS';

    public const REFUNDED = 'REFUNDED';

    public const FAILED = 'FAILED';

    public const WAITING_FOR_DECISION = 'WAITING_FOR_DECISION';

    public const DECISION_MADE = 'DECISION_MADE';

    public const REFUNDED_WITH_BONUSES = 'REFUNDED_WITH_BONUSES';

    public const REFUNDED_BY_SHOP = 'REFUNDED_BY_SHOP';

    public const CANCELLED = 'CANCELLED';

    public const UNKNOWN = 'UNKNOWN';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::STARTED_BY_USER,
            self::REFUND_IN_PROGRESS,
            self::REFUNDED,
            self::FAILED,
            self::WAITING_FOR_DECISION,
            self::DECISION_MADE,
            self::REFUNDED_WITH_BONUSES,
            self::REFUNDED_BY_SHOP,
            self::CANCELLED,
            self::UNKNOWN
        ];
    }
}



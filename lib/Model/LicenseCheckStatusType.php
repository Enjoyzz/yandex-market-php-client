<?php
/**
 * LicenseCheckStatusType
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
 * LicenseCheckStatusType Class Doc Comment
 *
 * @category Class
 * @description Статус проверки лицензии: * &#x60;NEW&#x60; — лицензия проверяется. * &#x60;SUCCESS&#x60; — лицензия прошла проверку. * &#x60;FAIL&#x60; — лицензия не прошла проверку.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LicenseCheckStatusType
{
    /**
     * Possible values of this enum
     */
    public const _NEW = 'NEW';

    public const SUCCESS = 'SUCCESS';

    public const FAIL = 'FAIL';

    public const REVOKE = 'REVOKE';

    public const DONT_WANT = 'DONT_WANT';

    public const FAIL_MANUAL = 'FAIL_MANUAL';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_NEW,
            self::SUCCESS,
            self::FAIL,
            self::REVOKE,
            self::DONT_WANT,
            self::FAIL_MANUAL
        ];
    }
}



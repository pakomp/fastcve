<?php
/**
 * Operator
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Msn\Apis\FastCVE
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * FastCVE
 *
 * fast, rich and API-based search for CVE and more (CPE, CWE, CAPEC)
 *
 * The version of the OpenAPI document: 0.1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Msn\Apis\FastCVE\Model;
use \Msn\Apis\FastCVE\ObjectSerializer;

/**
 * Operator Class Doc Comment
 *
 * @category Class
 * @description An enumeration.
 * @package  Msn\Apis\FastCVE
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Operator
{
    /**
     * Possible values of this enum
     */
    public const _AND = 'AND';

    public const _OR = 'OR';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_AND,
            self::_OR
        ];
    }
}



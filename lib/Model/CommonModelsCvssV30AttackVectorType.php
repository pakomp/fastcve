<?php
/**
 * CommonModelsCvssV30AttackVectorType
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
 * CommonModelsCvssV30AttackVectorType Class Doc Comment
 *
 * @category Class
 * @description An enumeration.
 * @package  Msn\Apis\FastCVE
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CommonModelsCvssV30AttackVectorType
{
    /**
     * Possible values of this enum
     */
    public const NETWORK = 'NETWORK';

    public const ADJACENT_NETWORK = 'ADJACENT_NETWORK';

    public const LOCAL = 'LOCAL';

    public const PHYSICAL = 'PHYSICAL';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NETWORK,
            self::ADJACENT_NETWORK,
            self::LOCAL,
            self::PHYSICAL
        ];
    }
}


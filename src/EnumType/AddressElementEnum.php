<?php

namespace Onesourceav\EnumType;

/**
 * This class stands for AddressElementEnum EnumType
 * @subpackage Enumerations
 */
class AddressElementEnum
{
    /**
     * Constant for value 'UNKNOWN'
     * @return string 'UNKNOWN'
     */
    const VALUE_UNKNOWN = 'UNKNOWN';
    /**
     * Constant for value 'ADDRESS1'
     * @return string 'ADDRESS1'
     */
    const VALUE_ADDRESS_1 = 'ADDRESS1';
    /**
     * Constant for value 'ADDRESS2'
     * @return string 'ADDRESS2'
     */
    const VALUE_ADDRESS_2 = 'ADDRESS2';
    /**
     * Constant for value 'ADDRESS3'
     * @return string 'ADDRESS3'
     */
    const VALUE_ADDRESS_3 = 'ADDRESS3';
    /**
     * Constant for value 'CITY'
     * @return string 'CITY'
     */
    const VALUE_CITY = 'CITY';
    /**
     * Constant for value 'REGION'
     * @return string 'REGION'
     */
    const VALUE_REGION = 'REGION';
    /**
     * Constant for value 'POSTALCODE'
     * @return string 'POSTALCODE'
     */
    const VALUE_POSTALCODE = 'POSTALCODE';
    /**
     * Constant for value 'COUNTRY'
     * @return string 'COUNTRY'
     */
    const VALUE_COUNTRY = 'COUNTRY';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_ADDRESS_1
     * @uses self::VALUE_ADDRESS_2
     * @uses self::VALUE_ADDRESS_3
     * @uses self::VALUE_CITY
     * @uses self::VALUE_REGION
     * @uses self::VALUE_POSTALCODE
     * @uses self::VALUE_COUNTRY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNKNOWN,
            self::VALUE_ADDRESS_1,
            self::VALUE_ADDRESS_2,
            self::VALUE_ADDRESS_3,
            self::VALUE_CITY,
            self::VALUE_REGION,
            self::VALUE_POSTALCODE,
            self::VALUE_COUNTRY,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}

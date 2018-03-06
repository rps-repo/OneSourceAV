<?php

namespace Onesourceav\EnumType;

/**
 * This class stands for AddressResponseStatusEnum EnumType
 * @subpackage Enumerations
 */
class AddressResponseStatusEnum
{
    /**
     * Constant for value 'CONFIRMED'
     * @return string 'CONFIRMED'
     */
    const VALUE_CONFIRMED = 'CONFIRMED';
    /**
     * Constant for value 'CORRECTED'
     * @return string 'CORRECTED'
     */
    const VALUE_CORRECTED = 'CORRECTED';
    /**
     * Constant for value 'PARTIAL'
     * @return string 'PARTIAL'
     */
    const VALUE_PARTIAL = 'PARTIAL';
    /**
     * Constant for value 'ERROR'
     * @return string 'ERROR'
     */
    const VALUE_ERROR = 'ERROR';
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
     * @uses self::VALUE_CONFIRMED
     * @uses self::VALUE_CORRECTED
     * @uses self::VALUE_PARTIAL
     * @uses self::VALUE_ERROR
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CONFIRMED,
            self::VALUE_CORRECTED,
            self::VALUE_PARTIAL,
            self::VALUE_ERROR,
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

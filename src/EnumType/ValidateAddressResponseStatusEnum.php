<?php

namespace Onesourceav\EnumType;

/**
 * This class stands for ValidateAddressResponseStatusEnum EnumType
 * @subpackage Enumerations
 */
class ValidateAddressResponseStatusEnum
{
    /**
     * Constant for value 'SUCCESS'
     * @return string 'SUCCESS'
     */
    const VALUE_SUCCESS = 'SUCCESS';
    /**
     * Constant for value 'ERROR'
     * @return string 'ERROR'
     */
    const VALUE_ERROR = 'ERROR';
    /**
     * Constant for value 'PARTIAL'
     * @return string 'PARTIAL'
     */
    const VALUE_PARTIAL = 'PARTIAL';
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
     * @uses self::VALUE_SUCCESS
     * @uses self::VALUE_ERROR
     * @uses self::VALUE_PARTIAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SUCCESS,
            self::VALUE_ERROR,
            self::VALUE_PARTIAL,
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

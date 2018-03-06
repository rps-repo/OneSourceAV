<?php

namespace Onesourceav\EnumType;

/**
 * This class stands for AddressTypeEnum EnumType
 * @subpackage Enumerations
 */
class AddressTypeEnum
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
     * Constant for value 'SUGGESTION'
     * @return string 'SUGGESTION'
     */
    const VALUE_SUGGESTION = 'SUGGESTION';
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
     * @uses self::VALUE_SUGGESTION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CONFIRMED,
            self::VALUE_CORRECTED,
            self::VALUE_SUGGESTION,
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

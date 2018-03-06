<?php

namespace Onesourceav\EnumType;

/**
 * This class stands for LogLevelType EnumType
 * @subpackage Enumerations
 */
class LogLevelType
{
    /**
     * Constant for value 'DEBUG'
     * @return string 'DEBUG'
     */
    const VALUE_DEBUG = 'DEBUG';
    /**
     * Constant for value 'INFO'
     * @return string 'INFO'
     */
    const VALUE_INFO = 'INFO';
    /**
     * Constant for value 'WARN'
     * @return string 'WARN'
     */
    const VALUE_WARN = 'WARN';
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
     * @uses self::VALUE_DEBUG
     * @uses self::VALUE_INFO
     * @uses self::VALUE_WARN
     * @uses self::VALUE_ERROR
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DEBUG,
            self::VALUE_INFO,
            self::VALUE_WARN,
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

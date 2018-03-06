<?php

namespace Onesourceav\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseAddress StructType
 * Meta informations extracted from the WSDL
 * - documentation: The resultant address from validation, it is the base AddressType extended with the type attribute which defines what this address represents (see the type definition below). There can be multiple ResponseAddress elements returned if
 * the validation fails, but the provider returns possible matches. If the status is validation status is FAIL there may not be a ResponseAddress element returned for this address.
 * @subpackage Structs
 */
class ResponseAddress extends AddressType
{
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - documentation: The type of this return address.
     * - use: required
     * @var string
     */
    public $type;
    /**
     * Constructor method for ResponseAddress
     * @uses ResponseAddress::setType()
     * @param string $type
     */
    public function __construct($type = null)
    {
        $this
            ->setType($type);
    }
    /**
     * Get type value
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \Onesourceav\EnumType\AddressTypeEnum::valueIsValid()
     * @uses \Onesourceav\EnumType\AddressTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Onesourceav\StructType\ResponseAddress
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Onesourceav\EnumType\AddressTypeEnum::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Onesourceav\EnumType\AddressTypeEnum::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesourceav\StructType\ResponseAddress
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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

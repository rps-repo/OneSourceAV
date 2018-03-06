<?php

namespace Onesourceav\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressMessageType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A message giving more validation detail about this address
 * @subpackage Structs
 */
class AddressMessageType extends AbstractStructBase
{
    /**
     * The severity
     * Meta informations extracted from the WSDL
     * - documentation: The severity level of this message
     * - use: required
     * @var string
     */
    public $severity;
    /**
     * The code
     * Meta informations extracted from the WSDL
     * - documentation: A sabrix system defined error code. An error code list should be provided outside the service xsd
     * - use: required
     * @var string
     */
    public $code;
    /**
     * The address_element
     * Meta informations extracted from the WSDL
     * - documentation: Specifies which address element this message pertains to or UNKNOWN if a particular element is not applicable or is not known
     * - use: required
     * @var string
     */
    public $address_element;
    /**
     * The Description
     * @var string
     */
    public $Description;
    /**
     * Constructor method for AddressMessageType
     * @uses AddressMessageType::setSeverity()
     * @uses AddressMessageType::setCode()
     * @uses AddressMessageType::setAddress_element()
     * @uses AddressMessageType::setDescription()
     * @param string $severity
     * @param string $code
     * @param string $address_element
     * @param string $description
     */
    public function __construct($severity = null, $code = null, $address_element = null, $description = null)
    {
        $this
            ->setSeverity($severity)
            ->setCode($code)
            ->setAddress_element($address_element)
            ->setDescription($description);
    }
    /**
     * Get severity value
     * @return string
     */
    public function getSeverity()
    {
        return $this->severity;
    }
    /**
     * Set severity value
     * @uses \Onesourceav\EnumType\LogLevelType::valueIsValid()
     * @uses \Onesourceav\EnumType\LogLevelType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $severity
     * @return \Onesourceav\StructType\AddressMessageType
     */
    public function setSeverity($severity = null)
    {
        // validation for constraint: enumeration
        if (!\Onesourceav\EnumType\LogLevelType::valueIsValid($severity)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $severity, implode(', ', \Onesourceav\EnumType\LogLevelType::getValidValues())), __LINE__);
        }
        $this->severity = $severity;
        return $this;
    }
    /**
     * Get code value
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Onesourceav\StructType\AddressMessageType
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->code = $code;
        return $this;
    }
    /**
     * Get address_element value
     * @return string
     */
    public function getAddress_element()
    {
        return $this->{'address-element'};
    }
    /**
     * Set address_element value
     * @uses \Onesourceav\EnumType\AddressElementEnum::valueIsValid()
     * @uses \Onesourceav\EnumType\AddressElementEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $address_element
     * @return \Onesourceav\StructType\AddressMessageType
     */
    public function setAddress_element($address_element = null)
    {
        // validation for constraint: enumeration
        if (!\Onesourceav\EnumType\AddressElementEnum::valueIsValid($address_element)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $address_element, implode(', ', \Onesourceav\EnumType\AddressElementEnum::getValidValues())), __LINE__);
        }
        $this->address_element = $this->{'address-element'} = $address_element;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Onesourceav\StructType\AddressMessageType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesourceav\StructType\AddressMessageType
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

<?php

namespace Onesourceav\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestStatus StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines the aggregrate status of all the address validations within the request
 * @subpackage Structs
 */
class RequestStatus extends AbstractStructBase
{
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: Aggregrate status of the validated addresses.
     * @var string
     */
    public $Status;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Possible description of what caused the request's current status
     * @var string
     */
    public $Description;
    /**
     * Constructor method for RequestStatus
     * @uses RequestStatus::setStatus()
     * @uses RequestStatus::setDescription()
     * @param string $status
     * @param string $description
     */
    public function __construct($status = null, $description = null)
    {
        $this
            ->setStatus($status)
            ->setDescription($description);
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \Onesourceav\EnumType\ValidateAddressResponseStatusEnum::valueIsValid()
     * @uses \Onesourceav\EnumType\ValidateAddressResponseStatusEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \Onesourceav\StructType\RequestStatus
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\Onesourceav\EnumType\ValidateAddressResponseStatusEnum::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \Onesourceav\EnumType\ValidateAddressResponseStatusEnum::getValidValues())), __LINE__);
        }
        $this->Status = $status;
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
     * @return \Onesourceav\StructType\RequestStatus
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
     * @return \Onesourceav\StructType\RequestStatus
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

<?php

namespace Onesourceav\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressRequestType StructType
 * @subpackage Structs
 */
class AddressRequestType extends AbstractStructBase
{
    /**
     * The AddressInfo
     * Meta informations extracted from the WSDL
     * - documentation: List of name-value properties that will be returned in the response. These are for caller tracking only and will simply be carried forward through the call. A common example is PartnerNumber, but may also include other tracking or
     * routing information for use by the caller's system
     * - minOccurs: 0
     * @var \Onesourceav\StructType\PropertyListType
     */
    public $AddressInfo;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - documentation: The address to be validated
     * @var \Onesourceav\StructType\AddressType
     */
    public $Address;
    /**
     * Constructor method for AddressRequestType
     * @uses AddressRequestType::setAddressInfo()
     * @uses AddressRequestType::setAddress()
     * @param \Onesourceav\StructType\PropertyListType $addressInfo
     * @param \Onesourceav\StructType\AddressType $address
     */
    public function __construct(\Onesourceav\StructType\PropertyListType $addressInfo = null, \Onesourceav\StructType\AddressType $address = null)
    {
        $this
            ->setAddressInfo($addressInfo)
            ->setAddress($address);
    }
    /**
     * Get AddressInfo value
     * @return \Onesourceav\StructType\PropertyListType|null
     */
    public function getAddressInfo()
    {
        return $this->AddressInfo;
    }
    /**
     * Set AddressInfo value
     * @param \Onesourceav\StructType\PropertyListType $addressInfo
     * @return \Onesourceav\StructType\AddressRequestType
     */
    public function setAddressInfo(\Onesourceav\StructType\PropertyListType $addressInfo = null)
    {
        $this->AddressInfo = $addressInfo;
        return $this;
    }
    /**
     * Get Address value
     * @return \Onesourceav\StructType\AddressType|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \Onesourceav\StructType\AddressType $address
     * @return \Onesourceav\StructType\AddressRequestType
     */
    public function setAddress(\Onesourceav\StructType\AddressType $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesourceav\StructType\AddressRequestType
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

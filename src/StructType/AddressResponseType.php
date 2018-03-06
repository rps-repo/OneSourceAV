<?php

namespace Onesourceav\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressResponseType StructType
 * @subpackage Structs
 */
class AddressResponseType extends AbstractStructBase
{
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: Validation status for this address
     * @var string
     */
    public $Status;
    /**
     * The AddressInfo
     * Meta informations extracted from the WSDL
     * - documentation: List of name-value properties carried over from the request. These are for caller tracking only and are simply be copied from the request. A common example is PartnerNumber, but may also include other tracking or routing information
     * for use by the caller's system
     * - minOccurs: 0
     * @var \Onesourceav\StructType\PropertyListType
     */
    public $AddressInfo;
    /**
     * The Messages
     * @var \Onesourceav\StructType\Messages
     */
    public $Messages;
    /**
     * The RequestAddress
     * Meta informations extracted from the WSDL
     * - documentation: The original address from the request, unchanged. This will be provided if ReturnInputData is true in the originating request
     * - minOccurs: 0
     * @var \Onesourceav\StructType\AddressType
     */
    public $RequestAddress;
    /**
     * The ResponseAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Onesourceav\StructType\ResponseAddress[]
     */
    public $ResponseAddress;
    /**
     * Constructor method for AddressResponseType
     * @uses AddressResponseType::setStatus()
     * @uses AddressResponseType::setAddressInfo()
     * @uses AddressResponseType::setMessages()
     * @uses AddressResponseType::setRequestAddress()
     * @uses AddressResponseType::setResponseAddress()
     * @param string $status
     * @param \Onesourceav\StructType\PropertyListType $addressInfo
     * @param \Onesourceav\StructType\Messages $messages
     * @param \Onesourceav\StructType\AddressType $requestAddress
     * @param \Onesourceav\StructType\ResponseAddress[] $responseAddress
     */
    public function __construct($status = null, \Onesourceav\StructType\PropertyListType $addressInfo = null, \Onesourceav\StructType\Messages $messages = null, \Onesourceav\StructType\AddressType $requestAddress = null, array $responseAddress = array())
    {
        $this
            ->setStatus($status)
            ->setAddressInfo($addressInfo)
            ->setMessages($messages)
            ->setRequestAddress($requestAddress)
            ->setResponseAddress($responseAddress);
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
     * @uses \Onesourceav\EnumType\AddressResponseStatusEnum::valueIsValid()
     * @uses \Onesourceav\EnumType\AddressResponseStatusEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \Onesourceav\StructType\AddressResponseType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\Onesourceav\EnumType\AddressResponseStatusEnum::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \Onesourceav\EnumType\AddressResponseStatusEnum::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
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
     * @return \Onesourceav\StructType\AddressResponseType
     */
    public function setAddressInfo(\Onesourceav\StructType\PropertyListType $addressInfo = null)
    {
        $this->AddressInfo = $addressInfo;
        return $this;
    }
    /**
     * Get Messages value
     * @return \Onesourceav\StructType\Messages|null
     */
    public function getMessages()
    {
        return $this->Messages;
    }
    /**
     * Set Messages value
     * @param \Onesourceav\StructType\Messages $messages
     * @return \Onesourceav\StructType\AddressResponseType
     */
    public function setMessages(\Onesourceav\StructType\Messages $messages = null)
    {
        $this->Messages = $messages;
        return $this;
    }
    /**
     * Get RequestAddress value
     * @return \Onesourceav\StructType\AddressType|null
     */
    public function getRequestAddress()
    {
        return $this->RequestAddress;
    }
    /**
     * Set RequestAddress value
     * @param \Onesourceav\StructType\AddressType $requestAddress
     * @return \Onesourceav\StructType\AddressResponseType
     */
    public function setRequestAddress(\Onesourceav\StructType\AddressType $requestAddress = null)
    {
        $this->RequestAddress = $requestAddress;
        return $this;
    }
    /**
     * Get ResponseAddress value
     * @return \Onesourceav\StructType\ResponseAddress[]|null
     */
    public function getResponseAddress()
    {
        return $this->ResponseAddress;
    }
    /**
     * Set ResponseAddress value
     * @throws \InvalidArgumentException
     * @param \Onesourceav\StructType\ResponseAddress[] $responseAddress
     * @return \Onesourceav\StructType\AddressResponseType
     */
    public function setResponseAddress(array $responseAddress = array())
    {
        foreach ($responseAddress as $addressResponseTypeResponseAddressItem) {
            // validation for constraint: itemType
            if (!$addressResponseTypeResponseAddressItem instanceof \Onesourceav\StructType\ResponseAddress) {
                throw new \InvalidArgumentException(sprintf('The ResponseAddress property can only contain items of \Onesourceav\StructType\ResponseAddress, "%s" given', is_object($addressResponseTypeResponseAddressItem) ? get_class($addressResponseTypeResponseAddressItem) : gettype($addressResponseTypeResponseAddressItem)), __LINE__);
            }
        }
        $this->ResponseAddress = $responseAddress;
        return $this;
    }
    /**
     * Add item to ResponseAddress value
     * @throws \InvalidArgumentException
     * @param \Onesourceav\StructType\ResponseAddress $item
     * @return \Onesourceav\StructType\AddressResponseType
     */
    public function addToResponseAddress(\Onesourceav\StructType\ResponseAddress $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Onesourceav\StructType\ResponseAddress) {
            throw new \InvalidArgumentException(sprintf('The ResponseAddress property can only contain items of \Onesourceav\StructType\ResponseAddress, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ResponseAddress[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesourceav\StructType\AddressResponseType
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

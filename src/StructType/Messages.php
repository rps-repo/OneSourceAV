<?php

namespace Onesourceav\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Messages StructType
 * Meta informations extracted from the WSDL
 * - documentation: A list of messages providing more detail about the response status
 * @subpackage Structs
 */
class Messages extends AbstractStructBase
{
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - documentation: One of possibly many messages for this address.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Onesourceav\StructType\AddressMessageType[]
     */
    public $Message;
    /**
     * Constructor method for Messages
     * @uses Messages::setMessage()
     * @param \Onesourceav\StructType\AddressMessageType[] $message
     */
    public function __construct(array $message = array())
    {
        $this
            ->setMessage($message);
    }
    /**
     * Get Message value
     * @return \Onesourceav\StructType\AddressMessageType[]|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @throws \InvalidArgumentException
     * @param \Onesourceav\StructType\AddressMessageType[] $message
     * @return \Onesourceav\StructType\Messages
     */
    public function setMessage(array $message = array())
    {
        foreach ($message as $messagesMessageItem) {
            // validation for constraint: itemType
            if (!$messagesMessageItem instanceof \Onesourceav\StructType\AddressMessageType) {
                throw new \InvalidArgumentException(sprintf('The Message property can only contain items of \Onesourceav\StructType\AddressMessageType, "%s" given', is_object($messagesMessageItem) ? get_class($messagesMessageItem) : gettype($messagesMessageItem)), __LINE__);
            }
        }
        $this->Message = $message;
        return $this;
    }
    /**
     * Add item to Message value
     * @throws \InvalidArgumentException
     * @param \Onesourceav\StructType\AddressMessageType $item
     * @return \Onesourceav\StructType\Messages
     */
    public function addToMessage(\Onesourceav\StructType\AddressMessageType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Onesourceav\StructType\AddressMessageType) {
            throw new \InvalidArgumentException(sprintf('The Message property can only contain items of \Onesourceav\StructType\AddressMessageType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Message[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesourceav\StructType\Messages
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

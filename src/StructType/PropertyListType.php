<?php

namespace Onesourceav\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PropertyListType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Name-value list. This information is for caller tracking.
 * @subpackage Structs
 */
class PropertyListType extends AbstractStructBase
{
    /**
     * The Prop
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Onesourceav\StructType\PropType[]
     */
    public $Prop;
    /**
     * Constructor method for PropertyListType
     * @uses PropertyListType::setProp()
     * @param \Onesourceav\StructType\PropType[] $prop
     */
    public function __construct(array $prop = array())
    {
        $this
            ->setProp($prop);
    }
    /**
     * Get Prop value
     * @return \Onesourceav\StructType\PropType[]|null
     */
    public function getProp()
    {
        return $this->Prop;
    }
    /**
     * Set Prop value
     * @throws \InvalidArgumentException
     * @param \Onesourceav\StructType\PropType[] $prop
     * @return \Onesourceav\StructType\PropertyListType
     */
    public function setProp(array $prop = array())
    {
        foreach ($prop as $propertyListTypePropItem) {
            // validation for constraint: itemType
            if (!$propertyListTypePropItem instanceof \Onesourceav\StructType\PropType) {
                throw new \InvalidArgumentException(sprintf('The Prop property can only contain items of \Onesourceav\StructType\PropType, "%s" given', is_object($propertyListTypePropItem) ? get_class($propertyListTypePropItem) : gettype($propertyListTypePropItem)), __LINE__);
            }
        }
        $this->Prop = $prop;
        return $this;
    }
    /**
     * Add item to Prop value
     * @throws \InvalidArgumentException
     * @param \Onesourceav\StructType\PropType $item
     * @return \Onesourceav\StructType\PropertyListType
     */
    public function addToProp(\Onesourceav\StructType\PropType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Onesourceav\StructType\PropType) {
            throw new \InvalidArgumentException(sprintf('The Prop property can only contain items of \Onesourceav\StructType\PropType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Prop[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesourceav\StructType\PropertyListType
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

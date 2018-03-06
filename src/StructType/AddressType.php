<?php

namespace Onesourceav\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The representation of the address. Only Country is required.
 * @subpackage Structs
 */
class AddressType extends AbstractStructBase
{
    /**
     * The Address1
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - minLength: 1
     * @var string
     */
    public $Address1;
    /**
     * The Country
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - minLength: 1
     * @var string
     */
    public $Country;
    /**
     * The Address2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Address2;
    /**
     * The Address3
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Address3;
    /**
     * The City
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $City;
    /**
     * The Region
     * Meta informations extracted from the WSDL
     * - documentation: Typically state in the US and province in Canada. The term Region is used to support international addresses.
     * - minOccurs: 0
     * @var string
     */
    public $Region;
    /**
     * The PostalCode
     * Meta informations extracted from the WSDL
     * - documentation: This can contain a standard 5 digit zip, a zip+4, Canadian postal code or any string of other international postalcodes.
     * - minOccurs: 0
     * @var string
     */
    public $PostalCode;
    /**
     * Constructor method for AddressType
     * @uses AddressType::setAddress1()
     * @uses AddressType::setCountry()
     * @uses AddressType::setAddress2()
     * @uses AddressType::setAddress3()
     * @uses AddressType::setCity()
     * @uses AddressType::setRegion()
     * @uses AddressType::setPostalCode()
     * @param string $address1
     * @param string $country
     * @param string $address2
     * @param string $address3
     * @param string $city
     * @param string $region
     * @param string $postalCode
     */
    public function __construct($address1 = null, $country = null, $address2 = null, $address3 = null, $city = null, $region = null, $postalCode = null)
    {
        $this
            ->setAddress1($address1)
            ->setCountry($country)
            ->setAddress2($address2)
            ->setAddress3($address3)
            ->setCity($city)
            ->setRegion($region)
            ->setPostalCode($postalCode);
    }
    /**
     * Get Address1 value
     * @return string
     */
    public function getAddress1()
    {
        return $this->Address1;
    }
    /**
     * Set Address1 value
     * @param string $address1
     * @return \Onesourceav\StructType\AddressType
     */
    public function setAddress1($address1 = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($address1) && strlen($address1) < 1) || (is_array($address1) && count($address1) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($address1) && !is_string($address1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address1)), __LINE__);
        }
        $this->Address1 = $address1;
        return $this;
    }
    /**
     * Get Country value
     * @return string
     */
    public function getCountry()
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @param string $country
     * @return \Onesourceav\StructType\AddressType
     */
    public function setCountry($country = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($country) && strlen($country) < 1) || (is_array($country) && count($country) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->Country = $country;
        return $this;
    }
    /**
     * Get Address2 value
     * @return string|null
     */
    public function getAddress2()
    {
        return $this->Address2;
    }
    /**
     * Set Address2 value
     * @param string $address2
     * @return \Onesourceav\StructType\AddressType
     */
    public function setAddress2($address2 = null)
    {
        // validation for constraint: string
        if (!is_null($address2) && !is_string($address2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address2)), __LINE__);
        }
        $this->Address2 = $address2;
        return $this;
    }
    /**
     * Get Address3 value
     * @return string|null
     */
    public function getAddress3()
    {
        return $this->Address3;
    }
    /**
     * Set Address3 value
     * @param string $address3
     * @return \Onesourceav\StructType\AddressType
     */
    public function setAddress3($address3 = null)
    {
        // validation for constraint: string
        if (!is_null($address3) && !is_string($address3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address3)), __LINE__);
        }
        $this->Address3 = $address3;
        return $this;
    }
    /**
     * Get City value
     * @return string|null
     */
    public function getCity()
    {
        return $this->City;
    }
    /**
     * Set City value
     * @param string $city
     * @return \Onesourceav\StructType\AddressType
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        $this->City = $city;
        return $this;
    }
    /**
     * Get Region value
     * @return string|null
     */
    public function getRegion()
    {
        return $this->Region;
    }
    /**
     * Set Region value
     * @param string $region
     * @return \Onesourceav\StructType\AddressType
     */
    public function setRegion($region = null)
    {
        // validation for constraint: string
        if (!is_null($region) && !is_string($region)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($region)), __LINE__);
        }
        $this->Region = $region;
        return $this;
    }
    /**
     * Get PostalCode value
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }
    /**
     * Set PostalCode value
     * @param string $postalCode
     * @return \Onesourceav\StructType\AddressType
     */
    public function setPostalCode($postalCode = null)
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postalCode)), __LINE__);
        }
        $this->PostalCode = $postalCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesourceav\StructType\AddressType
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

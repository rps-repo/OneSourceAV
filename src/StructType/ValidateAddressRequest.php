<?php

namespace Onesourceav\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateAddressRequest StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines the SOAP:Body of the address validation webservice request
 * @subpackage Structs
 */
class ValidateAddressRequest extends AbstractStructBase
{
    /**
     * The ExternalCompanyId
     * Meta informations extracted from the WSDL
     * - documentation: External Company Id within the Sabrix system
     * - maxOccurs: 1
     * - minOccurs: 1
     * - minLength: 1
     * @var string
     */
    public $ExternalCompanyId;
    /**
     * The RequestId
     * Meta informations extracted from the WSDL
     * - documentation: Optional identifier to correlate the request and response on the caller's system. This value will be carried over to the response.
     * - minOccurs: 0
     * @var string
     */
    public $RequestId;
    /**
     * The ReturnInputData
     * Meta informations extracted from the WSDL
     * - default: false
     * - documentation: When set to true, the original request address will be returned along-side any updates or failures in the resonse
     * @var bool
     */
    public $ReturnInputData;
    /**
     * The LogLevel
     * Meta informations extracted from the WSDL
     * - default: WARN
     * - documentation: Sets the verbosity of the messages returned in the AddressResponse elements
     * - minOccurs: 0
     * @var string
     */
    public $LogLevel;
    /**
     * The AddressRequest
     * Meta informations extracted from the WSDL
     * - documentation: Each occurence represents one address to be validated. There must be at least one address to validate, but can has no maximum number of addresses.
     * - maxOccurs: unbounded
     * @var \Onesourceav\StructType\AddressRequestType[]
     */
    public $AddressRequest;
    /**
     * Constructor method for ValidateAddressRequest
     * @uses ValidateAddressRequest::setExternalCompanyId()
     * @uses ValidateAddressRequest::setRequestId()
     * @uses ValidateAddressRequest::setReturnInputData()
     * @uses ValidateAddressRequest::setLogLevel()
     * @uses ValidateAddressRequest::setAddressRequest()
     * @param string $externalCompanyId
     * @param string $requestId
     * @param bool $returnInputData
     * @param string $logLevel
     * @param \Onesourceav\StructType\AddressRequestType[] $addressRequest
     */
    public function __construct($externalCompanyId = null, $requestId = null, $returnInputData = false, $logLevel = 'WARN', array $addressRequest = array())
    {
        $this
            ->setExternalCompanyId($externalCompanyId)
            ->setRequestId($requestId)
            ->setReturnInputData($returnInputData)
            ->setLogLevel($logLevel)
            ->setAddressRequest($addressRequest);
    }
    /**
     * Get ExternalCompanyId value
     * @return string
     */
    public function getExternalCompanyId()
    {
        return $this->ExternalCompanyId;
    }
    /**
     * Set ExternalCompanyId value
     * @param string $externalCompanyId
     * @return \Onesourceav\StructType\ValidateAddressRequest
     */
    public function setExternalCompanyId($externalCompanyId = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($externalCompanyId) && strlen($externalCompanyId) < 1) || (is_array($externalCompanyId) && count($externalCompanyId) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($externalCompanyId) && !is_string($externalCompanyId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($externalCompanyId)), __LINE__);
        }
        $this->ExternalCompanyId = $externalCompanyId;
        return $this;
    }
    /**
     * Get RequestId value
     * @return string|null
     */
    public function getRequestId()
    {
        return $this->RequestId;
    }
    /**
     * Set RequestId value
     * @param string $requestId
     * @return \Onesourceav\StructType\ValidateAddressRequest
     */
    public function setRequestId($requestId = null)
    {
        // validation for constraint: string
        if (!is_null($requestId) && !is_string($requestId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($requestId)), __LINE__);
        }
        $this->RequestId = $requestId;
        return $this;
    }
    /**
     * Get ReturnInputData value
     * @return bool|null
     */
    public function getReturnInputData()
    {
        return $this->ReturnInputData;
    }
    /**
     * Set ReturnInputData value
     * @param bool $returnInputData
     * @return \Onesourceav\StructType\ValidateAddressRequest
     */
    public function setReturnInputData($returnInputData = false)
    {
        // validation for constraint: boolean
        if (!is_null($returnInputData) && !is_bool($returnInputData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($returnInputData)), __LINE__);
        }
        $this->ReturnInputData = $returnInputData;
        return $this;
    }
    /**
     * Get LogLevel value
     * @return string|null
     */
    public function getLogLevel()
    {
        return $this->LogLevel;
    }
    /**
     * Set LogLevel value
     * @uses \Onesourceav\EnumType\LogLevelType::valueIsValid()
     * @uses \Onesourceav\EnumType\LogLevelType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $logLevel
     * @return \Onesourceav\StructType\ValidateAddressRequest
     */
    public function setLogLevel($logLevel = 'WARN')
    {
        // validation for constraint: enumeration
        if (!\Onesourceav\EnumType\LogLevelType::valueIsValid($logLevel)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $logLevel, implode(', ', \Onesourceav\EnumType\LogLevelType::getValidValues())), __LINE__);
        }
        $this->LogLevel = $logLevel;
        return $this;
    }
    /**
     * Get AddressRequest value
     * @return \Onesourceav\StructType\AddressRequestType[]|null
     */
    public function getAddressRequest()
    {
        return $this->AddressRequest;
    }
    /**
     * Set AddressRequest value
     * @throws \InvalidArgumentException
     * @param \Onesourceav\StructType\AddressRequestType[] $addressRequest
     * @return \Onesourceav\StructType\ValidateAddressRequest
     */
    public function setAddressRequest(array $addressRequest = array())
    {
        foreach ($addressRequest as $validateAddressRequestAddressRequestItem) {
            // validation for constraint: itemType
            if (!$validateAddressRequestAddressRequestItem instanceof \Onesourceav\StructType\AddressRequestType) {
                throw new \InvalidArgumentException(sprintf('The AddressRequest property can only contain items of \Onesourceav\StructType\AddressRequestType, "%s" given', is_object($validateAddressRequestAddressRequestItem) ? get_class($validateAddressRequestAddressRequestItem) : gettype($validateAddressRequestAddressRequestItem)), __LINE__);
            }
        }
        $this->AddressRequest = $addressRequest;
        return $this;
    }
    /**
     * Add item to AddressRequest value
     * @throws \InvalidArgumentException
     * @param \Onesourceav\StructType\AddressRequestType $item
     * @return \Onesourceav\StructType\ValidateAddressRequest
     */
    public function addToAddressRequest(\Onesourceav\StructType\AddressRequestType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Onesourceav\StructType\AddressRequestType) {
            throw new \InvalidArgumentException(sprintf('The AddressRequest property can only contain items of \Onesourceav\StructType\AddressRequestType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AddressRequest[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesourceav\StructType\ValidateAddressRequest
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

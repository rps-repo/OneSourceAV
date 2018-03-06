<?php

namespace Onesourceav\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateAddressResponse StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines the SOAP:Body of the address validation webservice response
 * @subpackage Structs
 */
class ValidateAddressResponse extends AbstractStructBase
{
    /**
     * The ExternalCompanyId
     * Meta informations extracted from the WSDL
     * - documentation: External Company Id within the Sabrix system. This is a carried over from the request.
     * - maxOccurs: 1
     * - minOccurs: 1
     * - minLength: 1
     * @var string
     */
    public $ExternalCompanyId;
    /**
     * The RequestId
     * Meta informations extracted from the WSDL
     * - documentation: Optional identifier to correlate the request and response on the caller's system. This value will is carried over from the request.
     * - minOccurs: 0
     * @var string
     */
    public $RequestId;
    /**
     * The RequestStatus
     * @var \Onesourceav\StructType\RequestStatus
     */
    public $RequestStatus;
    /**
     * The AddressResponse
     * Meta informations extracted from the WSDL
     * - documentation: Response details for each address in the request
     * - maxOccurs: unbounded
     * @var \Onesourceav\StructType\AddressResponseType[]
     */
    public $AddressResponse;
    /**
     * Constructor method for ValidateAddressResponse
     * @uses ValidateAddressResponse::setExternalCompanyId()
     * @uses ValidateAddressResponse::setRequestId()
     * @uses ValidateAddressResponse::setRequestStatus()
     * @uses ValidateAddressResponse::setAddressResponse()
     * @param string $externalCompanyId
     * @param string $requestId
     * @param \Onesourceav\StructType\RequestStatus $requestStatus
     * @param \Onesourceav\StructType\AddressResponseType[] $addressResponse
     */
    public function __construct($externalCompanyId = null, $requestId = null, \Onesourceav\StructType\RequestStatus $requestStatus = null, array $addressResponse = array())
    {
        $this
            ->setExternalCompanyId($externalCompanyId)
            ->setRequestId($requestId)
            ->setRequestStatus($requestStatus)
            ->setAddressResponse($addressResponse);
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
     * @return \Onesourceav\StructType\ValidateAddressResponse
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
     * @return \Onesourceav\StructType\ValidateAddressResponse
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
     * Get RequestStatus value
     * @return \Onesourceav\StructType\RequestStatus|null
     */
    public function getRequestStatus()
    {
        return $this->RequestStatus;
    }
    /**
     * Set RequestStatus value
     * @param \Onesourceav\StructType\RequestStatus $requestStatus
     * @return \Onesourceav\StructType\ValidateAddressResponse
     */
    public function setRequestStatus(\Onesourceav\StructType\RequestStatus $requestStatus = null)
    {
        $this->RequestStatus = $requestStatus;
        return $this;
    }
    /**
     * Get AddressResponse value
     * @return \Onesourceav\StructType\AddressResponseType[]|null
     */
    public function getAddressResponse()
    {
        return $this->AddressResponse;
    }
    /**
     * Set AddressResponse value
     * @throws \InvalidArgumentException
     * @param \Onesourceav\StructType\AddressResponseType[] $addressResponse
     * @return \Onesourceav\StructType\ValidateAddressResponse
     */
    public function setAddressResponse(array $addressResponse = array())
    {
        foreach ($addressResponse as $validateAddressResponseAddressResponseItem) {
            // validation for constraint: itemType
            if (!$validateAddressResponseAddressResponseItem instanceof \Onesourceav\StructType\AddressResponseType) {
                throw new \InvalidArgumentException(sprintf('The AddressResponse property can only contain items of \Onesourceav\StructType\AddressResponseType, "%s" given', is_object($validateAddressResponseAddressResponseItem) ? get_class($validateAddressResponseAddressResponseItem) : gettype($validateAddressResponseAddressResponseItem)), __LINE__);
            }
        }
        $this->AddressResponse = $addressResponse;
        return $this;
    }
    /**
     * Add item to AddressResponse value
     * @throws \InvalidArgumentException
     * @param \Onesourceav\StructType\AddressResponseType $item
     * @return \Onesourceav\StructType\ValidateAddressResponse
     */
    public function addToAddressResponse(\Onesourceav\StructType\AddressResponseType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Onesourceav\StructType\AddressResponseType) {
            throw new \InvalidArgumentException(sprintf('The AddressResponse property can only contain items of \Onesourceav\StructType\AddressResponseType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AddressResponse[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Onesourceav\StructType\ValidateAddressResponse
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

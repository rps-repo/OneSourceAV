<?php

namespace Onesourceav\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Validate ServiceType
 * @subpackage Services
 */
class Validate extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ValidateAddress
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Onesourceav\StructType\ValidateAddressRequest $validateAddressRequest
     * @return \Onesourceav\StructType\ValidateAddressResponse|bool
     */
    public function ValidateAddress(\Onesourceav\StructType\ValidateAddressRequest $validateAddressRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->ValidateAddress($validateAddressRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Onesourceav\StructType\ValidateAddressResponse
     */
    public function getResult()
    {
        return parent::getResult();
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

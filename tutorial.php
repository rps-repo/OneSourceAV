<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://partnerdev2-uat.hostedtax.thomsonreuters.com/avs/sav.wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 * ################################################################################
 * Don't forget to add wsdltophp/packagebase:dev-master to your main composer.json.
 * ################################################################################
 */
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://partnerdev2-uat.hostedtax.thomsonreuters.com/avs/sav.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Onesourceav\ClassMap::get(),
);
/**
 * Samples for Validate ServiceType
 */
$validate = new \Onesourceav\ServiceType\Validate($options);
/**
 * Sample call for ValidateAddress operation/method
 */
if ($validate->ValidateAddress(new \Onesourceav\StructType\ValidateAddressRequest()) !== false) {
    print_r($validate->getResult());
} else {
    print_r($validate->getLastError());
}

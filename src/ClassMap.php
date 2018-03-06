<?php

namespace Onesourceav;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'ValidateAddressRequest' => '\\Onesourceav\\StructType\\ValidateAddressRequest',
            'ValidateAddressResponse' => '\\Onesourceav\\StructType\\ValidateAddressResponse',
            'RequestStatus' => '\\Onesourceav\\StructType\\RequestStatus',
            'AddressRequestType' => '\\Onesourceav\\StructType\\AddressRequestType',
            'AddressResponseType' => '\\Onesourceav\\StructType\\AddressResponseType',
            'Messages' => '\\Onesourceav\\StructType\\Messages',
            'ResponseAddress' => '\\Onesourceav\\StructType\\ResponseAddress',
            'PropertyListType' => '\\Onesourceav\\StructType\\PropertyListType',
            'PropType' => '\\Onesourceav\\StructType\\PropType',
            'AddressType' => '\\Onesourceav\\StructType\\AddressType',
            'AddressMessageType' => '\\Onesourceav\\StructType\\AddressMessageType',
        );
    }
}

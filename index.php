<?php
/*
 * PHP SOAP - Create a SOAP Server, a SOAP Client and SoapFault handlers
 */

//a basic API class
class MyAPI {
    function hello() {
        return "Hello";
    }
    
    function hell() {
      return new SoapFault("1234234", "Test soapFault message");
    }

}
//when in non-wsdl mode the uri option must be specified
$options=array('uri'=>'http://localhost/test_program/soap/?wsdl');
//create a new SOAP server
$server = new SoapServer(NULL,$options);
//attach the API class to the SOAP Server
$server->setClass('MyAPI');
//start the SOAP requests handler
$server->handle();

echo "server started";
?>
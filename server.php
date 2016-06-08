
<?php
/*
 * PHP SOAP - How to create a SOAP Server and a SOAP Client
 */

//a basic API class
ini_set("soap.wsdl_cache_enabled", "0"); // disabling WSDL cache

class MyAPI {
    function hello() {
        return "Hello";
    }

}
//when in non-wsdl mode the uri option must be specified
$options=array('uri'=>'http://localhost/test_program/soap/');
//create a new SOAP server
$server = new SoapServer(NULL,$options);
//attach the API class to the SOAP Server
$server->setClass('MyAPI');
//start the SOAP requests handler
$server->handle();

// new server :

<?php 
/* class MySoapService { 
  private $user_is_valid; 

  function MyHeader($header) { 
    if ((isset($header->Username)) && (isset($header->Password))) { 
      if (ValidateUser($header->Username, $header->Password)) { 
        $user_is_valid = true; 
      } 
    } 
  } 

  function MySoapRequest($request) { 
    if ($user_is_valid) { 
      // process request 
    } 
    else { 
      throw new MyFault("MySoapRequest", "User not valid."); 
    } 
  } 
}  */
?>



?>

 <?php
 /*
 * PHP SOAP - How to create a SOAP Server and a SOAP Client
 */

/* $options = array('location' => 'http://localhost/test_program/soap/server.php', 
                  'uri' => 'http://localhost/test_program/soap/');
//create an instante of the SOAPClient (the API will be available)
$api = new SoapClient(NULL, $options);
//call an API method
echo $api->hello(); */
 ?>
 <?php
/*
 * PHP SOAP - Create a SOAP Server, a SOAP Client and SoapFault handlers
 */
try {
    $options = array('location' => 'http://localhost/test_program/soap/server.php',
        'uri' => 'http://localhost/test_program/soap/hello/');
    //create an instante of the SOAPClient (the API will be available)
    $api = new SoapClient(NULL, $options);
    //call an API method that does not exists in order to trigger a SOAPFault exception
    echo $api->hell();
} catch (SOAPFault $exception) {
  //catches the SOAPFault exceptions
    print $exception;
}
?>
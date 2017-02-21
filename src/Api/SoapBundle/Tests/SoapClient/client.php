<?php
/*$client = new SoapClient("http://localhost:8000/api/soap/check?wsdl",array("trace"=>1));
//$client->__setLocation('http://127.0.0.1:8000/api/soap/check');
$response = $client->check('Chuck');
var_dump($response);*/
echo '<hr>';
ini_set('soap.wsdl_cache_enabled',0);
ini_set('soap.wsdl_cache_ttl',0);

$url = "http://localhost:8000/api/soap/check?wsdl";
$client = new SoapClient($url, array("trace" => 1, "exception" => 0,'cache_wsdl' => 0));
//$result = $client->__call('hello',['ola']);
var_dump($client);
try {

    $result = $client->__soapCall('hello',['ola']);

    echo "<pre>".print_r($result, true)."</pre>";
    if($result->GetMessageResult->Status == "Success")
    {
        echo "Item deleted!";
    }
}
catch (SoapFault $exception) {
    echo $exception->getMessage();
}

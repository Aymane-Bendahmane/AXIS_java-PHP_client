<?php

require_once('nusoap.php');
$client = new nusoap_client("http://localhost:8080/Customer/services/service?wsdl",'wsdl');


?>
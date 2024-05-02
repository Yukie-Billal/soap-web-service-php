<?php

$wsdl = "http://soap-web-service.test/calculator.wsdl";

$client = new SoapClient($wsdl);

$result_add = $client->add(5, 3);
echo "Hasil tambah: $result_add\n";
echo "<br>";
$result_subtract = $client->subtract(10, 4);
echo "Hasil pengurangan: $result_subtract";
?>

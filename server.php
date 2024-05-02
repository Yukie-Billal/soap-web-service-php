<?php 

class Calculator {
	public function add($num1, $num2) {
		return $num1 + $num2;
	}

	public function subtract($num1, $num2) {
		return $num1 - $num2;
	}
}

$server = new SoapServer(null, array('uri' => "http://soap-web-service.test"));

$server->setClass("Calculator");

$server->handle();
?>
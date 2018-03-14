<?php
	header('Content-Type: text/plain');
	require_once("../src/autoload.php");
	$cliente = new \Reniec\Reniec();
	$dni = ( isset($_REQUEST["ndni"]))? $_REQUEST["ndni"] : false;
	echo $cliente->search( $dni, true );
?>

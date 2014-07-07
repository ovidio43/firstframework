<?php
/*
*el frontend controller se encarga de configurar nuestra aplicacion
*/
require'config.php';
require'helpers.php';
// library
require'library/Request.php';
require'library/Inflector.php';
// llamar al controlador indicado

if(empty($_GET['url'])){
	$url = "";
}else{
	$url = $_GET['url'];
}

$request = new Request($url);
var_dump($request->execute());
//controller($_GET['url']);

<?php
ini_set('display_errors', true);
error_reporting(E_ALL);

$confidencial="esto es confidencial";
$languaje = "PHP";
// declarando una funcion
function view($languaje){
	require "view.php";	
}
//llamando una funcion
view($languaje);
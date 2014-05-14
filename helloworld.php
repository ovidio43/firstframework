<?php
$confidencial="esto es confidencial";
$languaje = "PHP";
function view($languaje){
	require "view.php";	
}
view($languaje);
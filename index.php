<?php
/*
*el frontend controller se encarga de configurar nuestra aplicacion
*/
require'config.php';
require'helpers.php';
// llamar al controlador indicado
controller($_GET['url']);

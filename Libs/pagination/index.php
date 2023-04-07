<?php
require_once '../../vendor/autoload.php';
require_once '../../vendor/stefangabos/zebra_pagination.php';
$conexion = new mysqli("192.168.0.7", "root", "123", "notas_master");
$conexion->query("SET NAMES 'utf8'");

$conexion->query("SELECT * FROM notas");
$numero_elementos = $consulta->num_rows;

var_dump($numero_elementos);

$pagination = new Zebra_Pagination();
$pagination->records($numero_elementos);
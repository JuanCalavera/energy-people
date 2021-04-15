<?php

include 'controller.php';

$required['name'] = $_POST['name'];
$required['codigo'] = $_POST['codigo'];
$required['operadora'] = $_POST['operadora'];
$required['tipo'] = $_POST['tipo'];
$required['valor'] = $_POST['valor'];
$required['data'] = $_POST['data'];

if($required){
$controller = new Controller();
echo $controller->insert($required['name'], $required['codigo'], $required['operadora'], $required['tipo'], $required['valor'], $required['data']);

}
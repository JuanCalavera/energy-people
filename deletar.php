<?php

include 'controller.php';

$id = $_POST['id'];

$controller = new Controller();

echo $controller->delete($id);
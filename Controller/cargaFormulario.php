<?php
require_once '../Model/Articulo.php';

$datosArticulo = Articulo::getArticulosById($_GET['id']);

include '../View/formularioModificar.php';

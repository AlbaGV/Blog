<?php
  require_once '../Model/Articulo.php';

  // Obtiene todas los articulos
  $data['articulos'] = Articulo::getArticulos();
  
  // Carga la vista de listado
  include '../View/listado.php';
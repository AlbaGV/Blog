<?php

  require_once '../Model/Articulo.php';


  // inserta la oferta en la base de datos
  $articuloAux = new Articulo($_POST['id'], $_POST['titulo'], $_POST['contenido']);
  $articuloAux->update();
  header("Location: index.php");
  
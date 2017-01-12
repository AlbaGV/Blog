<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Entradas</title>
    <link href="../View/css/css/bootstrap.min.css" rel="stylesheet">
         <style>
             #body{
                 background-image: url("../View/images/fondo.png");
             }     

        
            #titulo {
                font-family: miFuente;
                font-size: 354%;
                text-align: center;
                color: white;
                text-shadow: 0 1px 0 #ccc, 0 2px 0 #c9c9c9, 0 3px 0 #bbb, 0 4px 0 #b9b9b9, 0 5px 0 #aaa, 0 6px 1px rgba(0, 0, 0, 0.1), 0 0 5px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.3), 0 3px 5px rgba(0, 0, 0, 0.2), 0 5px 10px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.2), 0 20px 20px rgba(0, 0, 0, 0.15); }

              @font-face {
                font-family: 'miFuente';
                src: url("../View/css/fuentes/Pacifico.ttf"); }
        </style> 
  </head>
  <body>
      <h1 id="titulo">Blog</h1><br>
  <a class="btn btn-success center-block" href="../Controller/nuevoArticulo.php" role="button">
          <span class="glyphicon glyphicon-ok"></span>Nueva Entrada
        </a>
  <hr>
  <?php
    foreach($data['articulos'] as $articulo)  {
    ?>
      <div class="panel panel-primary">
          <div class="panel-heading text-center">
                <h3><?=$articulo->getTitulo()?></h3>
            </div>
            <div class="panel-body text-center">
                <p>Articulo publicado en: <?=$articulo->getFecha()?></p><br>
                <p><?=$articulo->getContenido()?></p><br>
                <a class="btn btn-danger center-block" href="../Controller/borraArticulo.php?id=<?=$articulo->getId()?>" role="button">
                    <span class="glyphicon glyphicon-remove"></span>Borrar
                  </a>
                <a class="btn btn-info center-block" href="../Controller/cargaFormulario.php?id=<?=$articulo->getId()?>" role="button">
                    <span class="glyphicon glyphicon-pencil"></span>Modificar
                  </a>
            </div>
      </div>    
    <?php
    }
  ?>
  </body>
</html>

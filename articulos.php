<?php

  $conexion= new pdo('mysql:host=localhost;dbname=mitienda','root','');

$consulta=$conexion->prepare('SELECT * FROM articulos ');
$consulta->execute();
require 'header.php';
?>
<DOCTYPE html>
  <html>
  <head>
       <link rel="stylesheet"  href="AdminLTE.css">
  <link rel="stylesheet"  href="AdminLTE.min.css">
  <link rel="stylesheet"  href="blue.css">
  <link rel="stylesheet"  href="bootstrap.min.css">
 
  <link rel="stylesheet"  href="font-awesome.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title> Articulos </title>
  </head>
  <body>
    
    <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="row">
        <div class="col-md-12">
      <div class="box">
<div class="panel-body">

<a href="tabla_articulos.php" download="articulo.xls">
<div class="box-header with-border">
  <h1 class="box-title">Descargar <button class="btn btn-success"  id="btnagregar"><i class="fa fa-plus-circle"></i>Ecxel</button></h1>
  <div class="box-tools pull-right">
  </div>
</div>
</a>



<div class="panel-body table-responsive" id="listadoregistros">
  <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
    <thead>
      <th>id Articulo</th>
      <th>Marca</th>
      <th>Descripcion</th>
      <th>Cantidad</th>
      <th>Color</th>
      <th>Talla</th>
      <th>Precio</th>
      <th>Codigo</th>
      <th>Editar</th>
      <th>Eliminar</th>
    </thead>
    <?php
$resultados=$consulta->fetchALL();
foreach($resultados as $alu){
   
?>
    <tbody>
   
   
      <td><?php echo $alu["id_articulo"]?></th>
    <th><?php echo $alu["nombre_a"]?></th>
    <th><?php echo $alu["descripcion"]?></th>
    <th><?php echo $alu["cantidad"]?></th>
    <th><?php echo $alu["color"]?></th>
    <th><?php echo $alu["talla"]?></th>
    <th><?php echo $alu["precio"]?></th>
    <th><?php echo $alu["codigo"]?></th>
    <th><p class="form_link"><a href="editarhtml.php" > Editar </a></p></th>
    <th><p class="form_link"><a href="eliminarhtml.php" > Eliminar </a></p></th>
      
    
    <?php
    }




?>   
  </table>
</div>
<a class="btn btn-danger"  href="form.php" ><button class="btn btn-success"  id="btnagregar"><i class="fa fa-arrow-circle-left"></i>Regresar</button></a>

</div>
 </div>
      </div>
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
</body>
</html>





<?php
require 'header.php';
  $conexion= new pdo('mysql:host=localhost;dbname=mitienda','root','');

$consulta=$conexion->prepare('SELECT * FROM articulos ');
$consulta->execute();
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



  <div class="panel-body table-responsive" id="listadoregistros">
  <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
   <tr>
      <td>id Articulo</td>
      <td>Nombre</td>
      <td>Descripcion</td>
      <td>Cantidad</td>
      <td>Color</td>
      <td>Talla</td>
      <td>Precio</td>
      <td>Codigo</td>
      </tr>
    
    <?php
$resultados=$consulta->fetchALL();
foreach($resultados as $alu){
   
?>
    
   <tr>
   
      <td><?php echo $alu["id_articulo"]?></td>
    <td><?php echo $alu["nombre_a"]?></td>
    <td><?php echo $alu["descripcion"]?></td>
    <td><?php echo $alu["cantidad"]?></td>
    <td><?php echo $alu["color"]?></td>
    <td><?php echo $alu["talla"]?></td>
    <td><?php echo $alu["precio"]?></td>
    <td><?php echo $alu["codigo"]?></td>
    </tr>
      
    
    <?php
    }




?>   
  

</table>
</div>
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
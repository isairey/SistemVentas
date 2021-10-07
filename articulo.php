<?php
require 'header.php';
$conexion= new pdo('mysql:host=localhost;dbname=mitienda','root','');
$nom=$_POST["nom"];
$consulta=$conexion->prepare("SELECT * FROM articulos where nombre= '$nom' ");
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
    <title> BUSACR </title>
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

<a href="new_venta.html" download="alumnos.xls">
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
      <th>Nombre</th>
      <th>Descripcion</th>
      <th>Cantidad</th>
      <th>Color</th>
      <th>Talla</th>
      <th>Precio</th>
      <th>Codigo</th>
      
         </thead>
    <?php
$resultados=$consulta->fetchALL();
foreach($resultados as $alu){
   
?>
    <tbody>
   
   
      <td><?php echo $alu["id_articulo"]?></th>
    <th><?php echo $alu["nombre"]?></th>
    <th><?php echo $alu["descripcion"]?></th>
    <th><?php echo $alu["cantidad"]?></th>
    <th><?php echo $alu["color"]?></th>
    <th><?php echo $alu["talla"]?></th>
    <th><?php echo $alu["precio"]?></th>
    <th><?php echo $alu["codigo"]?></th>
    
    
      
    
    <?php
    }




?>   
  </table>
</div>
<a class="btn btn-danger"  href="form.php" ><button class="btn btn-success"  id="btnagregar"><i class="fa fa-plus-circle"></i>Regresar</button></a>
 </td>
</tbody>


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
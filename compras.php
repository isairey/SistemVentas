<?php
require 'header.php';
  $conexion= new pdo('mysql:host=localhost;dbname=mitienda','root','');

$consulta=$conexion->prepare('SELECT * FROM compras ');
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
    <title> NUEVOS USUARIOS </title>
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

    <a href="agregar_compra.php">
<div class="box-header with-border">
  <h1 class="box-title"><b>+</b> <button class="btn btn-success"  id="btnagregar"><i class="fa fa-plus-circle"></i>Agregar</button></h1>
  <div class="box-tools pull-right">
  </div>
</div>
</a>

<a href="tabla_compras.html" download="alumnos.xls">
<div class="box-header with-border">
  <h1 class="box-title">Descargar <button class="btn btn-success"  id="btnagregar"><i class="fa fa-plus-circle"></i>Ecxel</button></h1>
  <div class="box-tools pull-right">
  </div>
</div>
</a>



<div class="panel-body table-responsive" id="listadoregistros">
  <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
    <thead>
      <th>id Compra</th>
      <th>Marca Producto</th>
      <th>Descripcion</th>
      <th>Proveedor</th>
      <th>DIreccion</th>
      <th>Telefono</th>
      <th>Cantidad</th>
      <th>Fecha</th>
      <th>Total</th>
      
    </thead>
    <?php
$resultados=$consulta->fetchALL();
foreach($resultados as $alu){
   
?>
    <tbody>
    </tbody>
   
      <td><?php echo $alu["id_compra"]?></th>
    <th><?php echo $alu["marca_producto"]?></th>
    <th><?php echo $alu["descripcion"]?></th>
    <th><?php echo $alu["proveedor"]?></th>
    <th><?php echo $alu["direccion"]?></th>
    <th><?php echo $alu["telefono"]?></th>
    <th><?php echo $alu["cantidad"]?></th>
    <th><?php echo $alu["fecha"]?></th>
     <th><?php echo $alu["total"]?></th>
    
      
    
    <?php
    }




?>   
  </table>
</div>
<a class="btn btn-danger"  href="form.php" ><button class="btn btn-success"  id="btnagregar"><i class="fa fa-arrow-circle-left"></i>Regresar</button></a>
</td>
</table>
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




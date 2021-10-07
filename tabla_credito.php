<?php
require 'header.php';
  $conexion= new pdo('mysql:host=localhost;dbname=mitienda','root','');

$consulta=$conexion->prepare('SELECT * FROM pagos ');
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
    <title> VENTAS A CREDITO </title>
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

    <a class="btn btn-danger"  href="credito.php" ><b>+</b><button class="btn btn-success"  id="btnagregar"><i class="fa fa-plus-circle"></i>Agregar</button></a>


<a class="btn btn-danger"   href="tabla_credito.html" download="credito.xls" ><button class="btn btn-success"  id="btnagregar"><i class="fa fa-plus-circle"></i>Descargar</button></a>

<a class="btn btn-danger"  href="abono.php" ><b>+</b><button class="btn btn-success"  id="btnagregar"><i class="fa fa-plus-circle"></i>Abonar</button></a>

<div class="panel-body table-responsive" id="listadoregistros">
  <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
    <thead>
      <th>id Compra</th>
      <th>Marca del articulo</th>
      <th>Total</th>
      <th>Deve</th>
      <th>Codigo del producto</th>
      <th>Cantidad</th>
      <th>Eliminar</th>
    </thead>
    <?php
$resultados=$consulta->fetchALL();
foreach($resultados as $alu){
   
?>
    <tbody>
    </tbody>
   
      <th><?php echo $alu["id_pago"]?></th>
    <th><?php echo $alu["nombre_art"]?></th>
    <th><?php echo $alu["total"]?></th>
     <th><?php echo $alu["deve"]?></th>
    <th><?php echo $alu["codigo"]?></th>
    <th><?php echo $alu["cantidad"]?></th>
   
   
        <th><p class="form_link"><a href="eliminar_chtml.php" > Eliminar </a></p></th>
      
    
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




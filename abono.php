<?php
require 'header.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title> ABONAR </title>
   <link rel="stylesheet"  href="AdminLTE.css">
  <link rel="stylesheet"  href="AdminLTE.min.css">
  <link rel="stylesheet"  href="blue.css">
  <link rel="stylesheet"  href="bootstrap.min.css">
 
  <link rel="stylesheet"  href="font-awesome.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

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


  <?php
date_default_timezone_set("America/Mexico_City");
$fecha_actual=date("Y-m-d ");
  ?>
<div class="panel-body" id="formularioregistros">
  <form action="abono1.php" name="formulario" id="formulario" method="POST">
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">ID de Compra a Abonar(*):</label>
      <input class="form-control" type="text" name="id" id="apellidos" maxlength="100" placeholder="ID" required="">
    </div>
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Cantidad a Abonar(*):</label>
      <input class="form-control" type="hidden" name="can" id="idusuario">
      <input class="form-control" type="text" name="can" id="nombre" maxlength="100" placeholder="Monto" required="">
    </div>
<div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Codigo del articuo(*):</label>
      <input class="form-control" type="text" name="cod" id="apellidos" maxlength="100" placeholder="Codigo" required="">
    </div>
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Fecha(*):</label>
      <input class="form-control" type="text" name="fec" id="apellidos" maxlength="100"value="<?=$fecha_actual?>" required="">
    </div>
    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i>  Guardar</button>

 
      <a class="btn btn-danger"  href="tabla_credito.php" type="button"><i   class="fa fa-arrow-circle-left"></i> Cancelar</a>
   

    </div>
  </form>
</div>
</body>
</html>
<?php

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
    

<div class="panel-body table-responsive" id="listadoregistros">
  <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
    <thead>
      <th>id Compra</th>
      <th>Marca del articulo</th>
      <th>Total</th>
      <th>Codigo del producto</th>
      <th>Cantidad</th>
      
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
    <th><?php echo $alu["codigo"]?></th>
    <th><?php echo $alu["cantidad"]?></th>
   
      
    
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
<?php

require 'header.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title> COMPRAS </title>
    
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
$fecha_actual=date("Y-m-d H:i:s");
  ?>
<div class="panel-body" id="formularioregistros">
  <form action="agregar_compra1.php" name="formulario" id="formulario" method="POST">
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Marca del Producto(*):</label>
      <input class="form-control" type="text" name="mar" id="codigo" maxlength="100" placeholder="Marca" required="">
    </div>
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Descripcion(*):</label>
      <input class="form-control" type="hidden" name="des" id="idusuario">
      <input class="form-control" type="text" name="des" id="nombre" maxlength="100" placeholder="Descripcion" required="">
    </div>
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Nombre del provedor(*):</label>
      <input class="form-control" type="hidden" name="nom" id="idusuario">
      <input class="form-control" type="text" name="nom" id="nombre" maxlength="100" placeholder="Nombre" required="">
    </div>
<div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Direccion del proveedor(*):</label>
      <input class="form-control" type="text" name="dir" id="id" maxlength="100" placeholder="Direccion" required="">
    </div>
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Telefono(*):</label>
      <input class="form-control" type="text" name="tel" id="id" maxlength="100" placeholder="Telefono" required="">
    </div>
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Cantidad de articulos(*):</label>
      <input class="form-control" type="text" name="can" id="id" maxlength="100" placeholder="Cantidad" required="">
    </div>
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Fecha(*):</label>
      <input class="form-control" type="text" name="fec" id="id" maxlength="100" value="<?=$fecha_actual?>" required="">
    </div>
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Precio por Pieza(*):</label>
      <input class="form-control" type="text" name="pre" id="id" maxlength="100" placeholder="Precio" required="">
    </div>
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Color del producto(*):</label>
      <input class="form-control" type="text" name="col" id="id" maxlength="100" placeholder="Color" required="">
    </div>
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Talla del producto(*):</label>
      <input class="form-control" type="text" name="tall" id="id" maxlength="100" placeholder="Talla" required="">
    </div>
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Codigo del produto(*):</label>
      <input class="form-control" type="text" name="cod" id="id" maxlength="100" placeholder="Codigo" required="">
    </div>
    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i>  Agregar</button>
      <a class="btn btn-danger"  href="compras.php" type="button"><i   class="fa fa-arrow-circle-left"></i> Cancelar </a>
    </div>

  </form>
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
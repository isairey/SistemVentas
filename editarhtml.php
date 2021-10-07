<?php
require 'header.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title> ACTUALIZAR DATOS</title>
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


<div class="panel-body" id="formularioregistros">
  <form action="editar.php" name="formulario" id="formulario" method="POST">
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">ID del articulo a editar(*):</label>
      <input class="form-control" type="text" name="id" id="apellidos" maxlength="100" placeholder="ID" required="">
    </div>
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Marca(*):</label>
      <input class="form-control" type="hidden" name="mar" id="idusuario">
      <input class="form-control" type="text" name="mar" id="nombre" maxlength="100" placeholder="Marca" required="">
    </div>
<div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Descripcion(*):</label>
      <input class="form-control" type="text" name="des" id="apellidos" maxlength="100" placeholder="Descripcion" required="">
    </div>
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Cantidad(*):</label>
      <input class="form-control" type="text" name="can" id="apellidos" maxlength="20" placeholder="Cantidad" required="">
    </div>

    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Color(*):</label>
      <input class="form-control" type="text" name="col" id="apellidos" maxlength="100" placeholder="Color" required="">
    </div>
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Talla(*):</label>
      <input class="form-control" type="text" name="tall" id="apellidos" maxlength="20" placeholder="Talla" required="">
    </div>
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Precio de articulo(*):</label>
      <input class="form-control" type="text" name="pre" id="apellidos" maxlength="20" placeholder="Precio" required="">
    </div>
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Codigo(*):</label>
      <input class="form-control" type="text" name="cod" id="email" maxlength="70" placeholder="Codigo" required="">
    </div>
    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i>  Guardar</button>

 
      <a class="btn btn-danger"  href="articulos.php" type="button"><i   class="fa fa-arrow-circle-left"></i> Cancelar</a>
   

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

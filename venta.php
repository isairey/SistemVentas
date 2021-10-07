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
<?php
date_default_timezone_set("America/Mexico_City");
$fecha_actual=date("Y-m-d ");
  ?>
<div class="panel-body" id="formularioregistros">
  <form action="venta1.php" name="formulario" id="formulario" method="POST">
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
     
      <label for="">Codigo del Producto(*):</label>
      <input class="form-control" type="text" name="cod" id="codigo" maxlength="100" placeholder="Codigo" required="">
      
       
    </div>

    
      
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Cantidad(*):</label>
      <input class="form-control" type="hidden" name="can" id="idusuario">
      <input class="form-control" type="text" name="can" id="nombre" maxlength="100" placeholder="Cantidad" required="">
    </div>
    
<div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">ID del articulo(*):</label>
      <input class="form-control" type="text" name="id" id="id" maxlength="100" placeholder="ID" required="">
    </div>
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Fecha(*):</label>
      <input class="form-control" type="text" name="fec" id="id" maxlength="100" value="<?=$fecha_actual?>"required="">
    </div>
    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i>  Vender</button>
      <a class="btn btn-danger"  href="ventas.php" type="button"><i   class="fa fa-arrow-circle-left"></i> Cancelar</a>
    </div>

  </form>
</div>

<?php

  $conexion= new pdo('mysql:host=localhost;dbname=mitienda','root','');

$consulta=$conexion->prepare('SELECT * FROM articulos ');
$consulta->execute();
?>

    



<div class="form-group col-lg-12 col-md-12 col-xs-12">
     <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
       <thead style="background-color:#A9D0F5">
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
   </tbody>
   
      <th><?php echo $alu["id_articulo"]?></th>
    <th><?php echo $alu["nombre_a"]?></th>
    <th><?php echo $alu["descripcion"]?></th>
    <th><?php echo $alu["cantidad"]?></th>
    <th><?php echo $alu["color"]?></th>
    <th><?php echo $alu["talla"]?></th>
    <th><?php echo $alu["precio"]?></th>
    <th><?php echo $alu["codigo"]?></th>
    
      
    
    <?php
    }




?> 
<?php

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
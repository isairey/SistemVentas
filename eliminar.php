<?php
require 'header.php';
try {
	$conexion= new pdo('mysql:host=localhost;dbname=mitienda','root','');

$consulta=$conexion->prepare('SELECT * FROM articulos');
$consulta->execute();

$resultados=$consulta->fetchALL();
foreach($resultados as $alu){
   $alu['id_articulo']." ".$alu['nombre_a']." ".$alu['talla'];
	 $alu['codigo']."".$alu['color']."".$alu['precio'];
$ids=$_POST["ids"];
if($alu['id_articulo']==$ids){
	echo "hola";
    $consulta="DELETE FROM articulos WHERE id_articulo='$ids'";
		if($conexion->query($consulta)===true){
	echo "actualizacion exitosa";
}

else{
	echo "  ";
}
}
else{
	echo "";
}	
} 

}catch (PDOException $e) {
	echo "ERROR: ".$e->getMessage();
}
?>

<DOCTYPE html>
  <html>
  <head>
      <link rel="stylesheet"  href="_all-skins.min.css">
  <link rel="stylesheet"  href="_all-skins.css">
  <link rel="stylesheet"  href="AdminLTE.css">
  <link rel="stylesheet"  href="AdminLTE.min.css">
  <link rel="stylesheet"  href="blue.css">
  <link rel="stylesheet"  href="bootstrap.min.css">
  <link rel="stylesheet"  href="bootstrap-select.min.css">
  <link rel="stylesheet"  href="font-awesome.css">
  <link rel="stylesheet"  href="ticket.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>  </title>
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
    <a href="form.php">
<div class="box-header with-border">
  <h1 class="box-title"> <button class="btn btn-success"  id="btnagregar"><i class="fa fa-plus-circle"></i>Regresar</button></h1>
  <div class="box-tools pull-right">
  </div>
</div>
</a>
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

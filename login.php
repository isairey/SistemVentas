<?php
try {
	$conexion= new pdo('mysql:host=localhost;dbname=mitienda','root','');

$consulta=$conexion->prepare('SELECT * FROM usuarios ');
$consulta->execute();

$resultados=$consulta->fetchALL();
foreach($resultados as $alu){
   $alu['id_usuario']." ".$alu['nombre'];
	 $alu['usuario']." ".$alu['contraseña'];


$usu= $_POST["logina"];
$cve=$_POST['clavea'];



 if(  $usu == $alu['usuario'] && $cve == $alu['contraseña'] ){
require 'header.php';
?>
<html lang="es">
<head>
  <meta charset="utf-8"/>
  <title>TIENDA </title>

<link rel="stylesheet"  href="estilo.css">
 
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


   

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
   <div class="small-box bg-green">
    
    <a href="ventas.php" class="small-box-footer">
    <div class="inner">
      <h5 style="font-size: 20px;">
        <strong>VENTAS</strong>
      </h5>
      <p>Módulo</p>
    </div>
    <div class="icon">
      <i class="fa fa-shopping-basket" aria-hidden="true"></i>
    </div>&nbsp;
     <div class="small-box-footer">
           <i class="fa"></i>
     </div>

    </a>
  </div>
</div>

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
   <div class="small-box bg-orange">
    
    <a href="compras.php" class="small-box-footer">
    <div class="inner">
      <h5 style="font-size: 20px;">
        <strong>COMPRAS</strong>
      </h5>
      <p>Módulo</p>
    </div>
    <div class="icon">
      <i class="fa fa-shopping-cart" aria-hidden="true"></i>
    </div>&nbsp;
     <div class="small-box-footer">
           <i class="fa"></i>
     </div>

    </a>
  </div>
</div>


<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
  <div class="small-box bg-aqua">
    
    <a href="buscarhtml.php" class="small-box-footer">
    <div class="inner">
      <h5 style="font-size: 20px;">
        <strong>BUSCAR VENTAS </strong>
      </h5>
      <p>Por fecha</p>
    </div>
    <div class="icon">
      <i class="fa fa-search" aria-hidden="true"></i>
    </div>&nbsp;
     <div class="small-box-footer">
           <i class="fa"></i>
     </div>

    </a>
  </div>
</div>



<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
  <div class="small-box bg-aqua">
    
    <a href="articulos.php" class="small-box-footer">
    <div class="inner">
      <h5 style="font-size: 20px;">
        <strong>ARTICULOS </strong>
      </h5>
      <p>Módulo</p>
    </div>
    <div class="icon">
      <i class="fa fa-list" aria-hidden="true"></i>
    </div>&nbsp;
     <div class="small-box-footer">
           <i class="fa"></i>
     </div>

    </a>
  </div>
</div>

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
  <div class="small-box bg-green">
    
    <a href="tabla_credito.php" class="small-box-footer">
    <div class="inner">
      <h5 style="font-size: 20px;">
        <strong>VENTAS A CREDITO</strong>
      </h5>
      <p>Módulo</p>
    </div>
    <div class="icon">
      <i class="fa fa-credit-card" aria-hidden="true"></i>
    </div>&nbsp;
     <div class="small-box-footer">
           <i class="fa"></i>
     </div>

    </a>
  </div>
</div>

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
   <div class="small-box bg-orange">
    
    <a href="index.html" class="small-box-footer">
    <div class="inner">
      <h5 style="font-size: 20px;">
        <strong>SALIR</strong>
      </h5>
      <p>Módulo</p>
    </div>
    <div class="icon">
      <i class="fa fa-times" aria-hidden="true"></i>
    </div>&nbsp;
     <div class="small-box-footer">
           <i class="fa"></i>
     </div>

    </a>
  </div>
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
<?php
}
else{

	?>
	<html>
	<head>
	 <link rel="stylesheet"  href="AdminLTE.css">
  <link rel="stylesheet"  href="AdminLTE.min.css">
  <link rel="stylesheet"  href="blue.css">
  <link rel="stylesheet"  href="bootstrap.min.css">
 <link rel="shortcut icon" href="favicon1.ico">
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

	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
  <div class="small-box bg-green">
    
    <a href="index.html" class="small-box-footer">
    <div class="inner">
      <h5 style="font-size: 20px;">
        <strong>REGRESAR </strong>
      </h5>
      <p>Regresar</p>
    </div>
    <div class="icon">
      <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
    </div>&nbsp;
     <div class="small-box-footer">
           <i class="fa"></i>
     </div>

    </a>
  </div>
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
	<?php
}

} 

}catch (PDOException $e) {
	echo "ERROR: ".$e->getMessage();
}

?>
<?php
require 'header.php';
try {
  $conexion= new pdo('mysql:host=localhost;dbname=mitienda','root','');

$consulta=$conexion->prepare('SELECT * FROM articulos ');
$consulta->execute();

$resultados=$consulta->fetchALL();
foreach($resultados as $alu){
   $alu['id_articulo']." ".$alu['nombre_a'];
   $alu['descripcion']."".$alu['cantidad']."".$alu['codigo'];

$cod= $_POST["cod"];
$retiro=$_POST['can'];
$marca=$_POST['mar'];

 if($alu['cantidad']==2 && $retiro==3){

  echo " lo siento pero no tengo esa cantidaad de productos por ahora"."<br>";
  echo " "."<br>";
}
else if($alu['cantidad']==1 && $retiro==3){

  echo " lo siento pero no tengo esa cantidaad de productos por ahora"."<br>";
  echo " "."<br>";
}
else if($alu['cantidad']==1 && $retiro==2){

  echo " lo siento pero no tengo esa cantidaad de productos por ahora"."<br>";
  echo " "."<br>";
}
if($alu['cantidad']==0 && $alu['nombre'] == $nom){

  echo " lo siento pero no tengo ese producto por ahora"."<br>";
  echo " "."<br>";
}

else if($retiro>3){

  echo "lo sinto usted solo puede comprar 3 productos como maximo"."<br>";
  echo " "."<br>";
}


else if($alu['cantidad']>= $retiro && $retiro<=3 && $alu['codigo']==$cod){
$dinero=$retiro*$alu['precio'];

     $resta=0;
  echo $alu['id_articulo']." ".$alu['nombre_a']." ";
  echo $alu['cantidad'];
  $retiro=$_POST["can"];
  $resta=$alu['cantidad']-$retiro;
  echo " la eliminacion  de el articulo quedo asi:    ".$resta."<br>";   
echo " hola";
    $cod= $_POST["cod"];
   
$consulta="UPDATE articulos SET cantidad=$resta WHERE codigo='$cod'";
if($conexion->query($consulta)===true){
  echo "actualizacion exitosa";
}
else{
 
}
 ?>
<?php

try {
  $conexion= new pdo('mysql:host=localhost;dbname=mitienda','root','');

$cod= $_POST["cod"];
$retiro=$_POST['can'];
$marca=$_POST['mar'];
 
 echo " "."<br>";   
$consulta=$conexion->prepare('INSERT INTO pagos (id_pago,nombre_art,total,deve,codigo,cantidad) VALUES (null,:nom,:tot,:dev,:cod,:can)');
        $consulta->bindParam(':nom',$_POST['mar']);
        $consulta->bindParam(':tot',$dinero);
        $consulta->bindParam(':dev',$dinero);
        $consulta->bindParam(':cod',$_POST['cod']);
        $consulta->bindParam(':can',$_POST['can']);
       
        $consulta->execute();
 

}catch (PDOException $e) {
  echo "ERROR: ".$e->getMessage();
}


?>
<?php
}
else{
  echo " "."<br>";
}
}
}catch (PDOException $e) {
  echo "ERROR: ".$e->getMessage();
}
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

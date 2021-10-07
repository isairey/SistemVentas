
<?php
require 'header.php';
try {
	$conexion= new pdo('mysql:host=localhost;dbname=mitienda','root','');




 $marca= $_POST["mar"];
 $des= $_POST["des"];
 $prov= $_POST["nom"];
 $dir=$_POST["dir"];
 $tel=$_POST["tel"];
$canti=$_POST["can"];
 $fec=$_POST["fec"];
 $pre=$_POST["pre"];
  $color=$_POST["col"];
 $talla=$_POST["tall"];
 $cod=$_POST["cod"];
echo  " el articulo  ".$marca." <br>";
 
 echo "se añadio exitosamente"; 

 $operacion=$pre*$canti; 
$consulta=$conexion->prepare('INSERT INTO compras (id_compra,marca_producto,descripcion,proveedor,direccion,telefono,cantidad,fecha,total) VALUES 
	(null,:mar,:des,:prov,:dir,:tel,:can,:fec,:tot)');
				$consulta->bindParam(':mar',$_POST['mar']);
				$consulta->bindParam(':des',$_POST['des']);
				$consulta->bindParam(':prov',$_POST['nom']);
				$consulta->bindParam(':dir',$_POST['dir']);
				$consulta->bindParam(':tel',$_POST['tel']);
				$consulta->bindParam(':can',$_POST['can']);
				$consulta->bindParam(':fec',$_POST['fec']);
				$consulta->bindParam(':tot',$operacion);
				
				$consulta->execute();
echo " hola ";


}catch (PDOException $e) {
	echo "ERROR: ".$e->getMessage();
}

?>

<?php
try {
	$conexion= new pdo('mysql:host=localhost;dbname=mitienda','root','');

       
$marca= $_POST["mar"];
 $des= $_POST["des"];
 $prov= $_POST["nom"];
 $dir=$_POST["dir"];
 $tel=$_POST["tel"];
$canti=$_POST["can"];
 $fec=$_POST["fec"];
 $pre=$_POST["pre"];
  $color=$_POST["col"];
 $talla=$_POST["tall"];
 $cod=$_POST["cod"];
 
echo  " el articulo  ".$marca." <br>";
 
 echo "se añadio exitosamente"; 

$consulta1=$conexion->prepare('INSERT INTO articulos (id_articulo,nombre_a,descripcion,cantidad,color,talla,precio,codigo) VALUES (null,:nom,:des,:can,:col,:tall,:pre,:cod)');
                $consulta1->bindParam(':nom',$_POST['mar']);
				$consulta1->bindParam(':des',$_POST['des']);
				$consulta1->bindParam(':can',$_POST['can']);
				$consulta1->bindParam(':col',$_POST['col']);
				$consulta1->bindParam(':tall',$_POST['tall']);
				$consulta1->bindParam(':pre',$_POST['pre']);
				$consulta1->bindParam(':cod',$_POST['cod']);
				
				$consulta1->execute();





}catch (PDOException $e) {
	echo "ERROR: ".$e->getMessage();
}
echo "  "."<br>";
echo " "."<br>";
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





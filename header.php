 <?php 
if (strlen(session_id())<1) 
  session_start();
  ?>
 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>CC | Odelot</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3 -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="_all-skins.min.css">
    
    <link rel="shortcut icon" href="favicon.ico">

    <!-- DATATABLES -->
   <link rel="stylesheet" type="text/css" href="jquery.dataTables.min.css">    
    <link href="buttons.dataTables.min.css" rel="stylesheet"/>
    <link href="responsive.dataTables.min.css" rel="stylesheet"/>

    <link rel="stylesheet" type="text/css" href="bootstrap-select.min.css">

  </head>

<body class="hold-transition skin-blue sidebar-mini">
  <!-- Load Facebook SDK for JavaScript -->


<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="280144326139427"
  theme_color="#0084ff"
  logged_in_greeting="Hola! deseas compartir algún sistema o descargar ?"
  logged_out_greeting="Hola! deseas compartir algún sistema o descargar ?">
</div>
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="escritorio.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>CC</b> A</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>CC</b> ADMIN</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

              <img src="img.jpg" class="user-image"  alt="User Image">

<i class="fa fa-cog fa-spin fa-3x fa-fw"></i>
<span class="sr-only">Loading...</span>

<span class="fa-stack fa-lg">
  <i class="fa fa-camera fa-stack-1x"></i>
  <i class="fa fa-ban fa-stack-2x text-danger"></i>
</span>
no tomar fotos

  


              <span class="hidden-xs"></span>
            </a>
           
          </li>
          <!-- Control Sidebar Toggle Button -->

        </ul>
      </div>
    </nav>
  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
<div class="user-panel">
        <div class="pull-left image">
          <img src="img.jpg" class="img-circle" style="width: 80px; height: 80px;" alt="User Image">
        </div>
        <div class="pull-left info">
          
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu tree" data-widget="tree">
      <li class="header">MENÚ DE NAVEGACIÓN</li>


      <li><a href="form.php"><i class="fa fa-home"></i> <span>Escritorio</span></a></li>
      <li><a href="ventas.php"><i class="fa fa-credit-card"></i> <span>Ventas</span></a></li>
      <li><a href="Compras.php"><i class="fa fa-shopping-cart"></i> <span>Compras</span></a></li>
      <li><a href="articulos.php"><i class="fa fa-list"></i> <span>Articulos</span></a></li>
      <li><a href="tabla_credito.php"><i class="fa fa-credit-card"></i> <span>Compras a credito</span></a></li>
      <li><a href="index.html"><i class="fa fa-times"></i> <span>Salir</span></a></li>

<!--
      <li class="treeview">
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Mensajes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="mensaje.php"><i class="fa fa-circle-o"></i> Mensaje</a></li>
          </ul>
      </li>

-->

      

  
      
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
</div>
</body>
</html>
﻿<?php
include_once("config.php");
include_once("sesion.php");

/*if(isset($_SESSION['usuario'])){
echo "Has iniciado Sesion: ".$_SESSION['usuario'];
}else{ 
header("location: index.php");
echo $_SESSION['usuario'];
}*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <script type="text/javascript" src="resources/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="resources/functions.js"></script>
    <link rel="stylesheet" href="css/foundation.css" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Consultar prestamo de llaves</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="resources/style.css" />
</head>
<body>
  <div class="row">
        <div class="columns large-10">
          <h1>
            <img style="width: 203px; height: 146px margin: -55px -216px -112px -140px;" src="images/jpg/logo.jpg" alt="Logo Universidad del Norte."/> 
          </h1>
        </div>
        <div class="columns large-2">
            <img style="width: 60px; height: 146px margin: -55px -216px -112px -140px;" src="<?php echo $_SESSION['ubicacion_foto'];  ?>">
            <?php echo $_SESSION['usuario'];?>
        </div>
  </div>

  <nav class="top-bar" data-topbar>
    <ul class="title-area">
      <li class="name">
        <!-- Titulo del Menu -->
        <h1><a href="#">Inventario de Hardware</a></h1>
      </li>
        <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
    </ul>

    <section class="top-bar-section">
      <span id="res"></span>
      <!-- Right Nav Section  menu lado derecho-->
      <ul class="right">
        <li><a href="inicio.php">Inicio</a></li>
      </ul>
    </section>
  </nav>
</head>
<body>
    <div id ="block"></div>
    <div class="container">
        <div id="popupbox"></div>
        <div id="content">
            <?php include_once ($view->contentTemplate); // incluyo el template que corresponda ?>
        </div>
    </div>
</body>
</html>
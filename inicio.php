<?php
include_once("config.php");
include_once("sesion.php");
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Inicio</title>
      <LINK REL="SHORTCUT ICON" HREF="uninorte.ico" />
      <link rel="stylesheet" href="css/foundation.css" />
      <!-- <Link href="css/estilo_maestro.css" type="text/css" rel="stylesheet">  -->
      <script src="js/vendor/modernizr.js"></script>
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
              <!-- Right Nav Section -->
              <ul class="right">
                <!--<li><a href="agregar_activo.php">Agregar</a></li> -->
                <li><a href="form_mantenimiento.php">Mantenimiento</a></li>
                <li><a href="acceso-php_logout.php">Cerrar sesion</a></li>
              </ul>
            </section>
        </nav>
        <br>

        <div class="row">
          <div class="columns large-12">
            <form method="post" action="">
                <div class="row">
                 <!-- A default button-group with small buttons inside -->
                  <ul class="button-group">
                    <div class="columns large-3">
                      <h4>Modulo de Activos</h4>
                      <h4>Ingresar / Modificar</h4>
                      <li><a href="activo-form_ingresar_activo.php" class="button">Ingresar / Modificar equipo por activo</a></li>
                      <li><a href="activo-form_exportar_reubicacion.php" class="button">Exportar equipo reubicado</a></li>
                      <h4>Consulta de activos</h4>
                      <li><a href="activo-form_consultar_activo.php" class="button">Consultar un equipo por su activo</a></li>
                      <li><a href="activo-form_consultar_equipos_por_ubicacion.php" class="button">Consultar equipo por ubicacion.</a></li>
                      <!-- <li><a href="frmmodificar_equipo.php" class="button">Modificar Información de Orden de Compra</a></li> -->
                    </div>

                    <div class="columns large-3">
                      <h4>Modulo de Llaves</h4>
                      <h4>Ingresar / Modificar</h4>
                      <li><a href="llaves-form_ingresar_prestamo.php" class="button">Ingresar prestamo de llaves al sistema</a></li>
                      <h4>Consulta Prestamos</h4>
                      <li><a href="llaves-form_consultar_prestamo.php" class="button">Consultar / Recibir llaves en Lab Micros..</a></li>
                    </div>

                    <div class="columns large-3">
                      <h4>Modulo P. de red</h4>
                      <h4>Ingresar / Modificar</h4>
                      <li><a href="red-form_ingresar_punto_de_red.php" class="button">Consultar / Modificar Punto de red</a></li>
                      <li><a href="red-form_ingresar_punto_de_red_por_lotes.php" class="button">Ingresar Puntos de red por lotes</a></li>

                      <h4>Modulo Switches</h4>
                      <li><a href="switches-form_ingresar_switches.php" class="button">Ingresar Switches</a></li>
                      <li><a href="switches-form_consultar_switches.php" class="button">Consultar Switches</a></li>

                      <h4>Exportar a Excel</h4>
                      <!-- <li><a href="excel.php" class="button">Generar bitacora por puntos de red</a></li>-->
                      <li><a href="red-php_generar_bitacora_excel_punto_de_red.php" class="button">Generar bitacora por puntos de red</a></li>
                      <li><a href="red-php_generar_bitacora_excel_por_switches.php" class="button">Generar bitacora por switches</a></li>

                      <!-- <h4>Exportar a Pdf</h4> -->
                      <!-- <li><a href="excel.php" class="button">Generar bitacora por puntos de red</a></li>-->
                    <!--   <li><a href="red-php_generar_bitacora_pdf_punto_de_red.php" class="button">Generar bitacora por puntos de red</a></li>
                      <li><a href="red-php_generar_bitacora_pdf_por_switches.php" disabled class="button">Generar bitacora por switches</a></li> -->

                    </div>

                    <div class="columns large-3">
                      <h4>Modulo de Entrega </h4>
                      <h4>de Equipos </h4>
                      <li><a href="compras-form_compras.php" class="button">Modulo de Compras y Reubicaciones</a></li>
                      <li><a href="frmbitacora.php" class="button">Consultar Bitacora del Equipo.</a></li>
                    </div>

                    <div class="columns large-3">
                      <h4>Modulo de Prestamo </h4>
                      <h4>de Eq.de Soporte</h4>
                      <li><a href="soporte-form_inicio_soporte.php" class="button">Modulo de Soporte equipos</a></li>
                    </div>

                  </ul>
                </div>
            </form>
          </div>
        </div>
          <script src="js/vendor/jquery.js"></script>
          <script src="js/foundation.min.js"></script>
          <script src="js/usuario.js"></script>

          <script>
            $(document).foundation();
          </script>
  </body>
</html>
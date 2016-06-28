<?php
  include('config.php');

   	header('Content-Type: application/json');

    $conexion = mysql_connect($server,$username,$password);
    mysql_set_charset('utf8',$conexion);
    mysql_select_db($database);

    $punto_de_red = $_POST['punto_de_red'];

    //$query = "SELECT punto_de_red, dir_ip_sw, puerto_sw, vlan_puerto_sw, bloque, piso, cubiculo FROM puntos_de_red WHERE punto_de_red='$punto_de_red'";

    $query = "SELECT puntos_de_red_importar.punto_de_red, puntos_de_red_importar.bloque, puntos_de_red_importar.piso, puntos_de_red_importar.cubiculo, switches.sw_id, switches.dir_ip_sw, switches.unidad, bitacora_switches.id_sw, bitacora_switches.puerto_sw, bitacora_switches.vlan, bitacora_switches.punto_de_red 
    FROM puntos_de_red_importar JOIN bitacora_switches ON puntos_de_red_importar.punto_de_red = bitacora_switches.punto_de_red JOIN switches ON bitacora_switches.id_sw = switches.sw_id  WHERE bitacora_switches.punto_de_red = '$punto_de_red' AND bitacora_switches.id_sw = switches.sw_id";


		$resultado = mysql_query($query,$conexion);

    $numero_de_filas = mysql_num_rows($resultado);

    mysql_close($conexion);

    $consulta_punto_de_red = array();

    if( $numero_de_filas > 0){

    	$registro = mysql_fetch_array($resultado);
      $consulta_punto_de_red['punto_de_red'] = $registro['punto_de_red'];    
      $consulta_punto_de_red['dir_ip_sw'] = $registro['dir_ip_sw'];
      $consulta_punto_de_red['puerto_sw'] = $registro['puerto_sw'];
      $consulta_punto_de_red['vlan_puerto_sw'] = $registro['vlan_puerto_sw'];
      $consulta_punto_de_red['bloque'] = $registro['bloque'];
      $consulta_punto_de_red['piso'] = $registro['piso'];
      $consulta_punto_de_red['cubiculo'] = $registro['cubiculo'];
    }else
      {
            echo "<script>confirmar(\"\")</script>";
      };
    echo json_encode($consulta_punto_de_red);
?>
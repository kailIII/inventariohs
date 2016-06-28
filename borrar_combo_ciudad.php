<?php
include('conexion.php');
$salida="";
$nro_cc=$_POST["elegido"];
// construimos el combo de ciudades deacuerdo al pais seleccionado
$combog = mysql_query("SELECT * FROM switches WHERE nro_cc=$nro_cc");
  while($sql_p = mysql_fetch_row($combog))
  {
   $salida.= "<option value='".$sql_p[0]."'>".$sql_p[5]."".$sql_p[6]."".' - Ip Sw: ' ."".' - Ip Sw: ' ."".$sql_p[1]."".' - Unidad: ' ."".$sql_p[2]."</option>";
  }  
echo $salida;
?>


<?php

// ** Campos con lo que voy a realizar la consulta, los del formulario.
//$sw_id = $_POST['q'];
//$q     = $_POST['q'];

//echo "<p>Consulta de salones del bloque : $bloque piso : $departamento  departamento : $piso ubicacion: $cubiculo responsable: $responsable usuario: $usuario</p>" ;

//session_start();
$server = "localhost"; 
$database = "inventario"; //nombre de la base de datos que estas usando para el proyecto
$username = "root"; // nombre del usuario con el que te conectas a esa base de datos
$password = "root"; // la password de dicho usuario

$conexion = mysql_connect($server,$username,$password);
mysql_set_charset('utf8',$conexion);

mysql_select_db($database);

$query = "SELECT switches.sw_id, switches.dir_ip_sw, switches.unidad, bitacora_switches.id_sw, bitacora_switches.puerto_sw, bitacora_switches.punto_de_red, bitacora_switches.vlan, bitacora_switches.estado_puerto_sw FROM switches,bitacora_switches WHERE bitacora_switches.id_sw = '$nro_cc'  GROUP BY dir_ip_sw,unidad,puerto_sw ASC ";
//id_sw,puerto_sw,punto_de_red,vlan,estado_puerto_sw
//$query = "SELECT id_sw,puerto_sw,punto_de_red,vlan,estado_puerto_sw FROM bitacora_switches WHERE puntos_de_red.bloque like '%$bloque' and puntos_de_red.piso like '%$piso%' and hardware.departamento like '%$departamento%' and puntos_de_red.cubiculo <> '' and puntos_de_red.cubiculo like '%$cubiculo%' and responsable like '%$responsable%' and usuario like '%$usuario%' and puntos_de_red.punto_de_red = hardware.punto_de_red";

$r = mysql_query($query,$conexion);

$return = '';
if( mysql_num_rows($r)>0)
{
  $return .= '<table border=1>';
  $cols = 0;
  while($rs = mysql_fetch_row($r))
  {
    $return .= '<tr>';
    if($cols==0)
    {
      $cols = sizeof($rs);
      $cols_names = array();
      for($i=0; $i<$cols; $i++)
      {
        $col_name = mysql_field_name($r,$i);
        $return .= '<th>'.htmlspecialchars($col_name).'</th>';
        $cols_names[$i] = $col_name;
      }
      $return .= '</tr><tr>';
    }
    for($i=0; $i<$cols; $i++)
    {
            #En esta iteración podes manejar de manera personalizada datos, por ejemplo:
      if($cols_names[$i] == 'fechaAlta')
            { #Fromateo el registro en formato Timestamp
              $return .= '<td>'.htmlspecialchars(date('d/m/Y H:i:s',$rs[$i])).'</td>';
            }else if($cols_names[$i] == 'activo')
            { #Estado lógico del registro, en vez de 1 o 0 le muestro Si o No.
              $return .= '<td>'.htmlspecialchars( $rs[$i]==1? 'SI':'NO' ).'</td>';
            }else
            {
              $return .= '<td>'.htmlspecialchars($rs[$i]).'</td>';
            }
          }
          $return .= '</tr>';
        }
        $return .= '</table>';
        mysql_free_result($r);
      }
      echo $return;

<?php
//por Abrahan Apaza
include("config.php");
$conexion = mysql_connect($server,$username,$password);
mysql_set_charset('utf8',$conexion);
mysql_query('SET NAMES \'utf8\'');
mysql_select_db($database);

function getSwitches()
{
	global $conexion;
	include("config.php");
	$conexion	= mysql_connect($server,$username,$password);
	$nro_cc 	= $_POST['nro_cc'];
	
	$query = "SELECT * FROM switches WHERE switches.nro_cc = '$nro_cc' ORDER BY dir_ip_sw,unidad ASC" ;
	//$query="select * from switches where nro_cc = ".$_POST['nro_cc'];
	$result=mysql_query($query,$conexion);
	$resp="<option value=''>-Seleccione Switch-</option>";
	while($value=mysql_fetch_object($result)){
	$resp.="<option value='".$value->sw_id."'>".$value->dir_ip_sw."-".$value->unidad."</option>";
	}
	echo $resp;
	
}
 
function getPuertos()
{
	global $conexion;
	include("config.php");
	$conexion	= mysql_connect($server,$username,$password);
	$nro_cc 	= $_POST['nro_cc'];
	
	$query = "SELECT * FROM bitacora_switches WHERE bitacora_switches.id_sw = '$nro_cc' ORDER BY puerto_sw ASC" ;
	//$query="select * from switches where nro_cc = ".$_POST['nro_cc'];
	$result=mysql_query($query,$conexion);
	$resp="<option value=''>-Seleccione Puerto Sw-</option>";
	while($value=mysql_fetch_object($result)){
	$resp.="<option value='".$value->id_sw."'>".$value->puerto_sw."-".$value->vlan."</option>";
	}
	echo $resp;
}
 
if($_POST){
switch($_POST["task"]){
case "getswitches":getSwitches();
break;
case "getpuertos":getPuertos();
break;
}
}
?>
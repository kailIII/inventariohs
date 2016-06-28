<?php
include("includes/excelwriter.inc.php");
include('config.php');

$excel=new ExcelWriter("galeria_comercial.xls");

if($excel==false) {
echo $excel->error;
}

//Escribimos la primera fila con las cabeceras
$myArr=array("Nombre Comercial","Direccion","CP","Localidad","Telefono","Email");
$excel->writeLine($myArr);

$sql2 = "SELECT * FROM puntos_de_red";
$result2 = mysql_query( $sql2) or die("No se puede ejecutar la consulta: ".mysql_error());

//Escribimos todos los registros de la base de datos
//en el fichero EXCEL
while($Rs2 = mysql_fetch_array($result2)) {
$myArr=array(
$Rs2['Nombre_Comercial'],
$Rs2['Direccion'],
$Rs2['CodigoPostal'],
$Rs2['Localidad'],
$Rs2['Telefono'],
$Rs2['Email']
);
$excel->writeLine($myArr);
//Otra forma es
//$excel->writeLine($Rs2);
//De este modo volcariamos todos los registros seleccionados
//Sin necesidad de colocarlos/filtrar previamente en $myArr
}
$excel->close();

//Abrimos el fichero excel que acabamos de crear
header("location:galeria_comercial.xls");
?>
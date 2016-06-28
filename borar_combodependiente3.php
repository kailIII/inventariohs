<?php
include_once("config.php");

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Select Dependiente jQuery Ajax</title>
		<meta charset="utf-8">
		
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="js/procesar.js"></script>
		<script src="js/vendor/jquery.js"></script>
		<script src="js/foundation.min.js"></script>
		
		<?php
			include_once("config.php");
		    $conexion = mysql_connect($server,$username,$password);
		    mysql_set_charset('utf8',$conexion);
		    mysql_select_db($database);
		    $query = "SELECT * FROM c_cableados ORDER BY nro_cc ASC ";
		    $resultado = mysql_query($query,$conexion); 
		?>
		<style>
		 
		</style>
	</head>
	<body>
		<div class="span5 offset1">
			<form class="form-horizontal" id="formdependiente">
				<div class="control-group">
					<label class="control-label" for="c_cableado">Centros de Cableados</label>
					<div class="controls">
						<select name="c_cableado" class="selectdepend" id="c_cableado">
							<option value="">-Seleccione Centro de cableado-</option>
							<?php while($r= mysql_fetch_object($resultado)){
								echo "<option value=".$r->id_cc.">".$r->descripcion_cc."</option>";
							} ?>
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="switches">Switches</label>
					<div class="controls">
						<select name="switches" class="selectdepend" id="switches" disabled="disabled">
							<option value="">-Seleccione Switch-</option>
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="puertos">Puertos</label>
					<div class="controls">
						<select name="puertos" class="selectdepend" id="puertos" disabled="disabled">
							<option value="">-Seleccione Puerto Sw-</option>
						</select>
					</div>
				</div>

				<div class="row">
			      <div class="columns large-4">
			        <input type="button" name="consultar_equipos_por_pantalla" id="consultar_equipos_por_pantalla" value="Consultar equipos por pantalla" class="button">
			      </div>
			    </div>

			    <div id="resultado" class="row">
			</form>


  <script>
    $(document).foundation();

    $('#consultar_equipos_por_pantalla').click(function(e){

      $.post('switches-php_enviar_sql_a_pantalla.php',
        {
          nro_cc: 	$('#nro_cc').val(),
          unidad:  	$('#unidad').val(),
          sw_id:  	$('#sw_id').val(),
        },
        function (data){
          $('#resultado').html(data);
        }
      );
    });

  </script>

		</div>
	</body>
</html>

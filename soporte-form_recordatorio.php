<h2><?php echo $view->label ?></h2>
<form name ="recordatorio" id="recordatorio" method="POST" action="soporte-form_consultar_equipos_soporte_en_prestamo.php">
    <input type="hidden" name="id" id="id" value="<?php print $view->soporte->getId() ?>">
    <div>
        Nro del Centro de Cableado...
        <input type="text" name="nro_cc" id="nro_cc" value = "<?php print $view->soporte->getNroCC() ?>">
    </div><br>
    <div>
        Descripción
        <input type="text" name="descripcion_cc" id="descripcion_cc" value = "<?php print $view->soporte->getDescripcion() ?>">
    </div>
    
    <div>
        Cliente
        <input type="text" styletext="strong" name="cliente" id="cliente" value = "<?php print $view->soporte->getCliente() ?>">
    </div>
    
    <div>
        Correo
        <input type="text" name="correo" id="correo" value = "<?php print $view->soporte->getCorreo() ?>">
    </div>
    
    <div class="buttonsBar">
        <input id="cancel" class="button" type="button" value ="Cancelar" />
        <input id="submit" class="button" type="submit" name="submit" value ="Enviar recordatorio" />
    </div>
</form>
    <script type="text/javascript" src="resources/jquery-1.7.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="resources/datetimepicker.css" />
    <script type="text/javascript" src="resources/datetimepicker.js"></script>
    <script>jQuery('.datetimepicker').datetimepicker();</script>
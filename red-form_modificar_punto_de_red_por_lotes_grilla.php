<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<!--
/*
 * examples/mysql/index.html
 * 
 * This file is part of EditableGrid.
 * http://editablegrid.net
 *
 * Copyright (c) 2011 Webismymind SPRL
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://editablegrid.net/license
 */
-->

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Consulta y Modificación</title>
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">

        <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
		<link rel="stylesheet" href="css/font-awesome-4.1.0/css/font-awesome.min.css" type="text/css" media="screen">
        	</head>
	
	<body>
		<div id="wrap">
		<h1>Consulta y Modificación de puntos de red por lotes</h1> 
		
			<!-- Feedback message zone -->
			<div id="message"></div>

            <div id="toolbar">
              <input type="text" id="filter" name="filter" placeholder="Filtro : Digite punto de red a consultar"  />
              <a id="showaddformbutton" class="button green"><i class="fa fa-plus"></i> Ingresar Punto de red</a>
            </div>
			<!-- Grid contents -->
			<div id="tablecontent"></div>
		
			<!-- Paginator control -->
			<div id="paginator"></div>
		</div>  
		
		<script src="js/editablegrid-2.1.0-b25.js"></script>   
		<script src="js/jquery-1.11.1.min.js" ></script>
        <!-- EditableGrid test if jQuery UI is present. If present, a datepicker is automatically used for date type -->
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
		<script src="js/punto_de_red_grilla.js" ></script>

		<script type="text/javascript">
		
            var datagrid = new DatabaseGrid();
			window.onload = function() { 

                // key typed in the filter field
                $("#filter").keyup(function() {
                    datagrid.editableGrid.filter( $(this).val());

                    // To filter on some columns, you can set an array of column index 
                    //datagrid.editableGrid.filter( $(this).val(), [0,3,5]);
                  });

                $("#showaddformbutton").click( function()  {
                  showAddForm();
                });
                $("#cancelbutton").click( function() {
                  showAddForm();
                });

                $("#addbutton").click(function() {
                  datagrid.addRow();
                });
			}; 
		</script>

        <!-- simple form, used to add a new row -->
        <div id="addform">

            <div class="row">
                <input type="text" id="punto_de_red" name="punto_de_red" placeholder="Punto de red" />
            </div>

             <div class="row">
                <input type="text" id="bloque" name="bloque" placeholder="Bloque" />
            </div>

            <div class="row">
                <input type="text" id="piso" name="piso" placeholder="Piso" />
            </div>

            <div class="row tright">
              <a id="addbutton" class="button green" ><i class="fa fa-save"></i> Ingresar</a>
              <a id="cancelbutton" class="button delete">Cancelar</a>
            </div>
        </div>
        
	</body>

</html>

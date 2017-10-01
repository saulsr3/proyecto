<html>
<head>
<?php
include("menu.php");
include("opciones_expediente.php");
?>
	<title>Modificar Expediente</title>
	
	
	
	<style type="text/css">

	
	table{
		margin: 0 auto;
	}
	#idguardar,#idcancelar{
		margin: 0 auto; 
	}
#info{
background-color: #f8f8f8;
         color: #337ab7;
                margin: 0 auto; 
              width: 1200px;
              
                 border-radius: 10px 10px 10px 10px;
                box-shadow:  10px 10px 10px;

}
#heading{
        background-color: #2c3e50;
        color: white;
    }
	</style>

</head>
<body>
	
	<div id="info" class="panel panel-info">
		<div id="imagen" style="float: right;"><img src="imagenes/modificar.png" height="78px"></div>
  <div id="heading" class="panel-heading">
    <h1>Modificar Expediente</h1>
  </div>
  <div class="panel-body">
   <table width="200" border="0">
  <tr>
    <td><input type="text" class="form-control" id="q" placeholder="Numero de expediente" ></td>
    <td><input type="text" class="form-control" id="q" placeholder="Paciente" ></td>
    <td><input type="text" class="form-control" id="q" placeholder="Fecha de elaboracion" ></td>
  </tr>
  <tr>
    <td colspan="3"><h4>Padece de:</h4> <textarea name="padece" cols="100" rows="3"></textarea></td>
  </tr>
  <tr>
  	<td>
  		<button type="button" id="guardar" class="btn btn-default" value="Guardar"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
<button type="button" id="cancelar" class="btn btn-default" value="Cancelar"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
  	</td>
  </tr>
</table>
  </div>
</div>





	
</body>
</html>
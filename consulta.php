<html>
<head>
<?php 
include("menu.php");
include("opciones_expediente.php");
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="estilos/consulta_y_evaluacion.css">
	<title>Consulta</title>
	
	<style type="text/css">
	
	</style>




</head>
<body>

<div id="consulta" class="panel panel-info">
<div id="imagen"><img src="imagenes/consulta.png" height="90px"></div>
  <div id="heading" class="panel-heading">
    <h1>Consulta</h1>
  </div>
  <div  class="panel-body">
  <form  class="form-horizontal">
  
    <div class="form-group">
    <table width="700" border="0">
  <tr>
    <td><input type="text" class="form-control" id="q" placeholder="Numero de expediente" ></td>
    <td><input type="text" class="form-control" id="q" placeholder="Paciente" ></td>
   
  </tr>
 
</table>
<table width="700" border="0">
<tr>
<td>
<label>Motivo de la consulta:</label>
 <br>
<input type="text" class="form-control" id="q" placeholder="Motivo de la consulta" >
</td>
</tr>
<tr>
<td>
<label>Historia de la presente enfermedad: </label>
<br>
<input type="text" class="form-control" id="q" placeholder="Historia presente enfermedad" >
</td>
</tr>
<tr><td>
<label>Historia médica</label>
<br>
<input type="text" class="form-control" id="q" placeholder="Historia médica" >
</td>
</tr>
<tr>
<td>
<label>Examenes de laboratorios, referencial o resultados</label>

<br>
<textarea cols="3" rows="4" class="form-control" id="q" placeholder="Exam, ref o resultados" ></textarea>

</td>
</tr>
<tr><td >
<button type="submit" id="guardar" class="btn btn-default"  value="Guardar"><span class="glyphicon glyphicon-ok-circle"></span>Guardar</button>
<button type="reset" id="cancelar" class="btn btn-default" value="Cancelar"><span class="glyphicon glyphicon-ban-circle"></span>Cancelar </button>
</td>
</tr>	
</table>
    		</div>

				</form>
			



</body>
</html>
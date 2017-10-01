<html>
<head>
<?php 
include("menu.php");
include("opciones_expediente.php");
?>

<script src="dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">


	<link rel="stylesheet" type="text/css" href="estilos/consulta_y_evaluacion.css">
	<link rel="stylesheet" href="css/custom.css">
	<title>Evaluacion clinica</title>

<script type="text/javascript">
	function alerta(){
		swal("Evaluacion clinica","Evaluacion clinica guardada","success");
	return false;
}
</script>

<style type="text/css">
	

</style>
</head>
<body>

<div id="evclinica" class="panel panel-info ">
<div id="imagen">
    <img src="imagenes/doctor.png" height="90px">
</div>

  <div id="heading"  class="panel-heading">
    <h1>Evaluación clínica</h1>
  </div>
  <div  class="panel-body">
  <form  class="form-horizontal" onsubmit="return alerta()">
  
    <div class="form-group">
    <form class="form-horizontal" role="form" id="datos_cotizacion">
        
            <table width="900" border="0">
  <tr>
    <td><input type="text" class="form-control" id="q" placeholder="Numero de expediente" ></td>
    <td><input type="text" class="form-control" id="q" placeholder="Paciente" ></td>
  </tr>
  <tr>
    <td><p><label>A padecido de dolor</label></p>
     
        <p>
          <label>
            <input type="radio" name="dolorGropu" value="Si" />
            Si</label>
          <br />
          <label>
            <input type="radio" name="dolorGropu" value="No" />
            No</label>
          <br />
        </p>
          <p>&nbsp; </p></td>
    <td><input type="text" class="form-control" id="q" placeholder="Lugar del dolor" ></td>
   
  </tr>
  <tr>
    <td colspan="2">
    <label>
  Caracteristicas del dolor
  </label>
  <br>
  <input type="text" class="form-control" id="q" placeholder="Caracteristicas del dolor" ></td>
    
  </tr>
  <tr>
    <td colspan="2">
 <label> Descripcion</label>
  <br />
  <textarea id="" class="form-control" cols="2" rows="4"></textarea>
  </td>
   
  </tr>
  <tr><td>
    <button type="submit" id="guardar" class="btn btn-default"  value="Guardar"><span class="glyphicon glyphicon-floppy-disk"></span>Guardar</button>
<button type="reset" id="cancelar" class="btn btn-default" value="Cancelar"><span class="glyphicon glyphicon-remove"></span>Cancelar </button>
  </td></tr>
</table>


</div>
</form>
</body>
</html>


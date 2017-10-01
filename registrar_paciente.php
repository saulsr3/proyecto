<!DOCTYPE html>
<html>
<head>
<?php 
include("menu.php");
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="estilos/registrar_pacientes.css">	
	<title>Registrar paciente</title>

<style type="text/css" media="screen">
 #btnguardar,#btncancelar{
  background-color: #008cba;
 color: white;
 
 font-size: 18px;
 border-radius: 5px;
 
 box-sizing: border-box;
 transition: all 500ms ease;
}
#heading{
    background-color: #2c3e50;
    color: white;
  } 
  table{ margin: 0 auto; 

  border-radius: 10px 10px 10px 10px;
                box-shadow:  10px 10px 10px;}
  #expedientes{
    border-radius: 10px 10px 10px 10px;
                box-shadow:  10px 10px 10px;
  }
</style>

</head>
<body>

<div id="expedientes" class="panel panel-info">
<div id="imagen" style="float: right; padding: 10px;"><img src="imagenes/people.png" height="78px"></div>
  <div id="heading" class="panel-heading">
    <h1>Registrar paciente</h1>
  </div>
  <div  class="panel-body">
  <form  class="form-horizontal">
  
    <div class="form-group">
    <form class="form-horizontal" role="form" id="datos_cotizacion">
        
            
        
        <table width="1190" border="0">
   
  <tr>
    <td><input class="form-control" type="text" placeholder="&#128100;  Apellidos" required autofocus></td>
    <td><input class="form-control" type="text" placeholder="&#128100;  Nombre" required autofocus></td>
    <td><select name="combo" id="combo" class="form-control">
      <option value="Sexo" selected>Sexo</option>
      <option value="Femenino">Femenino</option>
      <option value="Masculino">Masculino</option>
    </select> 
    </td>
    
  </tr>
  <tr>
    
    <td>Fecha Nacimiento<input class="form-control" type="date"  required autofocus></td>
    <td><input class="form-control" type="text" placeholder="&#9990;  Telefono" required autofocus></td>
    <td>Fecha Registro en clinica<input class="form-control" type="date"required autofocus></td>
   
  </tr>
  <tr>
    <td><input class="form-control" type="text" placeholder="&#8962;  Dirección" required autofocus></td>
    <td><input class="form-control" type="email" placeholder="&#128231;  Email" ></td>
      
    
  </tr>
 <tr>
  <td><button class="btn__submit" id="btnguardar" type="submit" value="Guardar"><span class="glyphicon glyphicon-floppy-disk" >
        
      </span>  Guardar </button>
<button class="btn__reset" id="btncancelar" type="reset" value="Cancelar"> <span class="glyphicon glyphicon-remove" >
        
      </span>  Cancelar </button>
  </td>
  
  
 </tr>
</table>
        
      </form>

</body>
</html>
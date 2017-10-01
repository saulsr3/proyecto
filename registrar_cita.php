<!DOCTYPE html>
<html>
<head>
<?php 
include("menu.php");
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="estilos/registrar_pacientes.css">	
	<title>Registrar paciente</title>
  <style>
    #heading{
        background-color: #2c3e50;
        color: white;
    }

#guardar,#cancelar{
  background-color: #008cba;
 color: white;
 
 font-size: 18px;
 border-radius: 5px;
 
 box-sizing: border-box;
 transition: all 500ms ease;
}
#registrar{

  border-radius: 10px 10px 10px 10px;
                box-shadow:  10px 10px 10px;
}
table{ margin: 0 auto; }

  </style>
</head>
<body>

<div id="registrar" class="panel panel-info">
  <div id="heading" class="panel-heading">
    <h1>Registrar cita</h1>
  </div>
  <div class="panel-body">
    <table width="990" border="0">
   
  <tr>
    
    <td><input class="form-control" type="text"   Nombre" required autofocus></td>
    
    
    </select> 
    </td>
    
  </tr>
  <tr>
  
 
    
   
  </tr>
  <tr>
    <td>Fecha<input class="form-control" type="date"required autofocus></td>
    
  </tr>
 <tr>
  <td><button id="guardar" class="btn-default" type="submit" value="GUARDAR"><span class="glyphicon glyphicon-floppy-disk" >
        
      </span> Guardar </button>
  <button id="cancelar" class="btn-default" type="reset" value="CANCELAR"><span class="glyphicon glyphicon-remove" >
        
      </span>Cancelar</button>
  </td>
 </tr>
</table>
  </div>
</div>






</body>
</html>
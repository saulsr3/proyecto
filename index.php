<!DOCTYPE html>
<html>
<head>


	<title>Inicio de sesion</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">

<script type="text/javascript">
	
	function acceder(f){
 var ok = true;
  var msg = "-> usuario o contraseña incorrectos <-";
  if(f.elements["usuario"].value == "" || f.elements["password"].value=="")
  {
   
    ok = false;
  }

  

  if(ok == false){
    swal("Inicio de sesion","Error: usuario o contraseña invalidos","error");
  return ok;
}


	}

</script>


	<style type="text/css">
	a{color: white;}
#usuario,#password{font-size: 25px;}
#sesion{

padding: 20px;
	
	width: 615px;
	margin: 0 auto;
	background-color: #2c3e50;
         color: white;
         border-radius: 10px 10px 10px 10px;
                box-shadow: activecaption 10px 10px 10px;

}
table{margin: 0 auto;}
body{
background-color: #222222;
        color: white;
    font-family: tahoma, helvetica,arial, sans-serif;
            border-radius: 10px 10px 10px 10px;
  -moz-border-radius: 10px 10px 10px 10px;
        -webkit-border-radius: 10px 10px 10px 10px;
        -ms-border-radius: 10px 10px 10px 10px;
  box-shadow: activecaption 0px 0px 20px;
  min-height: 400px;
  position: relative;
  margin: 6px auto;
  margin-top: 90px;
  width: 95%;
                
}

#ingresar{
  background-color: #008cba;
 color: white;
 
 font-size: 18px;
 border-radius: 5px;
 
 box-sizing: border-box;
 transition: all 500ms ease;
}
	</style>
	</head>
<body>
<br>
<br>
<br>
<br>
  
<div id="minerva" style="float: left;">
  <img src="imagenes/minerva.png" height="300x100">
</div>
<div id="logo" style="float: right; padding: 20px;">
  <img src="imagenes/logo.png" height="200x100">
</div>
<div id="sesion">
  <center><h1>Inicio de sesión</h1></center>
<form id="formulario" class="formulario" method="post" acction="" onsubmit="return acceder(this)" >
    
      <input type="text" name="usuario" id="usuario" class="form-control" name="textfield" placeholder="Nombre de usuario"  />
    
<br>
  
      <input type="password" name="password" id="password" class="form-control" name="textfield2"
      placeholder="contraseña" 
  
  >
    <br>
      <center>    <button type="submit" id="ingresar" class="btn btn-default" name="Submit" value="Ingresar" ><span class="glyphicon glyphicon-arrow-right" ></span>Ingresar </button>
    </center>
  <br>
    <a href="recuperar_cuenta.php">¿Olvido de contraseña?</a>
  
</form>
</div>
<br>
<footer>
<label>  &copy; COPYRIGHT 2017, CICLO II UNIVERSIDAD DE EL SALVADOR DISEÑO DE SISTEMAS II, DERECHOS RESERVADOS
</label>
</footer>

<?php
        if ($_POST) {
            
            if (isset($_POST['usuario']) && isset($_POST['password'])) {
                
    $port="5432";
    $user="postgres";
    $pass="root";
    $dbname="sico_bd";

    $connect = pg_connect("host=localhost dbname=sico_bd user=postgres password=root")
    or die('No se ha podido conectar: ' . pg_last_error());

    if(!$connect)
        echo "<p><i>No me conecte</i></p>";
    else{
        echo "<p><i>Me conecte</i></p>";
echo  "<SCRIPT>window.location='gestion_expera.php';</SCRIPT>";  

}
    pg_close($connect);    
                
            }
                
        } 
    ?>
    




</body>
</html>


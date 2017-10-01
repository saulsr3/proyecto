<!DOCTYPE html>
<html>
<head>

	<title>Recuperacion de cuenta</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css" media="screen">
  	#contenedor{
  		width: 700px;
  		margin: 0 auto;
  		padding: 20px;
  	
  	


		
		border-radius: 10px 10px 10px 10px;
                box-shadow:  10px 10px 10px;
	}
	#heading{
		background-color: #2c3e50;
		color: white;
	}

#enviar,#regresar{
  background-color: #008cba;
 color: white;
 
 font-size: 18px;
 border-radius: 5px;
 
 box-sizing: border-box;
 transition: all 500ms ease;
}
body{
	background-color: #222222;
}
  </style>
}
</head>
<body>
<br><br>
	<div id="contenedor" class="panel panel-primary">
		<div id="heading">
	<center>	<img src="imagenes/lock.png" height="98px" =""></center>	
		</div>
  <div id ="heading" class="panel-heading">
    <h1 class="panel-title">Recuperacion de contraseña</h1>
  </div>
  <div class="panel-body">
    <input type="text" class="form-control" placeholder="digite su D.U.I" name=""> <br>
    <input type="email" class="form-control" placeholder="digite correo electrónico" name=""> <br>
    <button id="enviar" type="submit" class="btn btn-default"> 
    	<span class="glyphicon glyphicon-send"></span>Enviar contraseña</button>
    <button id="regresar" type="submit" class="btn btn-default" onclick="location='index.php'">
    <span class="glyphicon glyphicon-arrow-left"></span> Regresar</button>
  </div>
</div>

</body>
</html>
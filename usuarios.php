<!Dotype html>
<html>
<head>
	<title>
		Usuarios
	</title>
	<?php

include("menu.php");
	 ?>
	<meta charset="utf-8">
	<script type="text/javascript">
    
</script>
<link href="estilos/menu.css" rel="stylesheet" type="text/css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	
	<link rel="stylesheet" href="css/custom.css">
	
	<link rel=icon href='img/logo-icon.png' sizes="32x32" type="image/png">
	 
<style type="text/css">
h1{
	background-color: #f8f8f8;
         color: #337ab7;
                margin: 0 auto; 
              height: 45px;
               
                 
}
#idoptitle{
	background-color: #f8f8f8;
         color: #337ab7;
                margin: 0 auto; 
              height: 45px;
}
#opbuscar{
	background-color: #EBF5FB;
         color: #337ab7;
                margin: 0 auto; 
              height: 45px;
               
                 
}
#nuevousuario{
	background-color: #EBF5FB;
         color: #337ab7;
                margin: 0 auto; 
              height: 45px;
               
                 
}
	body{
		background-color: #E8F8F5;
	}
	#tb_expediente{

		background-color: #EAEDED;
         color: #337ab7;
                margin: 0 auto;    
               
        border-radius: 10px 10px 10px 10px;
        box-shadow:  10px 10px 10px;
	}
</style>
</head>
<body>


		</div>
			<div id="optitle" class="panel-body cold-md-12 col-lg-10 col-xs-12 col-sm-12 col-lg-offset-1">
<center><h1>Usuarios</h1></center>
				<form class="form-horizontal" role="form" id="datos_cotizacion">
				
						<div class="form-group row" id="opbuscar">
							<label for="q" class="col-md-2 control-label">Nombre</label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="q" placeholder="Buscar" onkeyup='load(1);'>
							</div>
							
							
							
							<div class="col-md-3">
								<button type="button" class="btn btn-default" onclick='load(1);'>
									<span class="glyphicon glyphicon-search"></span></button>
								<span id="loader"></span> 
								
							</div>
							
									
									 <button><a class="glyphicon glyphicon-user" href="introduccion.php">  Nuevo Usuario</a></button>
								
							
						</div>
				
				
				
			</form>


			<div class="table-responsive " id="tb_expediente">
			  <table class="table table-hover" style="border-color: #48C9B0;">
				<tr style="color: #fff; background-color: #48C9B0; border-color: #48C9B0;">
					<th>ID</th>
					<th>NOMBRE</th>
					<th>APELLIDOS</th>
					<th>DUI</th>
					<th>SEXO</th>
					<th>Direccion</th>
					<th>Telefono</th>
					<th>Estado</th>
					<th>ACCIONES </th>
				</tr>
				<tr>

				</tr>
				<?php
				/*while ($row=mysqli_fetch_array($query)){
						$id=$row['id'];
						$nombres=$row['nombres'];
						$apellidos=$row['apellidos'];
						$cargo=$row['cargo'];
		
					*/?>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td> </td>
						<td></td>	
						<td></td>
						<td></td>
						<td> </td>
					 <td><?php 
					 echo "<div class=\"input-group\">
                     <button type=\"button\" class=\"btn btn-info btn-xs\" onclick=\"location='usuario-editar.php'\"><span class=\"glyphicon glyphicon-ok \"></span>de baja</button>   |

                     <button type=\"button\" class=\"btn btn-info btn-xs\" onclick=\"location='usuario-editar.php'\"><span class=\"glyphicon glyphicon-remove \"></span>de alta</button>  |
         
                     <button type=\"button\" class=\"btn btn-danger btn-xs\" onclick=\"location='introduccion.php'\"><span class=\"glyphicon glyphicon-folder-open\"></span> Actualizar datos</button> </div>";?>

      </td>
						

		                 

					</tr>
					<?php
				
				?>
				<tr>
					<td colspan=7><span class="pull-right"><?
					 echo paginate($reload, $page, $total_pages, $adjacents);
					?></span></td>
				</tr>
			  </table>

			</div>
			<center>
<br><br>
			<button center type="button" class="btn btn-default">
			<span class="glyphicon glyphicon-floppy-disk" >
				
			</span>  Guardar </button>
			<button type="button" class="btn btn-default">
			<span class="glyphicon glyphicon-circle-arrow-left" >
				
			</span> Regresar </button>

			</center>
			
	
</body>
</html>
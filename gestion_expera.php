<!DOCTYPE html>
<html>
<head>
	<?php include("menu.php"); ?>
	<title>Gestion de espera</title>
	<style type="text/css" media="screen">
		#heading{
		background-color: #2c3e50;
		color: white;
	}
	#btnbuscar,#btnregistrar_paciente,#btnrealizar_consulta{
	background-color: #008cba;
 color: white;
 
 font-size: 18px;
 border-radius: 5px;
 
 box-sizing: border-box;
 transition: all 500ms ease;
}

#opbuscar{
	background-color: #f8f8f8;
         color: #337ab7;
                margin: 0 auto; 
              height: 45px;
               
                 
}
#expedientes{

		
		border-radius: 10px 10px 10px 10px;
                box-shadow:  10px 10px 10px;
	}
	table{
		border-radius: 10px 10px 10px 10px;
                box-shadow:  10px 10px 10px;
	}
	</style>
</head>
<body>
	<div id="expedientes" class="panel panel-info">
<div id="imagen"><img src="imagenes/espera.png" height="78px" style="float: right;"></div>
  <div id="heading" class="panel-heading">
    <h1>Sala de espera</h1>
  </div>
  <div  class="panel-body">
  <form  class="form-horizontal">
  
    <div class="form-group">
    <form class="form-horizontal" role="form" id="datos_cotizacion">
				
						<div class="form-group row" id="opbuscar">
							<label for="q" class="col-md-2 control-label"></label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="q" placeholder="Registrar llegada de paciente" onkeyup='load(1);'>
							</div>
							
							
							
							<div class="col-md-3">
								<button id="btnbuscar" type="button" class="btn btn-default" onclick='load(1);'>
									<span class="glyphicon glyphicon-search" ></span> Buscar</button>
								<span id="loader"></span> 
								
							</div>
							<button id="btnregistrar_paciente" type="button" class="btn btn-default" onclick='load(1);'>
									<span class="glyphicon glyphicon-plus-sign" ></span> Registrar llegada</button>
								<span id="loader"></span> 

							
						</div>
						<div class="table-responsive " id="tb_expediente">
			  <table class="table table-hover" style="border-color: #337ab7;">
				<tr style="color: #fff; background-color: #2c3e50; border-color: #337ab7;">
					<th>Turno</th>
					<th>NOMBRES</th>
					<th>APELLIDOS</th>
					<th>SEXO	</th>
					
				</tr>
				<?php
				/*while ($row=mysqli_fetch_array($query)){
						$id=$row['id'];
						$nombres=$row['nombres'];
						$apellidos=$row['apellidos'];
						$cargo=$row['cargo'];
		
					*/?>
					<tr>
						<td>1</td>
						<td>Bladimir</td>
						<td>Alvarado</td>
						<td>M</td>	
						

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

				
			</form>

				<button id="btnrealizar_consulta" type="button" class="btn btn-default" onclick="location='mo_expediente.php'">
									<span class="glyphicon glyphicon-circle-arrow-right" ></span> Realizar consulta</button>
								<span id="loader"></span> 
			



</body>
</html>
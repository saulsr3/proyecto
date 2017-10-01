<!DOCTYPE html>
<html>
<head>
	<?php include("menu.php"); ?>
	<title>Bitacora</title>
	<style type="text/css" media="screen">
	#info{

margin: 0 auto;
    
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
<div id="info" class="panel panel-primary">
	<div id="imagen" style="float: right;"><img src="imagenes/bitacora.png" height="78px"></div>
  <div id="heading" class="panel-heading">
    <h1>Bitacora</h1>
  </div>
  <div class="panel-body">
  	<table  class="table table-hover" width="700" border="0">
  		<tr>
  			<td>
   <input type="text" class="form-control" placeholder="usuarios(Doctor/enfermera)" class="form-control" name=""/></td> <td> <input type="text" placeholder="Nombre" class="form-control" name="">
   </td>
   
   </tr>
<div class="table-responsive " id="tb_expediente">
			  <table class="table table-hover" style="border-color: #337ab7;">
				<tr style="color: #fff; background-color: #2c3e50; border-color: #337ab7;">
					
					<th>ACTIVIDAD</th>
					<th>HORA</th>
					<th>FECHA</th>
				</tr>
				<?php
				/*while ($row=mysqli_fetch_array($query)){
						$id=$row['id'];
						$nombres=$row['nombres'];
						$apellidos=$row['apellidos'];
						$cargo=$row['cargo'];
		
					*/?>
					<tr>
						
						<td> INICIO DE SESION

      </td>	<td>
      	9:15 am 
      </td>
      <td>28/09/2017</td>

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




  </div>
</div>
</body>
</html>
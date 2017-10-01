<!DOCTYPE html>
<html>
<head>
<?php
include("menu.php");
include("opciones_expediente.php");
 ?>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="description" content="Happy template" />
	<meta name="keywords" content="happy, template" />	
	<link rel="stylesheet" href="css/main.css" type="text/css" />
        <script src="scripts/jquery-2.1.4.js"></script>
        <script src="scripts/angular.js"></script>
        <link href="css/estilosOdontograma.css" rel="stylesheet" type="text/css"/>
	     <link href="estilos/estilos.css" rel="stylesheet" type="text/css">
    

<style type="text/css">
body{ background-color: #10bade;}
<?php // para los estilos de los botones de guardar, cancelar del odontograma ?>
#agregar,#limpiar,#ver,#btnbuscar,#btnregresar {
 border: none;
 background: #337ab7;
 color: white;
 padding: 10px;
 font-size: 18px;
 border-radius: 5px;
 position: relative;
 box-sizing: border-box;
 transition: all 500ms ease;
}
#agregar:hover {
 background: #f8f8f8;
 color: blue;
 box-shadow: inset 0 0 0 3px #f8f8f8;
}
#limpiar:hover{
background: #f8f8f8;
 color: blue;
 box-shadow: inset 0 0 0 3px #f8f8f8;
}
#ver:hover{
  background: #f8f8f8;
 color: blue;
 box-shadow: inset 0 0 0 3px #f8f8f8;
}
#txtnombre,#txtapellido{
  width: 400px; 
  background-color: #ebebe4;
  padding: .3rem;
  margin: .5rem 0;
  border: none;
  border-bottom: solid #C8C8C8 .2rem;
  transition: all .5s;
}
#txtbuscar{
  width: 400px; 
  background-color: #ffffff;
  padding: .3rem;
  margin: .5rem 0;
  border: none;
  border-bottom: solid #C8C8C8 .2rem;
  transition: all .5s;
}

#btnbuscar:hover{
  background: #f8f8f8;
 color: blue;
 box-shadow: inset 0 0 0 3px #f8f8f8;

}
#btnregresar:hover{
background: #f8f8f8;
 color: blue;
 box-shadow: inset 0 0 0 3px #f8f8f8;

}

#datosDiente{
  

  
  background-color: #f8f8f8;
         color: #337ab7;
                margin: 0 auto; 
              height: 275px;
              width: 555px;
               
                 border-radius: 10px 10px 10px 10px;
                box-shadow: activecaption 10px 10px 10px;
}

body{
   background-color: #ecf0f1;
     
}

#odontogram{
box-shadow:  10px 10px 10px;
     font-size: 18px;

}
 </style>
    <title>Odontograma</title>



</head>

<body ng-app="app" >
        	
 
 
 
   
   <br>
   <br>
   
   
   
            
                
                
                <div id="odontogram" class="odontogram">
                <odontogramageneral></odontogramageneral>
                </div>
                <br>

<div id="observaciones" class="observaciones" style="margin: 0 auto;">
  <table width="451" border="0" style="margin: 0 auto;">
  <tr>
    <td width="94">Observaciones: </td>
    <td width="59"><textarea name="" cols="35" rows="2"></textarea></td>
    <td width="75">Tratamiento: </td>
    <td width="195"><textarea name="" cols="35" rows="2"></textarea></td>
    <td>Fecha</td><td><input type="date" class="form-control" /></td>
  </tr>
  
</table>

</div>



                      

		

	

        <!-- Angular Modulos-->
        <script type="text/javascript" src="scripts/modulos/app.js"></script>
        <!-- Angular Controladores-->
        <script type="text/javascript" src="scripts/controladores/controller.js"></script>
        <!--Angular Directives-->
        <script type="text/javascript" src="scripts/directivas/canvasodontograma.js"></script>
        <script type="text/javascript" src="scripts/directivas/opcionescanvas.js"></script>
        <script type="text/javascript" src="scripts/directivas/odontogramaGeneral.js"></script>
        
        <script>
            $btnbuscar = $('#btnbuscar');
            $txtbuscar = $('#txtbuscar');
            $txtnombre = $('#txtnombre');
            $txtapellidopaterno = $('#txtapellidopaterno');
            $txtapellidomaterno = $('#txtapellidomaterno');
            $txtcodigo = $('#txtcodigo');
            $btnbuscar.click(function(){
                $.ajax({
                    url:'odontogramaRegistros.php',
                    dataType:'json',
                    type:'POST',
                    data:{dni:$txtbuscar.val()},
                    success:function(data)
                    {
                        $txtnombre.val(data[0].nombre);
                        $txtapellidopaterno.val(data[0].apellido_paterno);
                        $txtapellidomaterno.val(data[0].apellido_materno);
                        $txtcodigo.val(data[0].cod_persona);
                    }
                });
            });
        </script>
</body>
</html>

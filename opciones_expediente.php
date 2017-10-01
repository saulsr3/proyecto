<style type="text/css">
	#opExpediente{
		 float: left;

  

  background-color: #222222;
         
            
              height: 570px;
              width: 165px;
               border-radius: 10px 10px 10px 10px;
              
	}

	#guardar,#cancelar{
	background-color: #008cba;
 color: white;
 
 font-size: 18px;
 border-radius: 5px;
 
 box-sizing: border-box;
 transition: all 500ms ease;
}

</style>

<div id="opExpediente" class="wrapper">
	<input type="button" id="guardar" class="btn btn-default" onclick="location='consulta.php'" value="Consultas"/>
<input type="button" id="cancelar" class="btn btn-default" onclick="location='evaluacion_clinica.php'" value="Evaluacion clinica"/>

<input type="button" id="cancelar" class="btn btn-default" onclick="location='odontograma.php'" value="Odontograma"/>

<input type="button" id="cancelar" class="btn btn-default" onclick="location='mo_expediente.php'" value="Expediente"/>


</div>
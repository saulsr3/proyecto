<html>
<head><title>Pagos</title>
<?php 
include("menu.php");
?>
</head>

<link href="estilos/menu.css" rel="stylesheet" type="text/css">
 
  
<link rel="stylesheet" href="css/custom.css">
  
<link rel=icon href='img/logo-icon.png' sizes="32x32" type="image/png">
<body  background='img/bg-jpg'>
<link href=https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600 rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="estilos/menu.css">


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
hr {
  height: 1px;
  border-color: gray;
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
    blockquote {
  padding: 3px 10px;
  border: PowderBlue 5px solid;
  border-radius: 20px;
}

</style>
<center>

<h3>Realizar Pagos</h3>

 
    <label for="nombre"> Paciente: </label>
<input type="text" name="nombre" id="nombre" placeholder="Buscar">   
   <button center type="button" class="btn btn-default">
      <span class="glyphicon glyphicon-search" >
        
      </span>  Buscar </button>            
                  
                   
                
  <div class="table-responsive " id="tb_expediente">
   <center>
        <table class="table table-hover" style="border-color: #DED4D6;">
        <tr style="color: #fff; background-color: #2c3e50; border-color: #337ab7;">
          <p>
          <th>ID</th>
          <th>NOMBRE</th>
          <th>Apellido</th>
          <th> Acción</th>
          
        </tr>
        <tr>

        </tr>
       
          <tr>
            <td></td>
            <td></td>
             <td></td>
            <td><?php 
           echo "<div class=\"input-group\">
                     <button type=\"button\" class=\"btn btn-info btn-xs\" onclick=\"location='usuario-editar.php'\"><span class=\"glyphicon glyphicon-usd \"></span>Pagar</button>    </div>";?> </td>
                     

          </tr>
        
        
        </table>

      </div>
      <center>
<br><br>            
            
        
    
<form >

<label for="nombre">Nombre : </label>
<input type="text" name="nombre" id="nombre">

<label for="nombre">Apellido : </label>
<input type="text" name="nombre" id="nombre">
<br>
<BLOCKQUOTE>
<br>

<table>
<div class="formelement">
Tratamiento:
<input type="text" name="nombre" value="" /><br>
</div>
<div class="formelement">
Descripcion:
<input type="text" /><br>
</div><br>
<div class="formelement">
Costo:
<input type="number" min="1" name="num_fields" value="0" required="required"> 
</div>
<br>
<div class="formelement">
Abono: 
<input type="number" min="1" name="num_fields" value="0" required="required"> 
</div>
<br>
<div class="formelement">
  Saldo:
  <input type="text" name="saldo" value="" /><br>
</div>

</table>
  <br/>
   
   
  
   <button center type="button" class="btn btn-default">
      <span class="glyphicon glyphicon-floppy-disk" >
        
      </span>  Guardar </button>

       <button center type="button" class="btn btn-default">
      <span class="glyphicon glyphicon-remove" >
        
      </span>  Cancelar </button>
 <button center type="button" class="btn btn-default">
      <span class="glyphicon glyphicon-print" >
        
      </span>  Emitir Factura </button>

</form>
</table>
 </center>
</body>
</html>


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Usuario</title>
    <link href="css/StyleSheet.css" rel="stylesheet" />

    <?php

include("menu.php");
     ?>
    <meta charset="utf-8">
    <script type="text/javascript"></script>
    <style type="text/css">

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

</style>

</head>
<body ><center>
    <form >
        <div id="registrar" class="panel panel-info">
          <div id="imagen" style="float: right;"><img src="imagenes/user.png" height="78px"></div>
        <div id="heading" class="panel-heading">
    <h1>Registrar usuarios</h1>
  </div>
            <div  class="panel-body">
  <form  class="form-horizontal">
  
    <div class="form-group">
    <table width="700" border="0">
  <tr>
    <td>D.U.I</td>
    <td><form id="form1" name="form1" method="post" action="">
      <input type="text" class="form-control" name="textfield" />
    </form>    </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Apellido</td>
    <td><form id="form2" name="form2" method="post" action="">
      <input type="text" class="form-control" name="textfield2" />
    </form>    </td>
    <td>Nombre</td>
    <td><form id="form4" name="form4" method="post" action="">
      <input type="text" class="form-control" name="textfield3" />
    </form>    </td>
  </tr>
  <tr>
    <td>Sexo</td>
    <td colspan="2"><form id="form3" name="form3" method="post" action="">
      <p>
        <label>
          <input type="radio" name="GrupoOpciones1" value="Masculino" />
          Masculino        </label>
        <br />
        <label>
          <input type="radio" name="GrupoOpciones1" value="Femenino" />
          Femenino        </label>
        <br />
      </p>
    </form>    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Direccion</td>
    <td colspan="3"><form id="form5" name="form5" method="post" action="">
      <textarea class="form-control" name="textarea" cols="69" rows="3"></textarea>
    </form>    </td>
  </tr>
  <tr>
    <td>Correo</td>
    <td colspan="3"><form id="form6" name="form6" method="post" action="">
      <input type="text" class="form-control" name="textfield4" />
    </form>    </td>
  </tr>
  <tr>
    <td>Telefono</td>
    <td><form id="form7" name="form7" method="post" action="">
      <input type="text" class="form-control" name="textfield5" />
    </form>    </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Tipo</td> <td><select class="form-control" name="">
  <option value="">Secretaria/o</option>
  <option value="">Doctor/a</option>
  
</select></td>

  </tr>
  <tr>
    <td>Usuario</td>
    <td><input type="text" class="form-control" id="usuario" name=""/></td>
<td>Contraseña</td>
<td><input type="text" class="form-control" id="contraseña" name=""/></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="3"><form id="form8" name="form8" method="post" action="">
      <button type="submit" id="guardar" class="btn btn-default" name="Submit2" value="Guardar"> <span class="glyphicon glyphicon-floppy-disk" >
        
      </span>  Guardar  </button>
      <button type="submit" id="cancelar" class="btn btn-default" name="Submit" value="Cancelar" ><span class="glyphicon glyphicon-remove" >
        
      </span>  Cancelar </button>
    </form>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
    </div>

        

        </form>
    
</body>
</html>
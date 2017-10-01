<!DOCTYPE html>
<html>
<head>
	<?php include("menu.php");?>
	<title>Back up/Restore</title>
	<style type="text/css" media="screen">
		.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

#info{

margin: 0 auto;
    width: 1200px;
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
  <div id="imagen" style="float: right;"><img src="imagenes/bakcup.png" height="78px"></div>
  <div id="heading" class="panel-heading">
    <h1>Back ups</h1>
  </div>
  <div class="panel-body">
    
    <!-- Rectangular switch -->
<label class="switch">
  <input id="cheq" type="checkbox">
  <span class="slider"></span>

</label>
<label>Activar back ups</label>
<br>
<label>Realizar back up cada</label>
<input type="text" class="form-control" placeholder="Ingrese: cada cuantos dias se hara el back up" />
<label>Hora:</label>
<input type="time" class="form-control">
<label>Lugar de ubicacion del back up</label>


 <div class="input-group">
                <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Buscar&hellip; <input type="file" style="display: none;" multiple>
                    </span>
                </label>
                <input type="text" class="form-control" readonly>
            </div>
            <span class="help-block">
                Seleccione la ubucacion donde se guardara el back up
            </span>
        </div>
        
    </div>

<?//php echo date("d/m/Y H:i:s"); ?>

  

</body>
</html>
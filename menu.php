<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script language="JavaScript"> 
if(window.screen.availWidth == 1280)window.parent.document.body.style.zoom="120%" 
if(window.screen.availWidth == 1152)window.parent.document.body.style.zoom="108%" 
if(window.screen.availWidth == 1024)window.parent.document.body.style.zoom="96%" 
if(window.screen.availWidth == 800)window.parent.document.body.style.zoom="75%"; 
if(window.screen.availWidth == 640)window.parent.document.body.style.zoom="60%" 
</script> 
<style type="text/css">
  nav{
    font-size: 20px;

  }
  

</style>

<nav   class="navbar navbar-inverse">
  <div  class="container-fluid">
    <div  class="navbar-header">
      <a class="navbar-brand" href="gestion_expera.php"><img src="imagenes/logo.png" height="48px" style="margin-top:-15px;"></a>
    </div>

    <ul  class="nav navbar-nav">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Gestionar usuarios<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="introduccion.php">Agregar usuario</a></li>
          <li><a href="buscar_usuarios.php">Buscar usuarios</a></li>
         
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Pacientes <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="registrar_paciente.php">Registrar paciente</a></li>
          <li><a href="buscar_expedientes.php">Buscar expedientes</a></li>
          <li><a href="gestion_expera.php">Sala de espera</a></li>
        </ul>
      </li>
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Citas <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="registrar_cita.php">Registrar cita</a></li>
          <li><a href="buscar_citas.php">Buscar cita</a></li>
          
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Pagos <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="pagos.php">Realizar pagos</a></li>
          <li><a href="#">Ver pago de paciente</a></li>
          
        </ul>
      </li>
<li><a href="bitacora.php">Bitacora</a></li>
<li><a href="backup.php">Back up</a></li>
           <li><a href="acerdade.php">A cerca de</a></li>
           
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="ayuda.php"><span class="glyphicon glyphicon-question-sign"></span>Ayuda</a></li>
      <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Cerrar sesión</a></li>
    </ul>
  </div>
</nav>

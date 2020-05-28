<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="styleshhet" href="<?php echo base_url() ?>css/diseno.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="<?php echo base_url(); ?>boostrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>boostrap/css/bootstrap-grid.min.css">
  <script type="text/javascript" src="<?php echo base_url(); ?>boostrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>boostrap/js/bootstrap.min.js"></script>
  <title>Editar Perfil</title>
</head>
<style>

.barradenavegacion{
   background-color:#2E64FE;
   opacity:0.9;
   filter:alpha(opacity=60); /* IE < 9.0 */
  }
  .barradenavegacion ul li a{
    color: #fff;
  }
  .barradenavegacion ul li a:hover{
    background-color: #5882FA; 
  }
  *{
    list-style: none;
  }
  .contactos img{
    width: 4%;
  }
  .contactos a{
   text-decoration: none;
   color: #000;
  }


</style>
<body>
<?php
    $ID = $this->session->userdata('ID');
    $NOMBRE = $this->session->userdata('NOMBRE');
    $APELLIDOS = $this->session->userdata('APELLIDOS');
    $CONTRASENA = $this->session->userdata('CONTRASENA');
    $CORREO = $this->session->userdata('CORREO');
    $ROL = $this->session->userdata('ROL');
?>
<nav class="navbar sticky-top navbar-expand-lg barradenavegacion container-fluid">
      <a class="navbar-brand" href="<?php echo base_url()?>index.php/inicio"><img src="<?php echo base_url()?>imagenes/logovisual.png" width="90" class="img-fluid" height="35" alt="" loading="lazy"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">Lista</span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto ">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url() ?>index.php/inicio/view_guia">Guía Prevención<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?php echo base_url() ?>index.php/inicie_sesion/cargarcontactos" tabindex="-1" aria-disabled="true">Contactanos</a>
        </li>
      </ul>
    </div>
    </nav>
  <div class="main">
    <div class="container">
      <div class="row" style="margin-top: 3%;">
      <article class="col-xs-6 col-sm-6 col-md-6">
      <h3>Edita tu perfil</h3><br>
      <form action="<?php echo base_url() ?>index.php/inicio/editarUser" method="POST" data-ajax="false">
            <div class="form-group"> 
              <label >Correo electrónico</label>
              <input type="email" minlength="11" maxlength="50" value="<?php echo $CORREO ?>" name="correo" required class="form-control" >
            </div>
            <div class="form-group">
              <label >Nombre</label>
              <input type="Text" minlength="5" value="<?php echo $NOMBRE ?>" maxlength="50" name="nombre" required class="form-control" >
            </div>
            <div class="form-group">
              <label >Apellidos</label>
              <input type="Text" minlength="5" value="<?php echo $APELLIDOS ?>" maxlength="50" name="apellidos" required class="form-control" >
            </div>
            <div class="form-group">
              <label >Contraseña</label>
              <input type="password" value="<?php echo $CONTRASENA ?>" minlength="8" maxlength="20" name="contrasena" required  id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Ejemplo: juan423534 ">
              <input type="text" name="id" value="<?php echo $ID ?>"  class="form-control" style="display: none;">
              <small id="passwordHelpBlock" class="form-text text-muted">
              Su contraseña debe tener entre 8 y 20 caracteres, contener letras y números, y no debe contener espacios, caracteres especiales o emoji.
              </small>
            </div>
            <div class="form-group">
             <button type="submit" class="btn boton btn-success btn-block shadow-none p-3 mb-5rounded">Guardar Cambios</button>
            </div>
          </form><br>
      </article>
      <article class="col-xs-6 col-sm-6 col-md-6">
        <h3>Gracias por preferirnos</h3><br>
      <img src="<?php echo base_url()?>imagenes/img1.jpg" width="100%" class="img-fluid" height="35" alt="" loading="lazy">
      </article>
    </div>
    <div class="row">
    <article class="col-xs-6 col-sm-6 col-md-6">
    <form action="<?php echo base_url() ?>index.php/inicie_sesion/eliminarsesion" method="POST" data-ajax="false">
        <button type="submit" class="btn boton btn-danger btn-block shadow-none p-3 mb-5rounded">Cerrar Sesion</button>    
    </form>         
    </article>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
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
  <title>Inicio</title>
</head>
<style>

  .formulario{
    background-color: #FFFFFF;
  }
  nav{
    background-color: #000;
  }
  .boton{
    background-color: #576aff;
    color:blanchedalmond;
  }
  label{
    font-weight: bold;
  }
  .radio{
    font-weight: lighter;
  }
</style>
<body>
  <header>
    <div class="container">
    <div class="imagen" style="justify-content: center">
    <center><img src="<?php echo base_url()?>imagenes/portada2.jpg" style="height:130px; width:40%" value="mesa_#" class="img-fluid"><center>
    </div><br>
    <center><h1 style="font-family:cursive">Bienvenido a pausas activas</h1><center>
    </div><br>
  </header> 
  <div class="main">
    <div class="container">
      <div class="row">
      <article class="col-xs-6 col-sm-6 col-md-6" style="align-content: center;">
      <center><h3>Inicie sesión</h3></center>
      <div class="formulario">
        <form action="<?php echo base_url() ?>index.php/inicie_sesion/inicio" method="post" data-ajax="false">
      <div class="form-group">
          <br><label for="exampleInputEmail1">Correo</label>
        <input require  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="xxx@xxx.com" name="correo">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Contraseña</label>
        <input require type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name="contrasena">
      </div>
        <button type="submit" class="btn btn-success">Iniciar Sesion</button>
      </form>
      </div><br>
      </article>
      <article class="col-xs-6 col-sm-6 col-md-6 formulario">
      <center><h3>Registrate</h3></center><br>
          <form action="<?php echo base_url() ?>index.php/registro/registro" method="post" data-ajax="false">
            <div style="max-width:80%;margin:auto">
            <div class="form-group"> 
              <label >Correo electrónico</label>
              <input type="email" minlength="11" maxlength="50" name="correo" required class="form-control" placeholder="Ejemplo: juantenjo@gmail.com">
            </div>
            <div class="form-group">
              <label >Nombre</label>
              <input type="Text" minlength="5" maxlength="50" name="nombre" required class="form-control" placeholder="Ejemplo: Juan Diego">
            </div>
            <div class="form-group">
              <label >Apellidos</label>
              <input type="Text" minlength="5" maxlength="50" name="apellidos" required class="form-control" placeholder="Ejemplo: Pimentel Tenjo">
            </div>
            <div class="form-group">
              <label >Contraseña</label>
              <input type="password" minlength="8" maxlength="20" name="pass" required  id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Ejemplo: juan423534 ">
              <input type="text" name="id_rol" value="1"  class="form-control" style="display: none;">
              <small id="passwordHelpBlock" class="form-text text-muted">
              Su contraseña debe tener entre 8 y 20 caracteres, contener letras y números, y no debe contener espacios, caracteres especiales o emoji.
              </small>
            </div>
            <div class="form-group">
             <button type="submit" class="btn boton btn-lg btn-block shadow-none p-3 mb-5rounded">Registrate</button>
            </div>
          </form><br>
      </article>
  </div>   
</body>

</html>
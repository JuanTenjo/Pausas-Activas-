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
  .nav{
    background-color: #5882FA;
  }
  .imagen{
    margin:auto;
    margin-top: 20%;
  }

  .botonlogin:hover{
    background-color: #CED8F6;
  }
  .botonlogin{
    color: #FFFFFF;
    float: left;
    text-align: right;
  }
  .titulo{
    text-align: center;
  }
  .contenido{
    text-align: center;
    font-size: medium;
  }
  .barra ul li a{
    margin:3px;
    margin-left: 2px;
  }
  .img_nav{
    margin-left: 1000  px;
  }
</style>
<body>
  <div class="container">
  <header>
    <img src="<?php echo base_url()?>imagenes/Recurso3.png" style="width:100%" value="mesa_#" class="img-fluid">
      <div class="barra">
      <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="<?php echo base_url() ?>index.php/inicio"> <img src="<?php echo base_url()?>imagenes/logovisual.png" width="80 " height="30" alt="" loading="lazy"></a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <li class="nav-item">
        <a class="nav-link btn botonlogin" style="color:cornsilk;" role="button" href="<?php echo base_url() ?>index.php/inicie_sesion">Iniciar Sesion</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link btn botonlogin" style="color:cornsilk;" href="<?php echo base_url() ?>index.php/inicie_sesion/cargarvideo" role="button">Videos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  btn botonlogin" style="color:cornsilk;" role="button" href="<?php echo base_url() ?>index.php/inicie_sesion/cargarprograma" tabindex="-1">Programa</a>
      </li>
    </ul>
  </div>
</nav>
  </div>  
  </header>
  </div><br>
  <div class="main">
    <div class="container">
      <div class="row">
      <article class="col-xs-12 col-sm-12 col-md-12" style="align-content: center;">
        
      </article>
  </div>
  </div>
  </div> 
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
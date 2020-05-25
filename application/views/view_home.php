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
  #popup {
    display:none;
    position:absolute;
    margin:0 auto;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    box-shadow: 0px 0px 50px 2px #000;
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
    <a class="navbar-brand" href="#"> <img src="<?php echo base_url()?>imagenes/logovisual.png" width="80 " height="30" alt="" loading="lazy"></a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <?php
        if(empty($nombre)){?>
          <li class="nav-item">
          <a class="nav-link btn botonlogin" style="color:cornsilk;" role="button" href="<?php echo base_url() ?>index.php/inicie_sesion">Iniciar Sesion</a>
        </li>
        <?php }else{?>
          <a class="nav-link btn botonlogin" style="color:cornsilk;" role="button" href="#"><?php echo $nombre ?></a>
        <?php } ?>
      <li class="nav-item active">
        <a class="nav-link btn botonlogin" style="color:cornsilk;" href="<?php echo base_url() ?>index.php/inicie_sesion/cargarvideo" role="button">Videos<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link  btn botonlogin" style="color:cornsilk;" role="button" href="<?php echo base_url() ?>index.php/inicie_sesion/cargarcontactos" tabindex="-1">Contactos</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
  </div>  
  </header>
  </div><br>
  <div class="main">
    <div class="container">
      <div class="row">
      <article class="col-xs-3 col-sm-3 col-md-3" style="align-content: center;">
      <h4 style="text-align: center;">Tabla de contenido</h4>
      <?php
        if (empty($contenido)) {
          echo 'No existe contenido';
        }else{
        foreach ($contenido->result() as $row) { ?>
        <center><a href="#<?php echo $row->titulo ?>" style="color:black;"><?php echo $row->titulo ?></a><hr></center>
      <?php }} ?>
      <h5>Descarga la guia completa</h5>
      <img src="<?php echo base_url()?>imagenes/iconopdf.jpg" width="40 " height="40" alt="" loading="lazy">  
      <a href="<?php echo base_url()?>pdf/pdf.pdf" download="GuiaPausaActivas">
      Descargar Archivo
      </a><br><br>
      <center><img src="<?php echo base_url()?>imagenes/dibujo.png" width="200" height="400" alt="" loading="lazy"></center>
      </article>
      <article class="col-xs-9 col-sm-9 col-md-9" style="align-content: center;">
      <?php 
            if (empty($contenido)) {
                echo 'No existe contenido';
            }else{
            foreach ($contenido->result() as $row) { ?>
            <div class="titulo" id="<?php echo $row->titulo ?>">
            <h3><?php echo $row->titulo ?><small> Autor: <?php echo $row->autor ?></h3>
            </div>
            <div class="contenido">
            <p align="justify"><?php echo $row->texto ?></p>
            <HR>
            </div>   
          <?php }} ?>
      </article>
  </div>
  </div>
  </div> 
  <script>
      $(document).ready(function()
      {
         $("#mostrarmodal").modal("show");
      });
</script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
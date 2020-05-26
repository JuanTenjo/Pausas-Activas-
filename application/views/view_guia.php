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
  


 
  .titulo{
    text-align: center;
  }
  .contenido{
    text-align: center;
    font-size: medium;
  }
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
  .tabladecontenido{
      background-color: #5882FA;
      opacity:0.9;
      padding: 2%;
  }
  .tabladecontenido a:hover{
      background-color: #fff;
      
  }
  .tabladecontenido a{
    text-decoration: none;
  }
</style>
<body>
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
      <?php
        if(empty($nombre = $this->session->userdata('NOMBRE'))){?>
        <li class="nav-item" >
          <a class="nav-link btn btn-success my-2 my-sm-0" style="color:white;" role="button" href="<?php echo base_url() ?>index.php/inicie_sesion">Iniciar Sesion</a>
        </li>
        <?php }else{?>
          <a class="navbar-brand" href="<?php echo base_url()?>index.php/inicio"><img src="<?php echo base_url()?>imagenes/conf1.png" width="30" class="img-fluid" alt="" loading="lazy"></a>
          <p style="color: #fff;margin-top:10px;"><?php echo $nombre ?></p>
        <?php } ?>
    </div>
    </nav>
   
  <div class="main" style="margin-top: 26px;">
    <div class="container">
    <div class="row">
    <article class="col-xs-12 col-sm-12 col-md-12">
    <?php
        if(empty($nombre)){?>
        <div class="alert alert-warning" role="alert">
        Registrate e inicia sesion para que se activen estas opciones
        </div>
        <button type="button" class="btn btn-primary btn-danger disabled" disabled data-toggle="modal" data-target="#staticBackdrop">
        Mirar en formato revista
        </button> 
        <a href="<?php echo base_url()?>pdf/pdf.pdf" class="btn btn-primary btn-danger disabled" download="GuiaPausaActivas">
        Descargar Guia
        </a>
        <?php }else{?>
        <button type="button" class="btn btn-primary btn-success btn-lg "  data-toggle="modal" data-target="#staticBackdrop">
        Mirar en formato revista
        </button>
        <a href="<?php echo base_url()?>pdf/pdf.pdf" class="btn btn-success btn-lg" download="GuiaPausaActivas">
        Descargar Guia
        </a>
    <?php } ?>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog modal-xl">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Revista</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <div class="revista">
                    <h5>Activa pantalla completa</h5>
                    <iframe name="joomag-embed-47fdec9b-83d1-4ae7-85b7-0608d2de930e" allowfullscreen="allowfullscreen" style="width:900px;height:538px;" width="100%" hspace="0" vspace="0" frameborder="0" src="https://view.joomag.com/mi-primera-publicacion/0958980001590512387?e=1&amp;page=1&amp;embedInfo=;"></iframe>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>
    </article>
    </div><br>
      <div class="row">
      <article class="col-xs-3 col-sm-3 col-md-3">
    
      <h4 style="text-align: center;">Tabla de contenido</h4>
      <?php
        if (empty($contenido)) {
          echo 'No existe contenido';
        }else{
        foreach ($contenido->result() as $row) { ?>
            <div class="tabladecontenido">
            <a href="#<?php echo $row->titulo ?>" class="btn "  style="color:black;"><?php echo $row->titulo ?></a><br>
            </div>
      <?php }} ?>
<br>
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
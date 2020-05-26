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
  <title>Contacto</title>
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
  <div class="main">
    <div class="container">
      <div class="row" style="margin-top: 3%;">
      <article class="col-xs-6  col-sm-6 col-md-6">
            <div class="contactos">
            <H4>Redes Sociales</H4><br>
            <img src="<?php echo base_url()?>imagenes/whatsapp.png" alt="">
            <a href="http://wa.me/573203971623?text=Hola">Whatsapp Directo</a><hr><br>
            <img src="<?php echo base_url()?>imagenes/facebook.png" alt="">
            <a href="https://www.facebook.com/Visual-Center-Colombia-920772937989117/">Facebook</a><hr><br>
            <img src="<?php echo base_url()?>imagenes/instagram.png" alt="">
            <a href="https://www.instagram.com/visualcentercolombia/">Instagram</a><hr><br>
            <img src="<?php echo base_url()?>imagenes/email.png" alt="">
            <a href="mailto:distrilent@yahoo.es">Clickea para enviar email a un destinatario</a><hr><br>

            </div>
      </article>
      <article class="col-xs-6 col-sm-6 col-md-6">
            <div class="contactos">
            <H4>Encuentranos</H4><br>
            <h6>Direccion: cra 5 # 2-59, barrio La trinidad</h6><hr> 
            <h6>Telefono: 8714907 - 8721544</h6><hr>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2820.558805601712!2d-75.28565945650307!3d2.912420751067746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3b7385b792270f%3A0x894ea4f075c37910!2sCl.%2012%20Sur%20%235-11%2C%20Neiva%2C%20Huila!5e0!3m2!1ses!2sco!4v1590521656478!5m2!1ses!2sco" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> 
            </div>
      </article>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
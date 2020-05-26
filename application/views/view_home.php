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
  .imagenheader{
    position: relative;
    width: 80%; /* for IE 6 */
    height: 750px;
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
  .footer{
    background-color: #2E64FE;
    opacity:0.9;
  }
</style>
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
          <a class="nav-link" href="#videos">Videos</a>
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
    <div class="container-fluid">
      <div class="row">
      <article class="col-xs-12 col-sm-12 col-md-12" style="align-content: center;">
      <div id="carouselExampleIndicators" class="carousel slide container-fluid" data-ride="carousel" style="width:100%;">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner"  >
        <div class="carousel-item active" >
          <img class="d-block w-100 img-fluid" src="<?php echo base_url()?>imagenes/edi1.png" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 img-fluid" src="<?php echo base_url()?>imagenes/edi2.png" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 img-fluid" src="<?php echo base_url()?>imagenes/edi3.png" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <center><img src="<?php echo base_url()?>imagenes/edi5.png" alt="" class="img-fluid" width="98%"></center>
    </article>
  </div>
  </div>
  </div> 
  <div class="container">
  <div class="row">
  <article class="col-xs-8 col-sm-8 col-md-8">
      <div id="videos">
      <center><video src="<?php echo base_url()?>imagenes/Pausas.mp4" width="100%" height="100%"  controls autoplay>
       Tu navegador no admite el elemento <code>video</code>.
      </video></center>
      </div>
  </article>
  <article class="col-xs-4 col-sm-4 col-md-4">
      <div id="texto1">
        <center><h2>Misión</h2></center><br>
        <p ALIGN="justify"><b>EN OPTICAL VISUAL CENTER</b> nos sentimos comprometidos en dar satisfacción a nuestros clientes
        ofreciendoles una seleccion de los mejores y mas variados productos a travez de un servicio
        diferenciado, exclusivos y de alta calidad. Apoyándonos en n exquisito trato personalizado, para 
        lograr que cada cliente se sienta especial y plenamente satisfecho.</p>

      </div>
  </article>
  </div><br><br>
  <div class="row">
  <article class="col-xs-4 col-sm-4 col-md-4">
  <div id="texto1">
        <center><h2>Visión</h2></center><br>
        <p ALIGN="justify"><b>EN OPTICAL VISUAL CENTER</b> nuestra visión es consolidarnos en el años 2020 como la mejor
        opción optica para satisfacer la necesidades de nuestros clientes en diferentes regiones del pais
        siendo los lideres como la cadena de opticas de mayor cobertura nacional bajo el amparo de la 
        tecnologia, productividad, talento humano y profundo espiritu de servicio.</p>

      </div>
  </article>
  <article class="col-xs-8 col-sm-8 col-md-8">
      <div id="videos">
      <center><video src="<?php echo base_url()?>imagenes/Medidas.mp4" width="100%" height="100%"  controls >
       Tu navegador no admite el elemento <code>video</code>.
      </video></center>
      </div>
  </article>
  </div><br>
  <div class="row">
  <article class="col-xs-6 col-sm-6 col-md-6">
  <img src="<?php echo base_url()?>imagenes/edi6.png" class="img-fluid" width="">
      <p ALIGN="justify" style="margin-top: 5%"><b>Profesionalidad: </b>Nos comprometemos con nuestros clientes de forma honesta y sincera con el
      objetivo de escuchar, conocer atender y ofrecer soluciones a sus necesidades. Trabajamos con la 
      maxima excelencia, para poder ofrecer un alto nivel de eficiencia y eficacia en cada una de nuestras actividades</p>
      <p ALIGN="justify" style="margin-top: 5%"><b>Compromiso </b>Nos identificamos e involucramos con los objetivos
      de la empresa y nos comprometemos a alcanzar a los resultados cualitativos y cuantitativos que se esperan, para ello buscamos
      de forma continua la excelencia en nuestro trabajo con el objetivo de cumplir con todos los compromisos 
      adquiridos y alcanzar los estandares esperados.</p>
      <p ALIGN="justify" style="margin-top: 5%"><b>Calidad: </b>Estamos orgullosos de ofrecer un óptimo nivel de calidad 
      en nuestro servicio, ofreciendo a nuestros clientes una respuesta rápida y excenlente para lograr su satisfacción.
      Buscamos la mejora continua para que los clientes confien en nuestra empresa todos los requisitos de calidad técnica</p>
  </article>
  <article class="col-xs-6 col-sm-6 col-md-6">
  <img src="<?php echo base_url()?>imagenes/img3.jpg" class="img-fluid"  style="margin-top: 15%" width="">
  </article>
  </div>
  <div class="row">
  <article class="col-xs-12 col-sm-12 col-md-12">
    <footer class="footer" >
         <div style="padding:1%; color:#fff;">
          <i>© Fet</i>
         </div>
    </footer>
  </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
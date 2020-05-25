<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="<?php echo base_url(); ?>boostrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>boostrap/css/bootstrap-grid.min.css">
 
  <title>Administrador</title>
  <style>
    .listasusuarios{
      text-align: center;
    }
    .listasparrafos{
      text-align: center;
    }
  </style>
</head>
<body>
  <?php
    $nombre = $this->session->userdata('NOMBRE');
  ?>
  <div class="container">
    <header>
    <center><img src="<?php echo base_url()?>imagenes/portada3.png" style="height:100%; width:40%" value="mesa_#" class="img-fluid"><center>
    </header><br>
   
    <div class="main">
    <div class="row">
    <article class="col-xs-12 col-sm-12 col-md-12" style="align-content: center;">
      <h2>Cree aqui el contenido de la pagina</h2><br>
    <form action="<?php echo base_url() ?>index.php/administrador/contenido" method="post" data-ajax="false">
  <div class="form-group">
    <label for="exampleFormControlInput1">Titulo</label>
    <input type="text" require maxlength="40" class="form-control" name="titulo" placeholder="Titulo del parrafo">
    <input type="text" class="form-control" name="nombre" style="display:none" value="<?php echo $nombre ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Contenido</label>
    <textarea require class="form-control" id="exampleFormControlTextarea1" rows="10" name="contenido"></textarea>
  </div>
  <div class="form-group">
     <button type="submit" class="btn btn-success btn-lg btn-block shadow-none p-3 mb-5rounded">Guardar</button>
  </div>
  </form>
    </article>
    </div><hr>
    <div class="row">
    <article class="col-xs-6 col-sm-6 col-md-6 listasparrafos">
      <h2>Lista de parrafos</h2>
      <div class="table-responsive">
        <table class="table table-bordered  table-hover">
          <caption>Lista de parrafos</caption>
          <tr class="table-success" style="color:black;">
            <th scope="row">Autor</th>
            <th scope="row">Titulo</th>
            <th scope="row">Editar</th>
            <?php
            foreach ($contenido->result() as $row) { ?>
              <form action="<?php echo base_url() ?>index.php/administrador/mostrar_texto" method="post" data-ajax="false">
            <tr>
              <td scope="col" style="display:none"><input type="text" value="<?php echo ($row->idtextos); ?>" name="id" size="1" readonly="readonly"></td>
              <td scope="col"><?php echo ($row->autor); ?></td>
              <td scope="col"><?php echo ($row->titulo); ?></td>
              <td scope="col"><input type="submit" name="" value="Editar"  class="btn btn-info"></td>
            </tr>
            </form>
          <?php } ?>
          </tr>
        </table>
      </div>
    </article>
    <article class="col-xs-6 col-sm-6 col-md-6 listasusuarios">
      <h2>Usuarios</h2>
      <div class="table-responsive">
        <table class="table table-bordered  table-hover">
          <caption>Lista de usuarios</caption>
          <tr class="table-success" style="color:black;">
            <th scope="row">Correo</th>
            <th scope="row">Nombre</th>
            <th scope="row">Apellido</th>
            <th scope="row">Rol</th>
            <th scope="row">Editar</th>
            <?php
            foreach ($usuarios->result() as $raw) { ?>
              <form action="<?php echo base_url() ?>index.php/administrador/mostrar_usuarios" method="post" data-ajax="false">
            <tr>
              <td scope="col" style="display:none"><input type="text" value="<?php echo ($raw->id_usuarios); ?>" name="id" readonly="readonly"></td>
              <td scope="col"><?php echo ($raw->correo); ?></td>
              <td scope="col"><?php echo ($raw->nombre); ?></td>
              <td scope="col"><?php echo ($raw->apellidos); ?></td>
              <td scope="col"><?php echo ($raw->nombrerol); ?></td>
              <td scope="col"><input type="submit" name="" value="Editar"  class="btn btn-info"></td>
            </tr>
            </form>
          <?php } ?>
          </tr>
        </table>
      </div>
    </article>
    </div>
    </div>
  </div>
  <script type="text/javascript" src="<?php echo base_url(); ?>boostrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>boostrap/js/bootstrap.min.js"></script>
</body>
</html>
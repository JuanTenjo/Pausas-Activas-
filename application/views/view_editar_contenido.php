<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Editar</title>
  </head>
  <body>
      <div class="container">
        <div class="alert alert-warning" role="alert" style="width:100%;">
          <h3><b>Editar o eliminar Contenido</b></h3>
        </div>
        <form action="<?php echo base_url() ?>index.php/administrador/modificar_contenido" method="POST" data-ajax="false">
        <fieldset>
        <legend>Titulo</legend>
        <input type="text" class="form-control" name="titulo"  value="<?php echo $titulo; ?>" style="max-width:30%;">
        </fieldset>
        <legend>Contenido</legend>
        <textarea class="form-control"  rows="10" name="text" value="<?php echo $texto; ?>"><?php echo $texto; ?></textarea>
        </fieldset>
        <fieldset>
        <legend>Autor</legend>
        <input type="text" class="form-control" name="autor" value="<?php echo $autor; ?>" style="max-width:30%;">
        </fieldset>
        <input type="number" name="id" value="<?php echo $id; ?>" style="display:none"><br>
        <input type="submit" value="Modificar"  class="btn btn-success">
        </form>
        <form action="<?php echo base_url() ?>index.php/administrador/eliminar_contenido" method="POST" data-ajax="false">
        <input type="number" name="id" value="<?php echo $id; ?>" style="display:none"><br>
        <input type="submit" value="Eliminar" class="btn btn-danger">
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
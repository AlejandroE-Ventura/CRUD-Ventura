<?php 
    $idNombre = $datos[0]['id_nombre'];
    $nombre = $datos[0]['nombre'];
    $paterno = $datos[0]['paterno'];
    $materno = $datos[0]['materno'];
 ?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Actualizar nombres</title>
  </head>
  <body>
     <div class="container">
        <h1>CRUD con Codeigniter 4</h1>
        <div class="rou">
            <div class="col-sm-12">
                <form method="POST" action="<?php echo base_url().'/actualizar' ?>">
                    <input type="text" name="idNombre" id="idNombre" hidden="" value="<?php echo $idNombre?>">
                    <label for="nombre">Nombre</label >
                    <input type="text" name="nombre" id="nombre" class="form-control"value="<?php echo $nombre?>">
                    <label for="paterno">Apellido paterno</label>
                    <input type="text" name="paterno" id="paterno" class="form-control"value="<?php echo $paterno?>">
                    <label for="materno">Apellido materno</label>
                    <input type="text" name="materno" id="materno" class="form-control"value="<?php echo $materno?>">
                    <br>
                    <button class="btn btn-warning">Guardar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>



  </body>
</html>
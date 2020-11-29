<!doctype html>
<html lang="es">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<title>CRUD INICIO</title>
</head>
<body>
	
	<div class="container">
		<h1>CRUD con Codeigniter 4</h1>
		<div class="rou">
			<div class="col-sm-12">
				<form method="POST" action="<?php echo base_url().'/crear' ?>">
					<label for="nombre">Nombre</label>
					<input type="text" name="nombre" id="nombre" class="form-control">
					<label for="paterno">Apellido paterno</label>
					<input type="text" name="paterno" id="paterno" class="form-control">
					<label for="materno">Apellido materno</label>
					<input type="text" name="materno" id="materno" class="form-control">
					<br>
					<button class="btn btn-primary">Guardar</button>
				</form>
			</div>
		</div>
		<hr>

		<h2>Listado de personas</h2>
		<div class="row">
			<div class="col-sm-12">
				<div class="table table-responsive">
					<table class="table table-hover table-bordered">
						<tr>
							<th>Nombre</th>
							<th>Apellido paterno</th>
							<th>Apellido materno</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</tr>
						<?php foreach ($datos as $key): ?>
							<tr>
								<td><?php echo $key->nombre?></td>
								<td><?php echo $key->paterno?></td>
								<td><?php echo $key->materno?></td>
								<td>
									<a href="<?php echo base_url().'/obtenerNombre/'.$key->id_nombre ?>" class="btn btn-warning btn-sm">Editar</a>
								</td>
								<td>
									<a href="<?php echo base_url().'/eliminar/'.$key->id_nombre ?>" class="btn btn-danger btn-sm">Eliminar</a>
								</td>
							</tr>
						<?php endforeach; ?>
					</table>
				</div>
			</div>
		</div>

	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">
    	let mensaje = '<?php echo $mensaje ?>';
    	if (mensaje == '1') {
    		swal(":D","Agregado con exito","success");
    	}else if(mensaje == '0'){
    		swal(":C","Fallo al agregar","error");
    	}else if(mensaje == '2'){
    		swal(":D","Actualizado conexito","success");
    	}else if(mensaje == '3'){
    		swal(":C","Fallo al actualizar","error");
    	}else if(mensaje == '4'){
    		swal(":D","Eliminado conexito","success");
    	}else if(mensaje == '5'){
    		swal(":C","Fallo al eliminar","error");
    	}
    </script>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="">
	<script src="js/jquery-3.6.0.slim.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="js/funciones.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<h2>SENDERISMO</h2>
		<div class="container">
			<form action="" method="post">
				<div class="form-group">
					<table class="table table-bordered table-hover">
						<tr>
							<td><input class="form-control" type="text" name="peso" placeholder="Peso máximo"></td>
							<td><input class="form-control" type="text" name="calorias" placeholder="Calorías mínimas"></td>
						</tr>	
					</table>
				</div>
				<div class="form-group">
					<div id="btnAgregar" class="btn btn-success">AGREGAR FILA</div>
					<table id="tablaElementos" class="table table-bordered table-hover">
						<tr>
							<th>Peso</th>
							<th>Calorías</th>
							<th>Opciones</th>
						</tr>
						<tr>
							<td><input class="form-control" type="text" name="pesoElemento[]" placeholder="Peso del elemento"></td>
							<td><input class="form-control" type="text" name="caloriaElemento[]" placeholder="Propiedad calórica"></td>
							<td class="text-center">
								<div class="btn btn-danger" type="button" name="eliminar">ELIMINAR</div>
							</td>
						</tr>	
					</table>
					<div class="btn btn-success">CALCULAR</div>
				</div>
				<input class="form-control" type="text" name="salida" value="" placeholder="salida">
			</form>
		</div>
	</div>
</body>
</html>
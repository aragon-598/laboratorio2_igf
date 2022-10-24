<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	</head>
	
	<body>
		<?php
			include "views/template/header.php";
		?>
		<div class="container p-4">
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=vehiculos&a=guarda" autocomplete="off">
				<div class="form-group">
					<label for="placa">Placa</label>
					<input type="text" class="form-control" id="placa" name="placa" />
				</div>
				
				<div class="form-group">
					<label for="marca">Marca</label>
					<input type="text" class="form-control" id="marca" name="marca" />
				</div>
				
				<div class="form-group">
					<label for="modelo">Modelo</label>
					<input type="text" class="form-control" id="modelo" name="modelo" />
				</div>
				
				<div class="form-group">
					<label for="anio">Año</label>
					<input type="text" class="form-control" id="anio" name="anio" />
				</div>
				
				<div class="form-group">
					<label for="color">Color</label>
					<input type="text" class="form-control" id="color" name="color" />
				</div>
				<br>
				<div class="mb-3">
					<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
					<a href="/mvc/" class="btn btn-secondary">Cancelar</a>
				</div>
				
			</form>
		</div>
	</body>
</html>
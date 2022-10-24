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
		<div class="container">
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<a href="index.php?c=vehiculos&a=nuevo" class="btn btn-primary">Agregar</a>
			
			<br />
			<br />
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr >
							<th>Placa</th>
							<th>Marca</th>
							<th>Modelo</th>
							<th>Año</th>
							<th>Color</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</tr>
					</thead>
					
					<tbody class="table-group-divider">
						<?php foreach($data["vehiculos"] as $dato) {
							echo "<tr>";
							echo "<td>".$dato["placa"]."</td>";
							echo "<td>".$dato["marca"]."</td>";
							echo "<td>".$dato["modelo"]."</td>";
							echo "<td>".$dato["anio"]."</td>";
							echo "<td>".$dato["color"]."</td>";
							echo "<td><a href='index.php?c=vehiculos&a=modificar&id=".$dato["id"]."' class='btn btn-warning'><i class='bi bi-pencil'></i> Modificar</a></td>";
							echo "<td><a href='index.php?c=vehiculos&a=eliminar&id=".$dato["id"]."' class='btn btn-danger'><i class='bi bi-trash'></i> Eliminar</a></td>";
							echo "</tr>";
						}
						?>
					</tbody>
					
				</table>
			</div>
		</div>
	</body>
</html>
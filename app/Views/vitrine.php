<?php
/** @var array $listaDeCarros */
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Vitrine</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="p-3">
	<h2 class="text-center">Acelere seu sonho!</h2>	

	<br>

	<table class="table table-hover">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Marca</th>
				<th scope="col">Modelo</th>
				<th scope="col">Motor</th>
				<th scope="col">Ano</th>
				<th scope="col">Valor</th>
				<th scope="col">Km</th>
				<th scope="col">...</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($listaDeCarros as $item): ?>
				<tr>
					<td scope="row"><?= $item ['id'] ?></td>
					<td><?= $item ['marca'] ?></td>
					<td><?= $item ['modelo'] ?></td>
					<td><?= $item ['motor'] ?></td>
					<td><?= $item ['ano'] ?></td>
					<td><?= $item ['valor'] ?></td>
					<td><?= $item ['km'] ?></td>
					<td>
						<div class="d-flex gap-2">
							<a href="#" class="btn btn-sm btn-outline-primary">Edit</a>
							<a href="#" class="btn btn-sm btn-outline-danger">Delete</a>
						</div>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
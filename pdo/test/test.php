<?php require '../config/app.php'; ?>
<!-- <?php include '../config/security_apprentice.php'; ?> -->
<?php include '../config/bd.php'; ?>
<?php include '../includes/header.inc'; ?>
<?php include '../includes/navbar.inc'; ?>

<link rel="stylesheet" href="../public/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link rel="stylesheet" href="../public/css/custom.css">
<link rel="stylesheet" href="../public/css/owl.carousel.min.css">
<link rel="stylesheet" href="../public/css/owl.theme.default.min.css">

	  
<?php 
	if (isset($_SESSION['urol'])) {
		if($_SESSION['urol'] == 'Admin') {
			echo "<h1 class='text-center'><i class='fa fa-user-tie'></i> Bienvenido Administrador</h1>";
		} else if($_SESSION['urol'] == 'Aprendiz'){
			echo "<h1 class='text-center'><i class='fa fa-user'></i> Bienvenido Aprendiz</h1>";
		}
	}
 ?>
<hr id="ba" class="col-9">
<div class="container">
	<div id="r2" class="row">
		<div class="col-md-8 offset-md-2 text-center">
			<table class="table table-hover">
				<thead>
					<tr>
						<th  class="gbt">Escalas</th>
						<th  class="gbt">TEST</th>
						<th colspan='3' class="gbt">Realizar</th>
						<?php 
							if (isset($_SESSION['urol'])) {
								if($_SESSION['urol'] == 'Admin') {
									echo "<th colspan='3' class='gbt'>Eliminar</th>";
								} else if($_SESSION['urol'] == 'Aprendiz'){
									echo "";
								}
							}
						 ?>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td colspan="3">Comprensión</td>
						<td><a class="btn btn-success" href="#" role="button"><i class="fa fa-edit"></i></a></td>
						<?php 
							if (isset($_SESSION['urol'])) {
								if($_SESSION['urol'] == 'Admin') {
									echo "<td><a class='btn btn-danger' href='#' role='button'><i class='fa fa-trash	''></i></a></td>";
								} else if($_SESSION['urol'] == 'Aprendiz'){
									echo "";
								}
							}
						 ?>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td colspan="3">Memoria</td>
						<td><a class="btn btn-success" href="#" role="button"><i class="fa fa-edit"></i></a></td>
						<?php 
							if (isset($_SESSION['urol'])) {
								if($_SESSION['urol'] == 'Admin') {
									echo "<td><a class='btn btn-danger' href='#' role='button'><i class='fa fa-trash	''></i></a></td>";
								} else if($_SESSION['urol'] == 'Aprendiz'){
									echo "";
								}
							}
						 ?>

					</tr>
					<tr>
						<th scope="row">3</th>
						<td colspan="3">Razonamiento</td>
						<td><a class="btn btn-success" href="#" role="button"><i class="fa fa-edit"></i></a></td>
						<?php 
							if (isset($_SESSION['urol'])) {
								if($_SESSION['urol'] == 'Admin') {
									echo "<td><a class='btn btn-danger' href='#' role='button'><i class='fa fa-trash	''></i></a></td>";
								} else if($_SESSION['urol'] == 'Aprendiz'){
									echo "";
								}
							}
						 ?>

					</tr>
					<tr>
						<th scope="row">4</th>
						<td colspan="3">Velocidad de Pensamiento</td>
						<td><a class="btn btn-success" href="velocidad_pensamiento.php" role="button"><i class="fa fa-edit"></i></a></td>
						<?php 
							if (isset($_SESSION['urol'])) {
								if($_SESSION['urol'] == 'Admin') {
									echo "<td><a class='btn btn-danger' href='#' role='button'><i class='fa fa-trash	''></i></a></td>";
								} else if($_SESSION['urol'] == 'Aprendiz'){
									echo "";
								}
							}
						 ?>

					</tr>

				</tbody>
			</table>
		</div>
	</div>
</div>
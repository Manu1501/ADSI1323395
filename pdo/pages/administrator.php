<?php require '../config/app.php'; ?>
<?php include '../config/security_admin.php'; ?>
<?php include '../config/bd.php'; ?>
<?php include '../includes/header.inc'; ?>
<?php include '../includes/navbar.inc'; ?>

<link rel="stylesheet" href="../public/css/bootstrap.min.css">
<link rel="stylesheet" href="../public/css/fontawesome-all.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link rel="stylesheet" href="../public/css/custom.css">
<link rel="stylesheet" href="../public/css/owl.carousel.min.css">
<link rel="stylesheet" href="../public/css/owl.theme.default.min.css">
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-2">
			<br><br>
			<h1 class="text-center my-lg-5"><i class="fas fa-user-tie"></i> Bienvenido Administrador</h1>
			<hr>
			
			<table class="table table-bordered table-hover">
				<thead class="text-center gbt">
					<th colspan="2">Funcionalidad</th>
				</thead>
				<tbody>
					<tr>
						<td colspan="2">
							A continuación encontrará dos opciones donde podrá gestionar los siguientes módulos. La primera opción es para gestionar usuarios y en la segunda opción podrá realizar gestión de los test implementados en el sistema de información
						</td>
					</tr>
					<tr>
						<td class="text-center gbt"><strong>Módulo Usuarios</strong></td>
						<td class="text-center gbt"><strong>Módulo Test</strong></td>
					</tr>
					<tr>
						<td class="text-center">
							<a href="../users/" class="btn btn-outline-success btn-success btn-lg">
								<i class="fa fa-users"></i> Gestionar
							</a>
						</td>
						<td class="text-center">
							<a href="../test/test.php" class="btn btn-outline-success btn-lg">
								<i class="fa fa-list"></i> Gestionar
							</a>
						</td>
					</tr>
				</tbody>
			</table>
			<div class="instituciones text-center" style="margin-bottom: 150px">
			<h3 class="text-center">Instituciones de Apoyo</h3>
				<hr class="col-9">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="../public/imgs/fotos/bienestar.jpg" alt="First slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="../public/imgs/fotos/ministerio.png" alt="Second slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="../public/imgs/fotos/biblioteca.jpg" alt="Third slide">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: black; border-radius: 50%;"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true" style="background-color: black; border-radius: 50%;"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $con = null; ?>
<?php include '../includes/footer.inc'; ?> 
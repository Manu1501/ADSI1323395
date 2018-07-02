<?php require '../config/app.php'; ?>
<?php include '../config/security_apprentice.php'; ?>
<?php include '../config/bd.php'; ?>
<?php include '../includes/header.inc'; ?>
<?php include '../includes/navbar.inc'; ?>

<link rel="stylesheet" href="../public/css/bootstrap.min.css">
<link rel="stylesheet" href="../public/css/fontawesome-all.min.css">
<link rel="stylesheet" href="../public/css/custom.css">
<link rel="stylesheet" href="../public/css/owl.carousel.min.css">
<link rel="stylesheet" href="../public/css/owl.theme.default.min.css">

<h1  class="text-center"><i class="fa fa-user"></i> Bienvenido Aprendiz </h1>
<hr id="ba" class="col-9">
<div class="container">
	<div id="r2" class="row">
		<div class="col-md-8 offset-md-2 text-center">
			<div class="descripcion">
				<p>
					<strong class="text-orange">Aprendiz</strong>, a continuación encontrarás información que te ayudará en el uso de este sistema de información, además hayarás una serie de activades donde prodrás pasar por un dignóstico y explotar tus habilidades congnitivas para un mejor aprendizaje.   
				</p>
			</div>
			<a class="btn btn-success btn-lg" href="../test/test.php" role="button"><i class="fa fa-puzzle-piece"></i> Realizar Test</a>
			<div class="instituciones text-center">
				<h3>Instituciones de Apoyo</h3>
				<hr class="col-9">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
							<a href="https://goo.gl/m30aRd"><img class="d-block img-fluid" src="../public/imgs/fotos/biblioteca.jpg" alt="First slide"></a>
						</div>
						<div class="carousel-item">
							<a href="https://goo.gl/qgXA2V"><img class="d-block img-fluid" src="../public/imgs/fotos/bienestar.jpg" alt="Second slide"></a>
						</div>
						<div class="carousel-item">
							<a href="https://goo.gl/dKhN4n"><img class="d-block img-fluid" src="../public/imgs/fotos/ministerio.png" alt="Third slide"></a>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon btn" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon btn" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<div class="info">
				<div class="containerS">
					<img src="../public/imgs/fotos/sena.png" class="image" width="200px">
					<div class="overlay">
						<div class="text"><strong>SENA Regional Caldas</strong> Entidad de formación para el trabajo del Estado colombiano.</div>
					</div>
				</div>
				<div class="containerB">
					<img src="../public/imgs/fotos/bienestar.png" class="image" width="200px">
					<div class="overlay">
						<div class="text"><strong>Bienestar al Aprendiz</strong> busca generar espacios que giren entorno a la formación integral de los Aprendices y que potencialicen sus capacidades</div>
					</div>
				</div>
				<div class="containerG">
					<img src="../public/imgs/fotos/diego.jpg" class="image" width="210px" height="200px">
					<div class="overlay">
						<div class="text">
							<strong>Diego Ángelo Restrepo Zapata</strong>
							Trabajador Social, Magister en Ciencias Sociales, Magister en Estudios Religiosos,  Candidato a Doctor en <strong>Pensamiento Complejo</strong>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $con = null; ?>
<?php include '../includes/footer.inc'; ?>


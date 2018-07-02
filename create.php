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

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1 class="text-center"><i class="fa fa-search"></i>Adicionar Usuario</h1>
			<hr>
			<ol class="breadcrumb">
				<li><a href="../" class="btn btn-primary"><i class = "fa fa-home"></i> Inicio</a></li>
				<li class="active">Adicionar Usuario</li>
			</ol>
			<form action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<input type="number" class="form-control" name="documento" placeholder="Documento de identidad" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="nombre" placeholder="Nombre completo" required>
				</div>
				<div class="form-group">
					<input type="email" class="form-control" name="correo" placeholder="Correo Electronico" required>
				</div>
				<div class="form-group">
					<input type="password" class="form-control" name="clave" placeholder="Contraseña" required>
				</div>
				<div class="form-group">
					<input type="number" class="form-control" name="telefono" placeholder="Número Telefónico" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="ciudad" placeholder="Ciudad" required>
				</div>
				<div class="form-group">
					<input type="file" class="form-control" name="foto" accept="../public/imgs/nofoto.png" required>
					<button class="btn btn-default btn-foto"><i class="fa fa-user"></i>Seleccione Foto de Perfil</button>
				</div>
				<div class="form-group">
					<select name="genero" class="form-control">
						<option value="">Seleccione el Genero...</option>
						<option value="F">Femenino</option>
						<option value="M">Masculino</option>
						<option value="T">Transgenero</option>
					</select>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Guardar</button>
					<button type="reset" class="btn btn-danger"> <i class="fa fa-sync-alt"></i> Limpiar</button>
				</div>
			</form>
			<?php include '../config/connect.php';
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$documento = mysqli_real_escape_string($conn, $_POST['documento']);
				$nombre    = mysqli_real_escape_string($conn, $_POST['nombre']);
				$correo    = mysqli_real_escape_string($conn, $_POST['correo']);
				$clave     = md5(mysqli_real_escape_string($conn, $_POST['clave']));
				$telefono  = mysqli_real_escape_string($conn, $_POST['telefono']);
				$ciudad    = mysqli_real_escape_string($conn, $_POST['ciudad']);
				$url       = 'public/imgs/';
				$foto      = $url.$_FILES['foto']['name'];
				move_uploaded_file($_FILES['foto']['tmp_name'], '../'.$url.$_FILES['foto']['name']);
				$genero    = mysqli_real_escape_string($conn, $_POST['genero']);

				$sql = "INSERT INTO usuarios VALUES($documento, '$nombre', '$correo', '$clave', $telefono, '$ciudad', '$foto', '$genero', DEFAULT)";

				if (mysqli_query($conn, $sql)) {
					$_SESSION['statusQuery'] = 'success';
					$_SESSION['message'] = 'Usuario Adicionado con Exito!';
				}else{
					$_SESSION['statusQuery'] = 'danger';
					$_SESSION['message'] = 'El Usuario no se Pudo Adicionar!';
				}
				echo "<script> window.location.replace('../')</script>";
			}

			mysqli_close($conn);?>
		</div>
	</div>
</div>

<script src="../public/js/jquery-3.3.1.min.js"></script>
<script src="../public/js/bootstrap.min.js"></script>
<script src="../public/js/sweetalert2.all.js"></script>
<script>
	$(document).ready(function() {
		$('input[type=file]').hide();
		$('form').on('click', '.btn-foto', function(event) {
			event.preventDefault();
			$('input[type=file]').click();
		})
	});
</script>
</body>
</html>
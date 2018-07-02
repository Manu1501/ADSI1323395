<?php require '../config/app.php'; ?>
<?php include '../config/security_admin.php'; ?>
<?php include '../config/bd.php'; ?>
<?php include '../includes/header.inc'; ?>
<?php include '../includes/navbar.inc'; ?>

<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2 ">
			<h1 class="text-center text-muted text-center"><i class="fa fa-edit"></i>Mofidicar Usuarios</h1>
			<hr>
			<nav arial-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"> <a href="index.php" class="link-success">Módulo Usuarios</a></li>
					<li class="breadcrumb-item active">Modificar Usuarios</li>
				</ol>
			</nav>
			<?php $usuario = mostrarUsuario($con, $_GET['documento']); ?>
			<?php foreach ($usuario as $urow): ?>
				
			<form action="" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<input type="number" class="form-control" name="documento" value="<?php echo $urow['documento'];?>" required readonly>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="nombres" value="<?php echo $urow['nombres'];?>" required>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" name="correo" value="<?php echo $urow['correo'];?>" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="ProgramaFormacion" value="<?php echo $urow['ProgramaFormacion'];?>" required>
					</div>
					<div class="form-group">
						<input type="file" class="form-control" name="foto"  accept="imgs/*">
						<button class="btn btn-default btn-foto"><i class="fa fa-user"></i>Seleccione Foto de perfil</button>
					</div>
					<div class="form-group">
						<select name="rol" class="form-control">
							<option value="<?php echo $urow['rol'];?>"><?php echo $urow['rol'];?></option>
							<option value="Aprendiz">Aprendiz</option>
							<option value="Instructor">Instructor</option>
						</select>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success"> <i class="fa fa-save"></i>Guardar </button>
					</div>
				</form>
			<?php endforeach ?>
			<?php 
			 	if($_POST){
			 		$documento =$_POST['documento'];
			 		$nombres =$_POST['nombres'];
			 		$correo =$_POST['correo'];
			 		$ProgramaFormacion =$_POST['ProgramaFormacion'];
			 		$url = '../public/imgs/';
			 		$foto = $url.$_FILES['foto']['name'];
			 		move_uploaded_file($_FILES['foto']['tmp_name'], '../public/imgs/'.$url.$_FILES['foto']['name']);
			 		$rol =$_POST['rol'];




			 		if (modificarUsuario($con, $documento, $nombres, $correo, $ProgramaFormacion, $foto, $rol)){
			 			$_SESSION['type'] = 'success';
						$_SESSION['message'] = 'EL usuario  se Modifico Correctamente';
			 		}else{
			 			$_SESSION['type'] = 'danger';
						$_SESSION['message'] = 'EL usuario no se Modifico Correctamente';
			 		}

			 }


			 ?>
		</div>
	</div>
</div>
<?php $con = null; ?>
<?php include '../includes/footer.inc'; ?>
<script>
		$(document).ready(function() {
			$('input[type=file').hide();
			$('form').on('click', '.btn-foto', function(event){
				event.preventDefault();
				$('input[type=file').click();
			});
		});
</script>
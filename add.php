<?php require '../config/app.php'; ?>
<?php include '../config/security_admin.php'; ?>
<?php include '../config/bd.php'; ?>
<?php include '../includes/header.inc'; ?>
<?php include '../includes/navbar.inc'; ?>

<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2 ">
			<h1 class="text-center text-muted text-center"><i class="fa fa-plus"></i>Adicionar Usuarios</h1>
			<hr>
			<?php $usu = mostrarUsuario($con, $_SESSION['udocumento']); ?>
			<?php foreach ($usu as $urow): ?> 
				<nav arial-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"> <a href="index.php" class="link-success">Módulo Usuarios</a></li>
						<li class="breadcrumb-item active">Adicionar Usuarios</li>
					</ol>
				</nav>
				<form action="" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<select name="TipoDocumento" class="custom-select">
							<option value="">Seleccione el Tipo Documento...</option>
							<option value="TI" <?php if($urow['TipoDocumento'] == "TI") echo "selected"; ?> >Tarjeta Identidad</option>
							<option value="CC" <?php if($urow['TipoDocumento'] == "CC") echo "selected"; ?> >Cedula Ciudadania</option>
							<option value="CE" <?php if($urow['TipoDocumento'] == "CE") echo "selected"; ?> >Cedula Extranjera</option>
						</select>
					</div>
					<div class="form-group">
						<input type="number" class="form-control" name="documento" placeholder="Documento de identidad" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="nombres" placeholder="Nombre" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="Apellidos" placeholder="Apellidos" required>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" name="correo" placeholder="Correo Electronico" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="clave" placeholder="Contraseña" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="ProgramaFormacion"  placeholder="Programa Formacion" required>
					</div>
					<div class="form-group">
						<input type="file" class="form-control" name="foto"  accept="imgs/*" required>
						<button class="btn btn-default btn-foto"><i class="fa fa-user"></i>Seleccione Foto de perfil</button>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success"> <i class="fa fa-save"></i>Guardar </button>
					</div>
				</form>
			<?php endforeach ?>
			<?php 
			if($_POST){
				$TipoDocumento =$_POST['TipoDocumento'];
				$documento =$_POST['documento'];
				$nombres =$_POST['nombres'];
				$Apellidos =$_POST['Apellidos'];
				$correo =$_POST['correo'];
				$clave =md5($_POST['clave']);
				$ProgramaFormacion =$_POST['ProgramaFormacion'];
				$url = '../public/imgs/';
				$foto = $url.$_FILES['foto']['name'];
				move_uploaded_file($_FILES['foto']['tmp_name'], '../'.$url.$_FILES['foto']['name']);

				if (adicionarUsuario($con, $TipoDocumento, $documento, $nombres, $Apellidos, $correo, $clave, $ProgramaFormacion, $foto)){
					$_SESSION['type'] = 'success';
					$_SESSION['message'] = 'EL usuario  se Adiciono Correctamente';
				}else{
					$_SESSION['type'] = 'danger';
					$_SESSION['message'] = 'EL usuario no se Adiciono Correctamente';
				}

			}


			?>
		</div>
	</div>
</div>
<?php $con = null; ?>

<script>
	$(document).ready(function() {
		$('input[type=file').hide();
		$('form').on('click', '.btn-foto', function(event){
			event.preventDefault();
			$('input[type=file').click();
		});
	});
</script>
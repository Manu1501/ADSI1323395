<?php require '../config/app.php'; ?>
<?php include '../config/security_admin.php'; ?>
<?php include '../config/bd.php'; ?>
<?php include '../includes/header.inc'; ?>
<?php include '../includes/navbar.inc'; ?>

<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2 ">
			<h1 class="text-center text-muted text-center"><i class="fa fa-plus"></i>Adicionar Test</h1>
			<hr>
			<?php $test = adicionarTest($con, $_SESSION['id']); ?>
			<?php foreach ($test as $Trow): ?> 
				<nav arial-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"> <a href="index.php" class="link-success">Módulo Test</a></li>
						<li class="breadcrumb-item active">Adicionar Test</li>
					</ol>
				</nav>
				<form action="" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<input type="number" class="form-control" name="id_test" placeholder="id" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="NombreTest" placeholder="Nombre Test" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="NombrePregunta" placeholder="Nombre pregunta" required>
					</div>
					<div class="form-group">
						<select name="TipoPregunta" class="custom-select">
							<option value="">Seleccione el Tipo Pregunta...</option>
							<option value="TI" <?php if($Trow['TipoDocumento'] == "TI") echo "selected"; ?> >Tarjeta Identidad</option>
							<option value="CC" <?php if($Trow['TipoDocumento'] == "CC") echo "selected"; ?> >Cedula Ciudadania</option>
							<option value="CE" <?php if($Trow['TipoDocumento'] == "CE") echo "selected"; ?> >Cedula Extranjera</option>
						</select>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" name="NumeroDePreguntas" placeholder="Numero preguntas" required>
					</div>
					<div class="form-group">
						<input type="number" class="form-control" name="documento" placeholder="documento" required>
					</div>
				</form>
			<?php endforeach ?>
			<?php 
			if($_POST){
				$id_test =$_POST['id_test'];
				$NombreTest =$_POST['NombreTest'];
				$NombrePregunta =$_POST['NombrePregunta'];
				$TipoPregunta =$_POST['TipoPregunta'];
				$NumeroDePreguntas =$_POST['NumeroDePreguntas'];
				$documento = $_POST['documento'];


				if (adicionarTest($con, $id_test, $NombreTest, $NombrePregunta, $TipoPregunta, $NumeroDePreguntas, $documento)){
					$_SESSION['type'] = 'success';
					$_SESSION['message'] = 'EL Test  se Adiciono Correctamente';
				}else{
					$_SESSION['type'] = 'danger';
					$_SESSION['message'] = 'EL Test no se Adiciono Correctamente';
				}

			}


			?>
		</div>
	</div>
</div>
<?php $con = null; ?>
<?php include '../includes/footer.inc'; ?>
<!-- <script>
	$(document).ready(function() {
		$('input[type=file').hide();
		$('form').on('click', '.btn-foto', function(event){
			event.preventDefault();
			$('input[type=file').click();
		});
	});
</script> -->
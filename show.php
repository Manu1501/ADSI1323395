<?php require '../config/app.php'; ?>
<?php include '../config/security_admin.php'; ?>
<?php include '../config/bd.php'; ?>
<?php include '../includes/header.inc'; ?>
<?php include '../includes/navbar.inc'; ?>
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2 text-center">
			<h1 class="text-muted"><i class="fa fa-search"></i> Consultar Usuario </h1>
			<hr>
			<nav arial-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><strong><a href="index.php" class="text-purple">Modulo Usuarios</a></strong></li>
					<li class="breadcrumb-item active"> Consultar Usuario </li>
				</ol>
			</nav>
			<?php $usuario = mostrarUsuario($con, $_GET['documento']); ?>
			<table class="table table-striped table-hover">
				<?php foreach ($usuario as $urow): ?>
					<tr>
							<th>Documento Identidad</th>
							<td><?php echo $urow['documento']; ?></td>
						</tr>
						<tr>
							<th>Nombre Completo</th>
							<td><?php echo $urow['nombres']; ?></td>
						</tr>
						<tr>
							<th>Correo</th>
							<td><?php echo $urow['correo']; ?></td>
						</tr>
						<tr>
							<th>Programa de formacion</th>
							<td><?php echo $urow['ProgramaFormacion']; ?></td>
						</tr>
						<tr>
							<th>Foto</th>
							<td>
								<img src="../../public/imgs/<?php echo $urow['foto']; ?>" width="50px" data-img="<?php echo $urow['foto']; ?>" style="cursor: zoom-in;">
							</td>
						</tr>
						<tr>
							<th>Rol</th>
							<td><?php echo $urow['rol']; ?></td>
						</tr>
				<?php endforeach ?>
			</table>	
		</div>
	</div>
</div>
<?php $con = null; ?>
<?php include '../includes/footer.inc'; ?>
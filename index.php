<?php require '../config/app.php'; ?>
<?php include '../config/security_admin.php'; ?>
<?php include '../config/bd.php'; ?>
<?php include '../includes/header.inc'; ?>
<?php include '../includes/navbar.inc'; ?>

<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2 ">
			<br><br>
			<h1 class="text-center text-muted text-center my-5"><i class="fa fa-users"></i> Usuarios</h1>
			<hr>
			<a href="add.php" class="btn btn-outline-success"><i class="fa fa-plus"></i> AgregarUsuarios</a>
			<hr>
			<table class="table table-striped table-hover">
				<thead class="gbt">
					<tr>
						<th class="text-center">Documento identidad </th>
						<th class="text-center">Nombre Completo</th>
						<th class="text-center">Foto</th>
						<th class="text-center">Rol</th>
						<th class="text-center">Acciones</th>

					</tr>
				</thead>
				<tbody>
					<?php $listu = listaUsuarios($con);  ?>
					<?php foreach ($listu as $urow ) : ?>
					<tr>
						<td class="text-center"> <?php echo $urow['documento'];?></td>
						<td class="text-center"><?php echo $urow['nombres'] ?></td>
						<td class="text-center"><img src="../<?php echo $urow['foto']; ?>" width="50px"></td>
						<td class="text-center"><?php echo $urow['rol'] ?></td>
						<td class="text-center">
							<a href="show.php?documento=<?php echo $urow['documento']; ?>" class="btn btn-outline-primary">
								<i class="fa fa-search"></i>
							</a>
							<a href="edit.php?documento=<?php echo $urow['documento']; ?>" class="btn btn-outline-success">
								<i class="fa fa-edit"></i>
							</a>
							<a href="javascript:;" class="btn btn-outline-danger btn-delete" data-id="<?php echo $urow['documento']; ?>">
								<i class="fa fa-trash"></i>
							</a>
						</td>
					</tr>
					<?php endforeach ?> 
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php $con = null; ?>
<!-- <?php include '../includes/footer.inc'; ?> -->
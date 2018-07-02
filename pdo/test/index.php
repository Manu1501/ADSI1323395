<?php require '../config/app.php'; ?>
<?php include '../config/security_admin.php'; ?>
<?php include '../config/bd.php'; ?>
<?php include '../includes/header.inc'; ?>
<?php include '../includes/navbar.inc'; ?>

<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2 ">
			<h1 class="text-center text-muted text-center"><i class="fa fa-book"></i>Módulo Usuarios</h1>
			<hr>
			<a href="add.php" class="btn btn-outline-success"><i class="fa fa-plus"></i> AgregarUsuarios</a>
			<hr>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th> id_Test </th>
						<th>Nombre Test</th>
					</tr>
				</thead>
				<tbody>
					<?php $listT = listaTest($con);  ?>
					<?php foreach ($listT as $Trow ) : ?>
					<tr>
						<td> <?php echo $Trow['documento'];?></td>
						<td><?php echo $Trow['nombres'] ?></td>
						<td>
							<a href="show.php?id=<?php echo $Trow['id']; ?>" class="btn btn-outline-primary">
								<i class="fa fa-search"></i>
							</a>
							<a href="edit.php?id=<?php echo $Trow['id']; ?>" class="btn btn-outline-success">
								<i class="fa fa-edit"></i>
							</a>
							<a href="javascript:;" class="btn btn-outline-danger btn-delete" data-id="<?php echo $Trow['id']; ?>">
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
<?php include '../includes/footer.inc'; ?>
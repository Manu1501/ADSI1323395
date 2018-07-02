<?php require '../config/app.php'; ?>
<?php include '../config/security_admin.php'; ?>
<?php include '../config/bd.php'; ?>


<?php 
 	if($_GET){
 		$documento = $_GET['id'];
 		if (eliminarUsuario($con, $documento)){
 			$_SESSION['type'] = 'success';
			$_SESSION['message'] = 'El Usuaruio se Elimino con Exito';
 		}else{
 			$_SESSION['type'] = 'danger';
			$_SESSION['message'] = 'El Usuario no se Elimino';
 		}
 		echo "<script> window.location.replace('index.php')</script>";

 	}
?>

<?php $con = null; ?>
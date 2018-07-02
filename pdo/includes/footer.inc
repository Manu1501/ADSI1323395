
	<footer class="container-fluid">
		<div class="row">
			<p class="text-left">
				<ul id="u1">
					<i class="fa fa-address-card"></i>
					<li>SENA Regional Caldas</li> 
					<li>Centro de Procesos Industriales y Construcción</li>
					<li>Bienestar al Aprendiz</li>
					<li>Diego Ángelo Restrepo Zapata</li>
				</ul>
			</p>
			<p>
				<ul>
					<i class="fa fa-desktop"></i> <i class="fa fa-users"></i>
					<li class="text-center">Análisis y Desarrollo de Sistemas de Información</li>
					<li>ADIMES-TEST</li>
					<li>ADIMES05@gmail.com</li>
					<li>PROGRAMMERS ADSI-JUEGOS</li>
					<li>programmersAdsi@gmail.com</li>
				</ul>
			</p>
			<div class="logos"></div>
			<div class="col-md-6 offset-md-3">
				<p class="text-center"> 
					<small>
						&copy; Todos los derechos reservados <?php echo date('Y'); ?>
					</small>
				</p>
			</div>
		</div>
	</footer>

	<script src="<?php echo $url_js; ?>jquery-3.3.1.min.js"></script>
	<script src="<?php echo $url_js; ?>bootstrap.min.js"></script>	
	<script src="<?php echo $url_js; ?>sweetalert2.js"></script>
	<script>
		$(document).ready(function() {
			<?php if (isset($_SESSION['type'])): ?>
				<?php if ($_SESSION['type'] == 'success'): ?>
					swal('Felicitaciones!', '<?php echo $_SESSION['message']; ?>', 'success');
				<?php else: ?>
					swal('Lo Sentimos!', '<?php echo $_SESSION['message']; ?>', 'error');
				<?php endif ?>
			<?php endif ?>
			//---------------------------------------------------------------
			$('table').on('click', '.btn-delete', function(event) {
			 	event.preventDefault();
			 	$id = $(this).attr('data-id');
			 	swal({
			 		title: 'Eliminar',
			 		text: "¿Realmente desea eliminar este usuario?",
			 		type: 'warning',
			 		showCancelButton: true,
			 		cancelButtonColor: 'red'
			 	}).then((result) => {
			 		if (result.value) {
		 				window.location.replace('delete.php?id='+$id);
			 		}
			 	});
			 });
			<?php 
				unset($_SESSION['type']);
				unset($_SESSION['message']);
			?>
		});
	</script>	
</body>
</html>
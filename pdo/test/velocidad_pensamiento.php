<?php require '../config/app.php'; ?>
<!-- <?php include '../config/security_apprentice.php'; ?> -->
<?php include '../config/bd.php'; ?>
<?php include '../includes/header.inc'; ?>
<?php include '../includes/navbar.inc'; ?>

<link rel="stylesheet" href="../public/css/bootstrap.min.css">
<link rel="stylesheet" href="../public/css/fontawesome-all.min.css">
<link rel="stylesheet" href="../public/css/custom.css">
<link rel="stylesheet" href="../public/css/owl.carousel.min.css">
<link rel="stylesheet" href="../public/css/owl.theme.default.min.css">

<!-- juego 1 -->
<div id="primerjuego">
<h1  class="text-center"><i class="fa fa-cubes"></i> Velocidad de Pensamiento </h1>
<hr id="ba" class="col-9">
<h3 id="j1">1. Guerra de Barcos</h3>
	<div class="container">
		<div id="r2" class="row">
			<div class="col-md-6 offset-md-1 text-center info">
				<p class="exp">Cada tabla representa una sección del océano en la que se oculta una flota. En cada caso se indica qué barcos componen la flota (véase la clave). Los digitos de la parte derecha e inferiores de la tabla muestran cuántas casillas ocupan los barcos en una fila o columna. Para empezar tienes situado parte de algunos barcos; utiliza esta información para averiguar dónde están. Todos los barcos están situados en horizontal o en vertical (nuca en diagonal) y no ocupan casillas adyacentes (ni siquiera en diagonal).</p>
			</div>
			<div class="ejem2">
				<img src="../public/imgs/fotos/ejemplo2.jpg" width="440px" height="230px">
			</div>
			<div class="col-md-6 offset-md-5 ejem">
				<img src="../public/imgs/fotos/ejemplo.jpg" width="500px" height="400px">
			</div>
			<div class="text-center  test">
				<h2>Esta flota se compone de 1 crucero, 2 destructores y 4 submarinos</h2>
				<img src="../public/imgs/fotos/test1.jpg" width="300px" height="300px">
				<h4>¿Cuál es la respuesta correcta?</h4>
				<button name="boton1" type="button" id="boton1" value="boton 1" onclick="desactivar(this.name,'boton1,boton2,boton3,boton4')" class="btn btn-outline-info">
					<img src="../public/imgs/fotos/res-in2.png" width="200px" height="200px">
				</button>
				<button name="boton2" type="button" id="boton2" value="boton 2" onclick="desactivar(this.name,'boton1,boton2,boton3,boton4')" class="btn btn-outline-info">
					<img src="../public/imgs/fotos/res-correcta.png" width="200px" height="200px">
				</button>
				<button name="boton3" type="button" id="boton3" value="boton 3" onclick="desactivar(this.name,'boton1,boton2,boton3,boton4')" class="btn btn-outline-info">
					<img src="../public/imgs/fotos/res-in1.png" width="200px" height="200px">
				</button>
				<button name="boton4" type="button" id="boton4" value="boton 4" onclick="desactivar(this.name,'boton1,boton2,boton3,boton4')" class="btn btn-outline-info">
					<img src="../public/imgs/fotos/res-in3.png" width="200px" height="200px">
				</button>
			</div>
		</div>
	</div>
</div>

<!-- juego 2 -->
<div id="segundojuego">
<h3 id="j2">2. Selecciona la pieza que sobra</h3>
<h4 class="col-8 offset-md-2 text-justify">En estas composiciones todas las imágenes son parecidas unas a otras, excepto una. Tienes que averiguar qué tienen en común para poder decidir cuál es la que sobra. Marca la solución en el propio ejercicio.</h4>
<br><br>
<div class="padre">
	<div class="btnJ2">
		<button name="boton5" id="boton5" type="button" value="Boton 5" onclick="desactivar(this.name,'boton5,boton6,boton7,boton8,boton9')" class="btn btn-outline-success">
			<img src="../public/imgs/fotos/A..png" width="150px" height="150px">
		</button>
	</div>
	<div class="btnJ2">
		<button name="boton6" id="boton6" type="button" value="Boton 6" onclick="desactivar(this.name,'boton5,boton6,boton7,boton8,boton9')" class="btn btn-outline-success">
			<img src="../public/imgs/fotos/B..png" width="150px" height="150px">
		</button>
	</div>
	<div class="btnJ2">
		<button name="boton7" id="boton7" type="button" value="Boton 7" onclick="desactivar(this.name,'boton5,boton6,boton7,boton8,boton9')" class="btn btn-outline-success">
			<img src="../public/imgs/fotos/C..png" width="150px" height="150px">
		</button>
	</div>
	<div class="btnJ2">
		<button name="boton8" id="boton8" type="button" value="Boton 8" onclick="desactivar(this.name,'boton5,boton6,boton7,boton8,boton9')" class="btn btn-outline-success">
			<img src="../public/imgs/fotos/D..png" width="150px" height="150px">
		</button>
	</div>
	<div class="btnJ2">
		<button name="boton9" id="boton9" type="button" value="Boton 9" onclick="desactivar(this.name,'boton5,boton6,boton7,boton8,boton9')" class="btn btn-outline-success">
			<img src="../public/imgs/fotos/E..png" width="150px" height="150px">
		</button>
	</div>
</div>
</div>

<!-- juego 3 -->
<div id="tercerjuego">
<h3 id="j3">3. Códigos</h3>
<div class="col-md-8 offset-md-2 text-center">
	<table class="table table-hover">
		<thead>
			<tr>
				<th colspan="2" class="gbt">Códigos / Criptogramas</th>
			</tr>
		</thead>
		<tbody class="text-justify">
			<tr>
				<td colspan="3">La criptografia oculta los mensajes utilizando códigos o claves. Un criptograma es un mensaje en clave y el criptoanálisis consiste en descrifrar el mensaje sin tener la clave. En esta sección encontrarás mensajes cifrados en los que se han utilizado números para ocultar un mensaje, una frase o una cita. Escribe las soluciones al lado de los ejercicios y utiliza las páginas de la sección de Notas si lo consideras necesario.</td>
			</tr>
		</tbody>
		<thead>
			<tr>
				<th colspan="2" class="gbt">Criptófonos</th>
			</tr>
		</thead>
		<tbody class="text-justify">
			<tr>
				<td colspan="3">Ten en cuenta estos códigos antes de enfrentarte a algunos de los problemas siguientes. Cada número representa una de las letras representadas en las teclas del teléfono. Un número no representa necesariamente siempre a la misma letra. </td>
			</tr>
		</tbody>
	</table>
</div>

<!-- juego 4 -->
<h3>Descifra el Código</h3>
<h4 class="col-8 offset-md-2 text-justify">En la lista siguiente, a cada número le corresponde una letra deacuerdo con la posición que ocupa en el abecedario: A = 1, B = 2, C = 3, D = 4, E = 5, etc. Sin embargo, para que el criptoanálisis resulte más complicado se han eliminado todos los espacios entre palabras. Por ejemplo, la palabra CÓDIGO, que seria los números 3-16-4-9-7-16, aparece representada como 31649716.</h4> 
<br>
<h4 class="text-center text-justify">¿Puedes descifrar los códigos siguientes?</h4>
<br>
<div class="col-md-10 offset-md-1 text-center">
	<table class="table table-hover">
		<thead class="text-center">
			<tr>
				<th colspan="2" class="gbt">Número Pregunta</th>
				<th colspan="2" class="gbt">Código</th>
				<th colspan="2" class="gbt">Ayuda</th>
				<th colspan="4" class="gbt">Opción A</th>
				<th colspan="4" class="gbt">Opción B</th>
				<th colspan="3" class="gbt">Opción C</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<td colspan="3">20114251914119416</td>
				<td colspan="3">2 palabras</td>
				<td colspan="3">
					<button name="boton16" id="boton16" type="button" value="Boton 16" onclick="desactivar(this.name,'boton14,boton15,boton16')" class="btn btn-outline-success w-75">SAN BERNARDO</button>
				</td>
				<td colspan="3">
					<button name="boton14" id="boton14" type="button" value="Boton 14" onclick="desactivar(this.name,'boton14,boton15,boton16')" class="btn btn-outline-success w-75">SanBernardo</button>
				</td>
				<td colspan="3">
					<button name="boton15" id="boton15" type="button" value="Boton 15" onclick="desactivar(this.name,'boton14,boton15,boton16')" class="btn btn-outline-success w-75">San Bernardo</button>
				</td>
			</tr>
			<tr>
				<th scope="row">2</th>
				<td colspan="3">17120211619112513114</td>
				<td colspan="3">2 palabras</td>
				<td colspan="3">
					<button name="boton17" id="boton17" type="button" value="Boton 17" onclick="desactivar(this.name,'boton17,boton18,boton19')" class="btn btn-outline-success w-75">PastorAleman</button>
				</td>
				<td colspan="3">
					<button name="boton18" id="boton18" type="button" value="Boton 18" onclick="desactivar(this.name,'boton17,boton18,boton19')" class="btn btn-outline-success w-75">PASTOR ALEMAN</button>
				</td>
				<td colspan="3">
					<button name="boton19" id="boton19" type="button" value="Boton 19" onclick="desactivar(this.name,'boton17,boton18,boton19')" class="btn btn-outline-success w-75">PASTORALEMAN</button>
				</td>
			</tr>
			<tr>
				<th scope="row">3</th>
				<td colspan="3">38982218221</td>
				<td colspan="3">1 palabra</td>
				<td colspan="3">
					<button name="boton20" id="boton20" type="button" value="Boton 20" onclick="desactivar(this.name,'boton20,boton21,boton22')" class="btn btn-outline-success w-75">chihuahua</button>
				</td>
				<td colspan="3">
					<button name="boton22" id="boton22" type="button" value="Boton 22" onclick="desactivar(this.name,'boton20,boton21,boton22')" class="btn btn-outline-success w-75">CHIHUAHUA</button>
				</td>
				<td colspan="3">
					<button name="boton21" id="boton21" type="button" value="Boton 21" onclick="desactivar(this.name,'boton20,boton21,boton22')" class="btn btn-outline-success w-75">Chihuahua</button>
				</td>
			</tr>
			<tr>
				<th scope="row">4</th>
				<td colspan="3">4112131211</td>
				<td colspan="3">1 palabra</td>
				<td colspan="3">
					<button name="boton23" id="boton23" type="button" value="Boton 23" onclick="desactivar(this.name,'boton23,boton24,boton25')" class="btn btn-outline-success w-75">DALMATA</button>
				</td>
				<td colspan="3">
					<button name="boton24" id="boton24" type="button" value="Boton 24" onclick="desactivar(this.name,'boton23,boton24,boton25')" class="btn btn-outline-success w-75">dalmata</button>
				</td>
				<td colspan="3">
					<button name="boton25" id="boton25" type="button" value="Boton 25" onclick="desactivar(this.name,'boton23,boton24,boton25')" class="btn btn-outline-success w-75">Dalmata</button>
				</td>
			</tr>
			<tr>
				<th scope="row">5</th>
				<td colspan="3">1312021914</td>
				<td colspan="3">1 palabra</td>
				<td colspan="3">
					<button name="boton26" id="boton26" type="button" value="Boton 26" onclick="desactivar(this.name,'boton26,boton27,boton28')" class="btn btn-outline-success w-75">Mastin</button>
				</td>
				<td colspan="3">
					<button name="boton27" id="boton27" type="button" value="Boton 27" onclick="desactivar(this.name,'boton26,boton27,boton28')" class="btn btn-outline-success w-75">MASTIN</button>
				</td>
				<td colspan="3">
					<button name="boton28" id="boton28" type="button" value="Boton 28" onclick="desactivar(this.name,'boton26,boton27,boton28')" class="btn btn-outline-success w-75">mastin</button>
				</td>
			</tr>
		</tbody>
	</table>
</div>
</div>

<!-- juego 5 -->
<h3>5. Tablas Lógicas</h3>
<h4 class="col-8 offset-md-2 text-justify">La clave para resolver estos enigmas consiste en empezar extrayendo los datos seguros de la información de que dispones. Después, deduce el resto de los datos a partir de los primeros. En todos los ejercicios se han utilizado nombres ingleses para hacerlos todavía un poco más complicados.</h4>
<br>
<h3 class="text-center">Los recién llegados</h3>
<h4 class="col-8 offset-md-2 text-justify">Tackfield St. Andrew es una población de Suffolk cuyos habitantes son muy conservadores. Todavía se refieren a unos londinenses jubilados que se instalaron en ella hace bastante años como "los nuevos". A partir de las pistas siguientes, averigua de qué lugar de Londres vino cado uno de los "los nuevos", cuánto hace que viven en Tackfield St. Andrew y cómo se llama la casa en la que viven.</h4>
<div class="col-8 offset-md-2 j4">
	<p class="j4">
		<ul><strong>Pistas:</strong>
			<li>
				<strong>1.</strong>
				Walter Young, que vive en Meadow View no es el londinense que vivía y trabajaba en Islington.
			</li>
			<li>
				<strong>2.</strong>
				La persona cuya residencia anterior está junto a la estación de tren de Paddington lleva más tiempo viviendo en Tackfield St. Andrew que Alan Bradley.
			</li>
			<li>
				<strong>3.</strong>
				El habitante de White Gates lleva más de ocho años en esta casa.
			</li>
			<li>
				<strong>4.</strong>
				Uno de "los nuevos" lleva 16 años viviendo en Rose Cottage.
			</li>
		</ul>
	</p>
</div>
<div class="col-8 offset-md-4">
	<img src="../public/imgs/fotos/pregunta4.png" width="350px" height="350px">
</div>
<br>
<div class="col-12 text-center">
	<button name="boton10" id="boton10" type="button" value="Boton 10" onclick="desactivar(this.name,'boton10,boton11,boton12,boton13')" class="btn btn-outline-success">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Origen</th>
					<th>Periodo</th>
					<th>Casa</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Alan Bradley</td>
					<td>paddington</td>
					<td>11 años</td>
					<td>Rose Cottage</td>
				</tr>
				<tr>
					<td>Mavis norton</td>
					<td>Islington</td>
					<td>16 años</td>
					<td>White Gates</td>
				</tr>
				<tr>
					<td>Walter Young</td>
					<td>Battersea</td>
					<td>8 años</td>
					<td>Meadow View</td>
				</tr>
			</tbody>
		</table>
	</button>
	<button name="boton11" id="boton11" type="button" value="Boton 11" onclick="desactivar(this.name,'boton10,boton11,boton12,boton13')" class="btn btn-outline-success">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Origen</th>
					<th>Periodo</th>
					<th>Casa</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Mavis norton</td>
					<td>Islington</td>
					<td>11 años</td>
					<td>Rose Cottage</td>
				</tr>
				<tr>
					<td>Alan Bradley</td>
					<td>paddington</td>
					<td>16 años</td>
					<td>Meadow View</td>
				</tr>
				<tr>
					<td>Walter Young</td>
					<td>Battersea</td>
					<td>8 años</td>
					<td>White Gates</td>
				</tr>
			</tbody>
		</table>
	</button>
	<button name="boton12" id="boton12" type="button" value="Boton 12" onclick="desactivar(this.name,'boton10,boton11,boton12,boton13')" class="btn btn-outline-success">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Origen</th>
					<th>Periodo</th>
					<th>Casa</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Mavis norton</td>
					<td>Meadow View</td>
					<td>16 años</td>
					<td>Rose Cottage</td>
				</tr>
				<tr>
					<td>Alan Bradley</td>
					<td>Battersea</td>
					<td>8 años</td>
					<td>White Gates</td>
				</tr>
				<tr>
					<td>Walter Young</td>
					<td>Islington</td>
					<td>11 años</td>
					<td>paddington</td>
				</tr>
			</tbody>
		</table>
	</button>
	<button name="boton13" id="boton13" type="button" value="Boton 13" onclick="desactivar(this.name,'boton10,boton11,boton12,boton13')" class="btn btn-outline-success">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Origen</th>
					<th>Periodo</th>
					<th>Casa</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Mavis norton</td>
					<td>Meadow View</td>
					<td>16 años</td>
					<td>Rose Cottage</td>
				</tr>
				<tr>
					<td>Alan Bradley</td>
					<td>Battersea</td>
					<td>8 años</td>
					<td>White Gates</td>
				</tr>
				<tr>
					<td>Walter Young</td>
					<td>Islington</td>
					<td>11 años</td>
					<td>paddington</td>
				</tr>
			</tbody>
		</table>
	</button>
</div>	


<!-- botones -->
<script>
	function desactivar(name, nombreBotones){
		var partesBotones = nombreBotones.split(",");
		for (var i = 0; i<partesBotones.length; i++) {
			var boton = document.getElementById(partesBotones[i]);
			if (boton.name == name)boton.disabled = false;
			else boton.disabled = true;
		}
	}
</script>
	<!--- temporizador-->

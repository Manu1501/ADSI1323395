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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- juego 1 -->
<div id="primerjuego" style="border: none">
	<h1 class="text-center"><i class="fa fa-cubes"></i> Memoria </h1>
	<hr id="ba" class="col-9">
	<h3 id="t1">1. Concéntrate</h3>
	<div class="container">
		<div id="r2" class="row"  >
			<div class="col-md-11 offset-md-1 info">
				<p>A continuación encontrará un botón que al darle click mostrará tres imágenes las cuales tendrá que memorizar. Luego lea el texto. </p>
				
				<!-- Button trigger modal -->
				<button name="boton0" id="boton0" stype="button" class="btn btn-info" data-toggle="modal" data-target="#alert"><i class="fas fa-images"></i> Ver imágenes</button>

				<!-- Modal -->
				<div class="modal fade" id="alert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="exampleModalLabel"><strong>Memorizá las imágenes</strong></h4></button>
							</div>
							<div class="modal-body">
								<img src="../public/imgs/fotos/planetas.png" width="100%">
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
							</div>
						</div>
					</div>
				</div>

				<p class="p1">Es un conjunto de astros de la galaxia Vía Láctea formado por el Sol, nueve planetas, veintisiete satélites, muchos asteroides y cometas que giran todos alrededor del Sol. Los planetas son: Mercurio, Venus, la Tierra, Marte, Júpiter, Saturno, Urano, Neptuno y Plutón.

				El Sol es la estrella central del Sistema Solar. Tiene luz propia y nos da luz y calor a la Tierra y a todos los demás astros del Sistema. El Sol es la estrella fuente de toda vida en la Tierra. Sin el Sol no podríamos vivir. El Sol es mucho más grande la Tierra, tanto como 1.300.000, pero en realidad es una estrella pequeña. Casi todas las estrellas más brillantes que vemos por la noche en el cielo son más grandes que el Sol, pero al encontrarse tan alejadas de nosotros se perciben como simples puntos brillantes Las estrellas son los únicos cuerpos del Universo que emiten luz. </p>


			</div>

			<div class="col-md-7 offset-md-3 seleccionar">
				<p class="p2"><strong>Seleccione las tres imagenes que memorizo</strong> </p>
				<button name="boton1" type="button" id="boton1" value="boton1"  class="btn btn-outline-info boton">
					<img class="img" src="../public/imgs/fotos/correcta1.png" width="200" height="200" >
				</button>
				<button name="boton2" type="button" id="boton2" value="boton2"  class="btn btn-outline-info boton">
					<img class="img" src="../public/imgs/fotos/correcta2.png" width="200" height="200" alt="">
				</button>
				<button name="boton3" type="button" id="boton3" value="boton3"  class="btn btn-outline-info boton">
					<img class="img" src="../public/imgs/fotos/incorrecta1.png" width="200" height="200" alt="">
				</button>
				<button name="boton4" type="button" id="boton4" value="boton4"  class="btn btn-outline-info boton">
					<img class="img" src="../public/imgs/fotos/correcta3.png" width="200" height="200" alt="">
				</button>
				<button name="boton5" type="button" id="boton5" value="boton5"  class="btn btn-outline-info boton">
					<img class="img" src="../public/imgs/fotos/incorrecta2.png" width="200" height="200" alt="">
				</button>
				<button name="boton6" type="button" id="boton6" value="boton6"  class="btn btn-outline-info boton">
					<img class="img" src="../public/imgs/fotos/incorrecta3.png" width="200" height="200" alt="">
				</button>

			</div>

			<!-- Segunda pregunta-->
			
			<div class="container" style="margin-top: 70px">
				<div class="row">
					<div class="col-md-12">
						<div class="todo">
							<h3>2.Juego de memoria </h3>
							<p> A continuación encontrará 18 imágenes, deberá encontrar las parejas en el menor número de intentos	</p>
							<div class="contador">
								<p>Intentos</p>
								<p class="counter">0</p>
							</div>
							<div class="memoria">
								<div class="carta" id="1">
									<div class="inner-wrap">
										<div class="frente"></div>
										<div class="atras"></div>	
									</div>
								</div>
								<div class="carta" id="2">
									<div class="inner-wrap">
										<div class="frente"></div>
										<div class="atras"></div>	
									</div>
								</div>
								<div class="carta" id="3">
									<div class="inner-wrap">
										<div class="frente"></div>
										<div class="atras"></div>	
									</div>
								</div>
								<div class="carta" id="4">
									<div class="inner-wrap">
										<div class="frente"></div>
										<div class="atras"></div>	
									</div>
								</div>

								<div class="carta" id="5">
									<div class="inner-wrap">
										<div class="frente"></div>
										<div class="atras"></div>	
									</div>
								</div>
								<div class="carta" id="6">
									<div class="inner-wrap">
										<div class="frente"></div>
										<div class="atras"></div>	
									</div>
								</div>
								<div class="carta" id="7">
									<div class="inner-wrap">
										<div class="frente"></div>
										<div class="atras"></div>	
									</div>
								</div>
								<div class="carta" id="8">
									<div class="inner-wrap">
										<div class="frente"></div>
										<div class="atras"></div>	
									</div>
								</div>

								<div class="carta" id="9">
									<div class="inner-wrap">
										<div class="frente"></div>
										<div class="atras"></div>	
									</div>
								</div>
								<div class="carta" id="10">
									<div class="inner-wrap">
										<div class="frente"></div>
										<div class="atras"></div>	
									</div>
								</div>
								<div class="carta" id="11">
									<div class="inner-wrap">
										<div class="frente"></div>
										<div class="atras"></div>	
									</div>
								</div>
								<div class="carta" id="12">
									<div class="inner-wrap">
										<div class="frente"></div>
										<div class="atras"></div>	
									</div>
								</div>

								<div class="carta" id="13">
									<div class="inner-wrap">
										<div class="frente"></div>
										<div class="atras"></div>	
									</div>
								</div>
								<div class="carta" id="14">
									<div class="inner-wrap">
										<div class="frente"></div>
										<div class="atras"></div>	
									</div>
								</div>
								<div class="carta" id="15">
									<div class="inner-wrap">
										<div class="frente"></div>
										<div class="atras"></div>	
									</div>
								</div>
								<div class="carta" id="16">
									<div class="inner-wrap">
										<div class="frente"></div>
										<div class="atras"></div>	
									</div>
								</div>

								<div class="carta" id="17">
									<div class="inner-wrap">
										<div class="frente"></div>
										<div class="atras"></div>	
									</div>
								</div>

								<div class="carta" id="18">
									<div class="inner-wrap">
										<div class="frente"></div>
										<div class="atras"></div>	
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Tercera pregunta -->
			<div class="container" style="margin-top: 70px">
				<div class="row">
					<div class="col-md-12">
						<div class="recuerda">
							<h3>3. Memorizar</h3>
							<p>A continuación encontrará 30 objetos que podrás visualizar durante dos minutos. Pasado este tiempo, los objetos desaparecerán y tendrás dos minutos más para escribir los nombres de todos los que recuerdes separados por comas. El nombre de cada objeto aparece bajo la imágen, se trata de objetos cotidianos que se expresan con una sola palabra. No se comprueban los acentos ni las mayúsculas pero sí debes respetar el singular y el plural (La mayoría de los objetos están en singular).</p>
							
							<img src="../public/imgs/fotos/img.png">
							<br><br>
							<textarea id="respuesta" class="respuesta" rows="5" cols="100" placeholder="Escribe aquí todos los objetos que recuerdes separados por comas o espacios...">
							</textarea>
							</div>	
						</div>
					</div>
				</div>



				<!-- botones -->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

				<script>
					$(document).ready(function() {
						$("#boton0").click(function(event) {
							setTimeout(function() {
								$("#boton0").attr('disabled', 'disabled');
							}, 1000);

						});

						$("#alert")

						$veces = 1;

						$(".boton").click(function(event) {
							$this = $(this);
							if ($veces <= 3) {
								$this.attr('disabled', 'disabled');
								$this.css('border', '4px solid red');
								$veces++;
							}	

						});


					});

					$(document).ready(function(){

				var checkArray = []; // para verificar si las dos cartas con click son el mismo personaje
				var idArray = []; //array para guardar los ids de las cartas que tienen click 
				var contador = 0;
				var fin = 0; 
				var fields = document.querySelectorAll(".atras");


				var images = [
				"https://s-media-cache-ak0.pinimg.com/originals/30/9b/58/309b58c5153182dc480d429d21bb1ec1.png",
				"https://s-media-cache-ak0.pinimg.com/originals/4b/ae/6c/4bae6cba8ec4060b5c4059ad2ce9c329.png",
				"https://s-media-cache-ak0.pinimg.com/originals/b6/df/d7/b6dfd79c625f9ebe14709a9b75224962.png",
				"https://s-media-cache-ak0.pinimg.com/originals/76/e7/a3/76e7a392abff7c8a22969f7c95f37d4c.png",
				"https://s-media-cache-ak0.pinimg.com/originals/cb/ca/50/cbca50fc5156fb15b68bd3ab5dae6e06.png",
				"https://s-media-cache-ak0.pinimg.com/originals/de/b9/70/deb9709e87f1d5b7f6457e8286113012.png",
				"https://s-media-cache-ak0.pinimg.com/originals/29/9e/c7/299ec7c3cd62b88dd4905ffc6a71d8f9.png",
				"https://s-media-cache-ak0.pinimg.com/originals/74/11/00/74110094c67aa9a519c70ecb7cec7d76.png",
				"http://diysolarpanelsv.com/images/neville-clipart-4.png",
				"https://s-media-cache-ak0.pinimg.com/originals/30/9b/58/309b58c5153182dc480d429d21bb1ec1.png",
				"https://s-media-cache-ak0.pinimg.com/originals/4b/ae/6c/4bae6cba8ec4060b5c4059ad2ce9c329.png",
				"https://s-media-cache-ak0.pinimg.com/originals/b6/df/d7/b6dfd79c625f9ebe14709a9b75224962.png",
				"https://s-media-cache-ak0.pinimg.com/originals/76/e7/a3/76e7a392abff7c8a22969f7c95f37d4c.png",
				"https://s-media-cache-ak0.pinimg.com/originals/cb/ca/50/cbca50fc5156fb15b68bd3ab5dae6e06.png",
				"https://s-media-cache-ak0.pinimg.com/originals/de/b9/70/deb9709e87f1d5b7f6457e8286113012.png",
				"https://s-media-cache-ak0.pinimg.com/originals/29/9e/c7/299ec7c3cd62b88dd4905ffc6a71d8f9.png",
				"https://s-media-cache-ak0.pinimg.com/originals/74/11/00/74110094c67aa9a519c70ecb7cec7d76.png",
				"http://diysolarpanelsv.com/images/neville-clipart-4.png"
				];
				// verificacion de los clicks
				function clicked() { 
					if ($(this).find(".inner-wrap").hasClass("flipped")) {
						return;
					}
					$(this).find(".inner-wrap").toggleClass("flipped");
					checkArray.push($(this).find("img").attr("src"));
					idArray.push($(this).attr("id"));
					check();
				}

				$(".carta").on("click", clicked);

				//reiniciar el juego
				function reiniciar() {
					$(".atras").find("img").remove(); //quitar todas las imagenes actuales
					$(".carta .inner-wrap").removeClass("flipped"); // quitar la classe flipped para volver a su estado inicial
					checkArray = []; 
					idArray = [];
					contador = 0; 
					fin = 0;
					iniciarJuego();
				}
				//para verificar el fin del juego
				function verificarFin() {
					if (fin === 18) { //si todas las cartas estan volteadas
						alert("Juego finalizado, lo has logrado en " + contador + " intentos");
						reiniciar();
					}
				}
				//para random de las imagenes 
				function shuffleArray(array) { 
					for (var i = array.length - 1; i > 0; i--) {
						var j = Math.floor(Math.random() * (i + 1));
						var temp = array[i];
						array[i] = array[j];
						array[j] = temp;
					}
					return array;
				}

				function iniciarJuego() {

					

					var arr = shuffleArray(images); //array con las imagenes de forma aleatoria
				 // append de las imagenes a la clase para la parte de atras de las cartas
				 for (var i = 0; i < fields.length; i++) {
				 	var img = document.createElement("img");
				 	img.src = arr[i];
				 	fields[i].appendChild(img);
				 }


				}

				function check() {
				  //si los fields se  han hecho dos clicks 
				  if (checkArray.length === 2) {
				  	$(".carta").off("click", clicked); 
				  	setTimeout(function(){
				      //si no hay match
				      if (checkArray[0] !== checkArray[1]) { 
				        //voltear las dos cartas seleccionadas
				        $("#" + idArray[0]).find(".inner-wrap").removeClass("flipped"); 
				        $("#" + idArray[1]).find(".inner-wrap").removeClass("flipped"); 
				        contador++;
								//vaciar los arrays para la siguiente eleccion
								checkArray = []; 
								idArray = []; 
				        //habilitar el click de nuevo
				        $(".carta").on("click", clicked);
				    } else {

				    	contador++;

								fin += 2; // contador para el final del juego, se agregan dos para el contador de fin
								//vaciar los dos arrays
								checkArray = []; 
								idArray = []; 
								verificarFin(); 
								$(".carta").on("click", clicked); 
							}
							document.querySelector(".counter").innerHTML = contador;
						}, 800);	
				  }
				}



				iniciarJuego();

			});
		</script>

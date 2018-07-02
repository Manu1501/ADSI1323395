<?php
	/* = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = 
	// Conectar Base de Datos
	= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = */
	try {
		$con = new PDO("mysql:host=$host;dbname=$nmdb",$user,$pass);
		$con->exec('set names utf8');
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		// echo "Se ha conectado a la base de datos";
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
	/* = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = 
	// Login
	= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = */
	function login($con, $documento, $clave) {
		try {
			$sql = "SELECT * FROM usuarios WHERE documento = :documento AND clave = :clave LIMIT 1";
			$stm = $con->prepare($sql);
			$stm->bindparam(':documento', $documento);
			$stm->bindparam(':clave', $clave);
			$stm->execute();
			if($stm->rowCount() > 0) {
				$urow = $stm->fetch(PDO::FETCH_ASSOC);
				$_SESSION['udocumento'] = $urow['documento'];
				$_SESSION['unombre']    =  $urow['nombres'];
				$_SESSION['ufoto']      =  $urow['foto'];
				$_SESSION['urol']       =  $urow['rol'];
				return true;
			} else {
				return false;
			}	
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	/* = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = 
	// usuarios
	= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = */

	function listaUsuarios($con) {
		try {
			$sql = "SELECT * FROM usuarios";
			$stm = $con->prepare($sql);
			$stm->execute();

			return $stm->fetchAll();
		} catch (PDOException $e) {
			echo $e->getMessage();
		} 
	}

	function mostrarUsuario($con, $id) {
		try {
			$sql = "SELECT * FROM usuarios WHERE documento = :id";
			$stm = $con->prepare($sql);
			$stm->bindparam(":id", $id);
			$stm->execute();

			return $stm->fetchAll();
		} catch (PDOException $e) {
			echo $e->getMessage();
		} 
	}

	function adicionarUsuario($con, $TipoDocumento, $documento, $nombres, $Apellidos, $correo, $clave, $ProgramaFormacion, $foto) {
		try {
			$sql = "INSERT INTO usuarios (TipoDocumento, documento, nombres, Apellidos, correo, clave, ProgramaFormacion, foto) VALUES (:TipoDocumento, :documento, :nombres, :Apellidos, :correo, :clave, :ProgramaFormacion, :foto)";
			$stm = $con->prepare($sql);
			$stm->bindparam(":TipoDocumento", $TipoDocumento);
			$stm->bindparam(":documento", $documento);
			$stm->bindparam(":nombres", $nombres);
			$stm->bindparam(":Apellidos", $Apellidos);
			$stm->bindparam(":correo", $correo);
			$stm->bindparam(":clave", $clave);
			$stm->bindparam(":ProgramaFormacion", $ProgramaFormacion);
			$stm->bindparam(":foto", $foto);

			if($stm->execute()) {
				return true;
			} else {
				return false;
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
		} 
	}

	/* = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = 
	// test
	= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = */

	function eliminarTest($con, $id) {
		try {
			$sql = "DELETE FROM usuarios WHERE documento = :id";
			$stm = $con->prepare($sql);
			$stm->bindparam(":id", $id);
			if($stm->execute()) {
				return true;
			} else {
				return false;
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
		} 
	}
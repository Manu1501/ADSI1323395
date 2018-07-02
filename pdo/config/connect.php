<?php 
	try {    
		$con = new PDO("mysql:host=localhost; dbname=adimes",'root','');    
		$con->exec("set names utf8");    
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
		echo  ("Conexión Exitosa");     
	} 
		catch(PDOException $e) {    
			echo ("Error en la conexión: ".$e->getMessage());    
	}  

	//----------------------------------------------------------
	function login($con, $documento, $clave){
		try{
			$sql = "SELECT * 
					FROM usuarios
					WHERE documento = :documento
					AND clave = :clave
					LIMIT 1";
			$stm = $con->prepare($sql);
			$stm->bindparam(':documento', $documento);
			$stm->bindparam(':clave', $clave);
			$stm->execute();
			if ($stm->rowCount()>0) {
				$urow = $stm->fetch(PDO::FETCH_ASSOC);
				$_SESSION['udocumento'] = $urow['documento'];
				$_SESSION['unombre'] = $urow['nombre'];
				$_SESSION['urol'] = $urow['rol'];
				return true;
			}else{
				return false; 
			}
		} catch(PDOException $e){
			echo $e->getMessage();
		}
	} 
?>
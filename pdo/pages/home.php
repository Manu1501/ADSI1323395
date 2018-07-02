 <?php 
 if ($_POST) {
  $documento = $_POST['documento'];
  $clave  = md5($_POST['clave']);
  if(login($con, $documento, $clave)) {
          //$_SESSION['type']    = 'success';
          //$_SESSION['message'] = 'Los datos del Usuario son Correctos!';
    if($_SESSION['urol'] == 'Aprendiz') {
      echo "<script> window.location.replace('pages/apprentice.php'); </script>";
    } else if($_SESSION['urol'] == 'Instructor') {
      echo "<script> window.location.replace('pages/instructor.php'); </script>";
    } else if($_SESSION['urol'] == 'Admin') {
      echo "<script> window.location.replace('pages/administrator.php'); </script>";
    }
  } else {
    $_SESSION['type']    = 'danger';
    $_SESSION['message'] = 'Los datos del Usuario son Incorrectos!';
  }
}

?>

<link rel="stylesheet" href="../public/css/custom.css">
<div class="logo"></div><h1 class="text-info text-center"> CONÓCETE, APRENDE Y JUEGA </h1>
<hr>

<div id="home" class="container" style="margin-bottom: 50px">
  <div class="row">
    <div class="col-md-5">
      <div class="formulario">
        <h4><i class="fa fa-users"></i> Login</h4>
        <hr class="col-8">
        <form action="" method="post">
          <h5>Número de Documento:</h5>
          <div class="form-group col-md-6 offset-md-3">
            <input type="number" class="form-control" name="documento" placeholder="Documento">
          </div>
          <h5>Contraseña:</h5>
          <div class="form-group col-md-6 offset-md-3">
            <input type="password" class="form-control" name="clave" placeholder="Contraseña">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-success"> <i class="fa fa-sign-in-alt"></i> Ingresar </button>
          </div>
          <div class="form-group remember">
            <h5><input class="col-1" type="checkbox">Remember-me</h5>
          </div>
          <div class="text-center">
            <a href="#">¿Olvidó su contraseña?</a>
          </div>
           <div class="col-md-6 offset-3 text-center">
            <p >¿Eres nuevo? <a class="btn btn-success" href="../usuarios/create.php" role="button">Registrate aquí</a></p>
          </div>
        </form>
      </div>
      <div class="parrafo"></div>
    </div>
  </div>
</div>

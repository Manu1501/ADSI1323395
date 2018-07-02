<nav class="navbar navbar-expand-lg navbar-dark bg sticky-top">
  <a class="navbar-brand text-center mx-3" href="../">Conócete, Aprende y Juega</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link inicio" href="../"><i class="fa fa-home"></i> Inicio <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="../<?php echo $_SESSION['ufoto']; ?>" width="40px">
          <?php echo $_SESSION['unombre']; ?>  
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php if ($_SESSION['urol'] == 'Aprendiz'): ?>
            <a class="dropdown-item" href="#"> <i class="fa fa-clipboard"></i> Notas</a>
          <?php endif ?>
          <?php if ($_SESSION['urol'] == 'Instructor'): ?>
            <a class="dropdown-item" href="#"> <i class="fa fa-clipboard"></i> Calificar</a>
          <?php endif ?>
          <?php if ($_SESSION['urol'] == 'Admin'): ?>
            <a class="dropdown-item" href="<?php echo $url_site.'usuarios/'; ?>"> <i class="fa fa-users"></i> Usuarios </a>
            <a class="dropdown-item" href="<?php echo $url_site.'materias/'; ?>"> <i class="fa fa-book"></i> Materias</a>
            <a class="dropdown-item" href="<?php echo $url_site.'notas/'; ?>"> <i class="fa fa-clipboard"></i> Notas</a>
          <?php endif ?>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo $url_site."pages/close.php"; ?>"> <i class="fa fa-times"></i> Cerrar Sesión</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
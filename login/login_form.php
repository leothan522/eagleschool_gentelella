<section class="login_content">
  <form>
    <h1>Inicio de sesión</h1>
    <?php if (isset($_SESSION['mensaje_login'])) { ?>
      <div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>
          <?php
          echo $_SESSION['mensaje_login'];
          unset($_SESSION['mensaje_login']);
          ?>

        </strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php } ?>
    <div>
      <input type="text" class="form-control" placeholder="Correo electrónico" required="" />
    </div>
    <div>
      <input type="password" class="form-control" placeholder="Contraseña" required="" />
    </div>
    <div>
      <a class="btn btn-default submit" href="index.html">Acceso</a>
      <a class="reset_pass" href="#">Perdiste tu contraseña?</a>
    </div>

    <div class="clearfix"></div>

    <div class="separator">
      <p class="change_link">¿Nuevo en el sitio?
        <a href="#signup" class="to_register"> Crear una cuenta </a>
      </p>

      <div class="clearfix"></div>
      <br />

      <div>
        <h1><i class="fa fa-paw"></i>Eagle School</h1>
        <i class="fa-regular fa-user-secret"></i>
        <p>©2023 Dv. Erick Rojas</p>
      </div>
    </div>
  </form>
</section>
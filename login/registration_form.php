<section class="login_content">
  <form action="register.php" method="post">
    <h1>Crear cuenta</h1>
    <?php if(isset($_SESSION['mensaje'])) { ?>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
      <strong> 
        <?php 
        echo $_SESSION['mensaje']; 
        unset($_SESSION['mensaje']);
        ?>

      </strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <?php } ?>
    <div>
      <input type="text" name="cedula" class="form-control" placeholder="Cédula" required />
    </div>
    <div>
      <input type="text" name="nombre" class="form-control" placeholder="Nombre" required />
    </div>
    <div>
      <input type="text" name="telefono" class="form-control" placeholder="Teléfono" required />
    </div>
    <div>
      <input type="email" name="email" class="form-control" placeholder="Correo electrónico" required />
    </div>
    <div>
      <input type="password" name="password" class="form-control" placeholder="Contraseña" required />
    </div>
    <div>
      <button type="submit" class="btn btn-default submit">Guardar</button>
      <button type="reset" class="btn btn-default reset">Borrar</button>
    </div>

    <div class="clearfix"></div>

    <div class="separator">
      <p class="change_link">¿Ya eres usuario?
        <a href="#signin" class="to_register">Iniciar sesión</a>
      </p>

      <div class="clearfix"></div>
      <br />

      <div>
        <h1><i class="fa fa-paw"></i> Eagle School</h1>
        <p>©2023 Erick Rojas</p>
      </div>
    </div>
  </form>
</section>
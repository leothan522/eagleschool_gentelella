<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
  <head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <?php require "_layout/cargar_css.php"; ?>
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <?php require "_layout/sidebar.php"; ?>
        </div>

        <!-- top navigation -->
        <?php require "_layout/top_nav.php";?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           <?php require "content.php"; ?>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php require "_layout/footer.php"; ?>
        <!-- /footer content -->
      </div>
    </div>
     <?php require "_layout/cargar_js.php"; ?>
  </body>
</html>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Eagle School </title>

    <!-- Bootstrap -->
    <link href="../resources/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../resources/gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../resources/font-awesome/css/all.min.css">
    <!-- NProgress -->
    <link href="../resources/gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../resources/gentelella/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../resources/gentelella/build/css/custom.min.css" rel="stylesheet">

    <link rel="shortcut icon" href="../../favicon/apple-icon-57x57.png" type="image/x-icon">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
         <?php require "login_form.php"; ?>
        </div>

        <div id="register" class="animate form registration_form">
          <?php require "registration_form.php"; ?>
        </div>
      </div>
    </div>
  </body>
</html>

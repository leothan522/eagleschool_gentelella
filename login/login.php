<?php
session_start();

require "../database/Query.php";
$ruta = "../login/#signin";

function login ($email, $password)
{
    $query  = new Query();
    $sql = "SELECT * FROM  `usuarios` WHERE `email` = '$email' AND `password` = '$password';";
    $row = $query->getfirst($sql);
    return $row; 
}

$email = $_POST['email'];
$password = $_POST['password'];

$login = login($email, $password);
if ($login){   

    $mensaje = "Bienvenido"; 
    $_SESSION['nombre'] = $login['nombre'];
     $ruta = "../dashboard/";

}else{
    $mensaje = "Datos incorrectos";
    $ruta = "/login/#signin";
    $_SESSION['mensaje_login'] = $mensaje; 
}




echo $mensaje;





header('Location: '.$ruta);

<?php
session_start();
require "../database/Query.php";


function guardar($cedula, $nombre, $telefono, $email, $password)
{
    $query = new Query();
    $sql = "INSERT INTO `usuarios` (`cedula`, `nombre`, `telefono`, `email`, `password`) 
    VALUES ('$cedula', '$nombre', '$telefono', '$email', '$password');";
    $row = $query->save($sql);
    return $row;
}

function existe($email)
{
    $query = new Query();
    $sql = "SELECT * FROM  `usuarios` WHERE `email` = '$email';";
    $row = $query->getfirst($sql);
    return $row;
}


$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$password = $_POST['password'];

$existe = existe($email);
if($existe){
    $mensaje = "El correo ya se encutra registrado";
    $ruta = "/login/#signup";
    $_SESSION['mensaje'] = $mensaje;
}else {
    
    $guardar = guardar($cedula, $nombre, $telefono, $email, $password);

    if($guardar)
    {
     $mensaje = "Datos Guardados";
     $ruta = "/login/#signin";
     $_SESSION['mensaje_login'] = $mensaje;
    }else{
        $mensaje = "Error en Base de datos";
        $ruta = "/login/#signup";
        $_SESSION['mensaje'] = $mensaje;
    }
}


header('Location: '.$ruta);

<?php
require "Conexion.php";
class Query
{
    public function save($sql)
    {
        $conexion = new Conexion ();
        $statement = $conexion->CONEXION->prepare($sql);
        $statement->execute();
        return $statement; 
    }

    public function getfirst ($sql)
    {
        $conexion = new Conexion ();
        $statement = $conexion->CONEXION->prepare($sql);
        $statement->execute();
        $row = $statement->fetch();
        return $row;
    }
}
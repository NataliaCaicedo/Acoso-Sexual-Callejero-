<?php

$host = "localhost";
$user = "root";
$password = "admin";
$db_name = "ascbd";


try{
    $bd = new PDO(
        'mysql:host=localhost;
        dbname=' .$db_name,
        $user,
        $password,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
}catch (Exception $e){
    echo "Error en la Conexion" .$e->getMessage();
}




?>


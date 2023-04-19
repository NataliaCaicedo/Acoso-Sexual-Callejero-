<?php

$host = "localhost";
$user = "root";
$password = "admin";
$db_name = "ascbd";

include('../config/config.php');
include('../config/database.php');
class Usuario{
    public $conexion;
    
    function __construct(){ 
        $db= new Database();
        $this-> conexion =$db->connectToDatabase();
    } 
}

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


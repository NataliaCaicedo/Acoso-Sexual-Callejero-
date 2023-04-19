<?php
include('../config/config.php');
include('../config/database.php');
class Usuario{
    public $conexion;
    
    function __construct(){ 
        $db= new Database();
        $this-> conexion =$db->connectToDatabase();
    }
    function save($params) {
        $nombre= $params['nombre'];
        $email= $params['correo'];
        $contrasena= $params['contrasena'];
        $celular= $params['celular'];

        $insert = "INSERT INTO usuarios VALUES (NULL,'$nombre','$email','$contrasena',$celular)";
        return mysqli_query($this->conexion, $insert);
    }

    function getAll(){
        $sql= "SELECT * FROM usuarios";
        return mysqli_query($this->conexion, $sql);
    }

    function getOne($id){
        $sql = "SELECT * FROM usuarios WHERE id =$id";
        return mysqli_query($this->conexion,  $sql);
    }

    function update($params){
        $nombre= $params['nombre'];
        $correo= $params['correo'];
        $contrasena= $params['contrasena'];
        $celular= $params['celular'];
        $id= $params['id'];
        $update= "UPDATE usuarios SET nombre='$nombre', correo='$correo', contrasena='$contrasena', celular='$celular' WHERE id= $id";
        return mysqli_query($this->conexion, $update);
    }
    function delete($id){
        $delete= "DELETE FROM Usuarios WHERE id=$id";
        return mysqli_query($this->conexion, $delete);
    }
}
?>
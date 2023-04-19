<?php
include_once('../config/config.php');
include('Usuarios.php');

$p= new Usuario();
$data= $p->getAll();

if (isset ($_GET['id']) && !empty ($_GET['id'])){
    $remove= $p->delete($_GET['id']);
    if ($remove){
        header('Location: index.php');
    }else{
        $mensaje='<div class="alert alert-danger" role= "alert">Error al eliminar</div>';
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title> Lista de usuarios</title>
        echo <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/fontawesome-all.min.css" rel="stylesheet">
        <link href="css/swiper.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body>
        <?php
        include('../menu.php');
        ?>
        <div class="container">
            <h2 class="text-center mb-2">Usuarios </h2>
            <div class="row">
                <?php
                while($us= mysqli_fetch_object($data)){
                   
                    echo "<div class='col'>";
                    echo "<div class= 'border border info p-2'>";
                    echo "<h5> $us->nombre </h5>";
                    echo "<div class='text-center'>";
                    echo "<div class='center'> <a class='btn btn-success' href='". ROOT ."/Usuarios/edit.php?id=$us->id' >Modificar</a> - <a class='btn btn-danger' href='". ROOT ."/Usuarios/index.php?id=$us->id' >Eliminar</a> </div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";

                }
                ?>

            </div>
        </div>
    </body>
</html>
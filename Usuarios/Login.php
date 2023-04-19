<?php

session_start();

$host = "localhost";
$user = "root";
$password = "admin";
$db_name = "ascbd";

try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=' . $db_name,
        $user,
        $password,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
} catch (PDOException $e) {
    echo "Error en la conexión: " . $e->getMessage();
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['usuario'];
    $password = $_POST['password'];

    $query = "SELECT * FROM usuarios WHERE nombre = :username AND contrasena = :password";
    $stmt = $pdo->prepare($query);
    $stmt->execute([
        'username' => $username,
        'password' => md5($password)
    ]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        header('Location: index.php');
    } else {
        $error = "El nombre de usuario o la contraseña son incorrectos";
    }
}
?>
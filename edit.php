<?php
require_once './conn.php'; 
session_start();
$usuario = $_SESSION['array']['id'];


if (isset($_SESSION['array'])) {
    $arrayP = $_SESSION['array'];
} else {
    header('location: ./F_login.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = $_POST['email'];
    $name = $_POST['name'];
    $bio = $_POST['bio'];
    $phone = $_POST['phone'];
    $password = $_POST['contrasena'];
    $hash = password_hash($password, PASSWORD_DEFAULT);
    

    $query = "UPDATE usuarios SET `email`=?,`contrasena`=?,`name`=?, `bio`=?, `phone`=? WHERE id =? ";
    $cone = $pdo->prepare($query);
    $resultt = $cone->execute([$correo, $hash, $name, $bio, $phone, $usuario]);

    if ($resultt) {
        $querySelect = "SELECT * FROM usuarios WHERE id = ?";
        $coneSelect = $pdo->prepare($querySelect);
        $coneSelect->execute([$usuario]);
        $array = $coneSelect->fetch(PDO::FETCH_ASSOC);

        $_SESSION['array'] = $array;

        header("Location: ./profile.php");
        exit();
    } else {
        echo "Error al actualizar.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>
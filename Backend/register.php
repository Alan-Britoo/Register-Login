<?php
require_once './conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = $_POST['email'];
    $password = $_POST['contrasena'];
    $hash = password_hash($password, PASSWORD_DEFAULT);
    
    $query = "INSERT INTO usuarios (`email`, `contrasena`) VALUES (?, ?)";
    $cone = $pdo->prepare($query);

    try {
        $cone->execute([$correo, $hash]);
        $query = "SELECT * FROM usuarios WHERE email = ?";
        $cone = $pdo->prepare($query);
        $cone->execute([$correo]);
        $result = $cone->fetch(PDO::FETCH_ASSOC);
        session_start();
        $_SESSION["array"] = $result;
        header('location: ../Front/F_profile.php');
        exit();
    } catch (PDOException $e) {
        echo 'NO SE PUDO REGISTRAR EL USUARIO' . $e->getMessage();
        header('location:  ../Front/F_register.php');
    }
}
?>
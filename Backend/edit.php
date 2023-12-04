<?php
require_once './conn.php'; 
session_start();
$usuario = $_SESSION['array']['id'];
if (isset($_SESSION['array'])) {
    $arrayP = $_SESSION['array'];
} else {
    header('location: ../Front/F_login.php');
}
if ($_SERVER['REQUEST_METHOD'] === 'POST'  && isset($_FILES['foto']) ) {
    $correo = $_POST['email'];
    $name = $_POST['name'];
    $bio = $_POST['bio'];
    $phone = $_POST['phone'];
    $password = $_POST['contrasena'];
    $hash = password_hash($password, PASSWORD_DEFAULT);
    
$base_url= '../Photos/';
$tmp = $_FILES ['foto']['tmp_name'];
$imgName= $_FILES['foto']['name'];
$ext = pathinfo($imgName, PATHINFO_EXTENSION);
$url=$base_url . "profile_$usuario.".$ext;
move_uploaded_file($tmp, $url); 

    $query = "UPDATE usuarios SET `email`=?,`contrasena`=?,`photo`=? ,`name`=?, `bio`=?, `phone`=? WHERE id =? ";
     
    $cone = $pdo->prepare($query);
    $resultt = $cone->execute([$correo, $hash, $url,  $name, $bio, $phone, $usuario]);

    if ($resultt) {
        $querySelect = "SELECT * FROM usuarios WHERE id = ?";
        $coneSelect = $pdo->prepare($querySelect);
        $coneSelect->execute([$usuario]);
        $array = $coneSelect->fetch(PDO::FETCH_ASSOC);

        session_start();
        $_SESSION['array'] = $array;
        $datosUsuario= $_SESSION['array'];
        header("Location:  ../Front/F_profile.php");
        exit();
    } else {
        echo "Error al actualizar.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>
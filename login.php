<?php
require_once './conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = $_POST['email'];
    $password = $_POST['contrasena'];
}
$query = 'SELECT * FROM usuarios  WHERE email = ?';
/* $query = "UPDATE usuarios SET `email`=?,`contrasena`=? WHERE id =? "; */
try {
    $stm = $pdo->prepare($query);
    $stm->execute([$correo]);
    $result = $stm->fetch(PDO::FETCH_ASSOC);
    if(password_verify($password,$result['contrasena'])){
        session_start();
        $_SESSION['array'] = $result;
        header('location: ./profile.php');
    }else{
        print_r( "datos ingresados incorrectos");
        header('location: ./F_login.php');
    }
    
} catch (PDOException $e) {
    echo $e->getMessage();
    echo "si funka";
}




<?php
session_start();
if (isset($_SESSION["array"])) {
    $arrayP = $_SESSION['array'];
    header('location: ./F_profile.php');
} else {
    
}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/F_login.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="img">
            <img src="../MP_N3-master/assets/devchallenges.svg" alt="icono de arriba">
        </div>

        <P class="pri">Login </P>
        <form action="../Backend/login.php" method="POST">
            <div class="emaill">
                <i class="material-symbols-outlined">Email</i>
                <input name="email" type="text" class="email" placeholder="Email">
            </div>
            <div class="contra">
                <i class="material-symbols-outlined">lock</i>
                <input name="contrasena" type="password" class="contraseña" placeholder="Password">
            </div>
            <button class="start">Login</button><br>
        </form>
        <p class="ultimo">or continue with these social profile</p>
        <div class="iconos">
            <img src="../MP_N3-master/assets/Google.svg" alt="">
            <img src="../MP_N3-master/assets/Facebook.svg" alt="">
            <img src="../MP_N3-master/assets/Twitter.svg" alt="">
            <img src="../MP_N3-master/assets/Gihub.svg" alt="">
        </div>
        <p class="ultimo">Don’t have an account yet? <a href="./F_register.php"> Register</a></p>

    </div>
    <div class="refer">
        <p>created by RotsenC.</p>
        <p>devChallenges.io</p>
    </div>

    <button class="boton-flotante" >🌙</button>
    <script src="../js2.js"></script>
</body>

</html>
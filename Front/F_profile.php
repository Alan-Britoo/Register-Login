<?php
session_start();
if (isset($_SESSION['array'])) {
    $arrayP = $_SESSION['array'];
} else {
    header('location: ./F_login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/profile.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>

    <div class="navbar-logo">
        <img src="../MP_N3-master/assets/devchallenges.svg" alt="icono de arriba">

        <a id="prueba" href="#" class="logout-icon">
            <nav class="ms-5 mt-3 d-flex  justify-content-between">

                <div class="me-5 mt-3 dropdown">
                    <button class="buttonToggle" id="buttonToggle">nombre:
                        <?php echo $arrayP['name'] ?>
                    </button>
                    <ul class="menuToggle" id="menuToggle">
                        <div class="proof">
                            <li class="limenu"><span class="material-symbols-outlined icons">person
                                </span><a class="text-decoration-none textOptions" href="./F_profile.php">My
                                    Profile</a></li>
                        </div>

                        <div class="w-100 proof" style="border-bottom: 1px solid #E0E0E0;">
                            <li class="limenu"><span class="material-symbols-outlined icons">group
                                </span><a class="text-decoration-none textOptions" href="#">Group Chat</a></li>
                        </div>

                        <div class="proof">
                            <li class="limenu"><span class="material-symbols-outlined icons"
                                    style="color:red">logout</span><a class="text-decoration-none textOptions"
                                    style="color: red;" href="../Backend/logout.php">Logout</a></li>
                        </div>
                    </ul>

                </div>
            </nav>
        </a>
    </div>


    <section class="personal">
        <div>
            <h1>Personal info</h1>
            <p>Basic info, like your name and photo</p>
            <div class="login-box">
                <div class="profile">
                    <div class="info-section">
                        <h1>Profile</h1>
                        <p>Some info may be visible to other people</p>
                    </div>
                    <a href="./F_edit.php">Edit</a>
                </div>

                <div class="profile_pic">
                    <p>PHOTO</p>
                    <p class="prue">holaaaaaaaa</p>

                </div>

                <div class="profile_info">
                    <p>NAME</p>
                    <p class="prue">
                        <?php echo $arrayP['name'] ?>
                    </p>

                </div>

                <div class="profile_info">
                    <p>BIO</p>
                    <p class="prue">
                        <?php echo $arrayP['bio'] ?>
                    </p>

                </div>

                <div class="profile_info">
                    <p>PHONE</p>
                    <p class="prue">
                        <?php echo $arrayP['phone'] ?>
                    </p>

                </div>

                <div class="profile_info">
                    <p>EMAIL</p>
                    <p class="prue">
                        <?php echo $arrayP['email'] ?>
                    </p>
                </div>

                <div class="last">
                    <p>PASSWORD</p>
                    <p class="prue">
                        <?php echo $arrayP['contrasena'] ?>
                    </p>
                </div>
            </div>

            <div class="out_main">
                <p class="pl">created by RotsenC. Estefanel</p>
                <p class="pl">devChallenges.io</p>
            </div>
        </div>
    </section>

    <script src="../js.js"></script>
</body>
</div>

</html>
<?php
session_start();
if (isset($_SESSION["array"])) {
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
    <link rel="stylesheet" href="../CSS/edit.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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


    <form action="../Backend/edit.php" method="POST" enctype="multipart/form-data">
        <div class="container">
            <div class="info">
                <h3>Change Info</h3>
                <p>lo que diga aqyi</p>
            </div>
            <div class="img-conte">
                <label class="img">
                    <?php if ($arrayP['photo'] != ''): ?>
                        <img class="fotooo" src="<?php echo $arrayP['photo'] ?>" alt="IMAGEN">
                    <?php endif; ?>
                    <span class="material-symbols-outlined iconCamara centrar"> photo_camera </span>
                </label>
                <div class="changePhoto">
                    <label class="changeTittle">
                        <span class="textFoto">CHANGE FOTO</span>
                        <input type="file" name="foto" id="foto" class="subirFoto">
                    </label>
                </div>
            </div>
            <div class="data">
                <label for="">Name</label>
                <input name="name" type="text" class="name" placeholder="Enter you bio" required>

                <label for="">Bio</label>
                <input name="bio" type="text" class="bio" placeholder="Enter you bio" required>

                <label for="">Phone</label>
                <input name="phone" type="number" class="phone" placeholder="Enter you bio" required>

                <label for="">Email</label>
                <input name="email" type="email" class="email" placeholder="<?php echo $arrayP['email'] ?>" required>

                <label for="">Password</label>
                <input name="contrasena" type="password" class="password"
                    placeholder="<?php echo $arrayP['contrasena'] ?>" required>

                <button>Save</button>
            </div>
        </div>
    </form>
    <script src="../js.js"></script>

    <input type="file" ><span class="material-symbols-outlined iconCamara centrar"> photo_camera </span>
</body>

</html>
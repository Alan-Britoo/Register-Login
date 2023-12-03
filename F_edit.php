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
</head>

<body>
    <form action="./edit.php" method="POST">
        <div class="container">
            <div class="info">
                <h3>Change Info</h3>
                <p>lo que diga aqyi</p>
            </div>
            <div class="img-conte">
                <div class="img">
                    <img src="" alt="IMAGEN">
                </div>
                <p>CHANGE PHOTO</p>
            </div>
            <div class="data">
                <label for="">Name</label>
                <input  name="name"type="text" class="name" placeholder="Enter you bio" required>

                <label for="">Bio</label>
                <input name="bio" type="text" class="bio" placeholder="Enter you bio" required>

                <label for="">Phone</label>
                <input name="phone" type="number" class="phone" placeholder="Enter you bio" required>

                <label for="">Email</label>
                <input name="email" type="email" class="email" placeholder="<?php echo $arrayP['email'] ?>" required>

                <label for="">Password</label>
                <input name="contrasena" type="password" class="password" placeholder="<?php echo $arrayP['contrasena'] ?>" required>

                <button>Save</button>
            </div>
        </div>
    </form>
</body>

</html>
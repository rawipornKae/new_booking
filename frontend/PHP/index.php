<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include_once("../Connect/conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="../CSS/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</head>
</head>

<body>
    <div class="login">
        <div class="logo">
            <div class="login-box">
                <img src="../img/img_answer01-removebg-preview-new.png" class="img-logo">
                <h1 class="header-login">Booking Car</h1>
                <form class="box" action="<?php $_SERVER["PHP_SELF"] ?>" method="POST" enctype="multipart/form-data">
                    <div class="user-box">
                        <input type="text" name="user">
                        <label>Username</label>
                    </div>
                    <div class="user-box">
                        <input type="password" name="pass">
                        <label>Password</label>
                        <!-- <div class="showpassword_box"><input type="checkbox" id="checkbox"><p>Show password</p></div> -->
                    </div>
                    <div class="login-btn">
                        <!-- onclick="solve()" -->
                        <input class="log" type="submit" name="login" value="LOGIN">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<?php
include_once("./SQL/Sql_login.php")
?>

</html>
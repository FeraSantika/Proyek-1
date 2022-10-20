<?php

    session_start();

    require 'logic/function.php';

    if (isset($_POST["login"])){

        $email = $_POST["email"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM akun_siswa WHERE email = '$email'");

        if (mysqli_num_rows($result) === 1){

            //cek password
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row["password"])){
                $_SESSION["login"] = true;
                setcookie('username', $row["username"] );
                header("Location: index.php");
                exit;
            }

        }

        $error = true;

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 mx-auto gy-5 p-5 kotak">
                <div class="login-logo text-center mb-4 "><i class="fa-solid fa-user p-4 rounded-circle"></i></div>
                <?php if (isset($error)) : ?>
                    <div class="alert alert-danger mt-3" role="alert">
                        <i class="fa-solid fa-triangle-exclamation me-2"></i>Username atau Password Salah !
                    </div>
                <?php endif ;?>
                <form action="" method="post">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control"  id="floatingInput" name="email" placeholder="name@example.com" required>
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg mt-5 tombol mb-1" name="login">login</button>
                </form>
                <a href="" class="text-center mt-3">Forgot Password</a>
                <a href="regist.php" class="text-center mt-3">Create a New Account</a>
                <a href="index.php" class="text-center mt-3">Beranda</a>
            </div>
        </div>
    </div>
</body>
</html>
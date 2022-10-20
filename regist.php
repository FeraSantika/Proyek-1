<?php 

    //require 'logic/function.php';

    // if (isset($_POST["regist"])){

    //     if (regist($_POST) > 0){
    //         echo "<script>
    //             alert('Registrasi Berhasil');    
    //         </script>";
    //     }

    // }else{
    //     echo mysqli_error($conn);
    // }


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
    <link rel="stylesheet" href="regist.css">
    <link rel="stylesheet" href="login.css">
    <title>Registrasi</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 mx-auto mt-5 pt-4 p-5 kotak">
                <h2 class="text-center mb-3">Registrasi</h2>
                <hr>
                <?php 
                    require 'logic/function.php';
                    if (isset($_POST["regist"])){
                        if (regist($_POST) > 0){
                            echo ' <div class="alert alert-success mt-3" role="alert">
                            <i class="fa-solid fa-circle-check me-2"></i> Registrasi berhasil !
                        </div>';
                        }
                    }else if( mysqli_error($conn)){
                        echo ' <div class="alert alert-danger mt-3" role="alert">
                        <i class="fa-solid fa-triangle-exclamation me-2"></i> Registrasi gagal !
                    </div>';
                    }
                ?>
                <form action="" method="post">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingPassword" name="username" placeholder="Username" required>
                        <label for="floatingPassword">Username</label>
                    </div>
                    <div class="form-floating mt-3">
                        <input type="password" class="form-control" id="floatingInput" name="password" minlength="6" placeholder="Password" required>
                        <label for="floatingInput">Password</label>
                    </div>
                    <div class="form-floating mt-3">
                        <input type="password" class="form-control" id="floatingPassword" name="password2" minlength="6" placeholder="Password" required>
                        <label for="floatingPassword">Re-Password</label>
                    </div>
                    <button type="submit" class="btn btn-primary mt-5 tombol" name="regist">Register</button>
                </form>
                <div class="mt-4 text-center">Back to <a class="d-inline"href="login.php">Login</a></div>
            </div>
        </div>
    </div>
</body>
</html>
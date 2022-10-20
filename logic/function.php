<?php 
    $conn = mysqli_connect("localhost", "root", "", "sekolah");

    function query($query){

        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function regist($data){
        global $conn;

        //ambil data dari POST
        $email = $data['email'];
        $username = stripslashes($data["username"]);
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);

        //konfirmasi email
        $result = mysqli_query($conn, "SELECT email FROM akun_siswa WHERE email = '$email'");

        if (mysqli_fetch_assoc($result)){
            echo ' <div class="alert alert-warning mt-3" role="alert">
            <i class="fa-solid fa-circle-exclamation me-2"></i></i> e-mai telah terdaftar !
            </div>';
            return false;
        }

        //konfirmasi username
        $result = mysqli_query($conn, "SELECT username FROM akun_siswa WHERE username = '$username'");

        if (mysqli_fetch_assoc($result)){
            echo ' <div class="alert alert-warning mt-3" role="alert">
            <i class="fa-solid fa-circle-exclamation me-2"></i></i> Username telah digunakan !
            </div>';
            return false;
        }

        //konfirmasi password
        if ( $password !== $password2){
            echo ' <div class="alert alert-danger mt-3" role="alert">
            <i class="fa-solid fa-triangle-exclamation me-2"></i></i> Konfirmasi password gagal !
            </div>';
            return false;
        }

        //enkipsi password
        $password = password_hash($password, PASSWORD_DEFAULT);

        //query
        mysqli_query($conn, "INSERT INTO akun_siswa VALUES('','$email','$username','$password')");

        return mysqli_affected_rows($conn);
    }
?>

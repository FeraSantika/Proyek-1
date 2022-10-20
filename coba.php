<?php

$token = rand(1, 1000);
$coba = password_hash( $token, PASSWORD_DEFAULT);

var_dump($coba);

?>
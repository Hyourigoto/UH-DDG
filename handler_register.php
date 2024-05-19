<?php
include_once 'koneksi.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$insert = $koneksi->query("INSERT INTO userinfo
(nama, email, password) 
values
('$username', '$email', '$password')
");

if ($insert) {
    echo "Insert Data Berhasil";
}else {
    echo "Gagal Insert Data";
}

session_start();
$_SESSION['user_login'] = $user;
header("Location: login.php");

?>
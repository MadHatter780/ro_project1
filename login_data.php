<?php
session_start();
$username = htmlspecialchars($_POST["nama"]);
$password = htmlspecialchars($_POST["password"]);

$admin = 'AdminLaravel';
$passwordTrue = 'hmmakupuntaktau';

if (($username == $admin) &&  ($password == $passwordTrue)) {
    $_SESSION["user"] = "admin";
    $_SESSION["pesan"] = 'Admin Waktunya Bekerja';
    header('Location: index.php');
    exit;
} else {
    $_SESSION["pesan"] = "Yare Yare Cek Salah Satu formnya";
    header("Location: login.php");
    exit;
}

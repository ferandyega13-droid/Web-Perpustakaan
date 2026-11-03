<?php
session_start();
include 'config/koneksi.php';

$user = mysqli_real_escape_string($koneksi, $_POST['username']);
$pass = md5($_POST['password']); 

$query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$user' AND password='$pass'");
$cek = mysqli_num_rows($query);

if ($cek > 0) {
    $_SESSION['username'] = $user;
    
    // Set Cookie jika Remember Me dicentang
    if (isset($_POST['remember'])) {
        setcookie('magic_user', $user, time() + (86400 * 30), "/"); 
    }
    header("Location: dashboard.php");
} else {
    echo "<script>alert('Akses Ditolak! Spell salah.'); window.location='index.php';</script>";
}
?>
<?php
session_start();
// Menghapus session[cite: 1]
session_destroy();

// Menghapus cookie secara aman[cite: 1]
if (isset($_COOKIE['magic_user'])) {
    setcookie('magic_user', '', time() - 3600, "/");
}

header("Location: index.php");
?>
<?php
session_start();
if (isset($_COOKIE['magic_user'])) {
    $_SESSION['username'] = $_COOKIE['magic_user'];
}
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Magic Grimoire Vault - Login</title>
    <style>
        body { background-color: #1a1a2e; color: #e94560; font-family: 'Courier New', Courier, monospace; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .login-box { background: #16213e; padding: 30px; border: 2px solid #0f3460; border-radius: 10px; box-shadow: 0 0 15px #0f3460; width: 300px; text-align: center; }
        input[type="text"], input[type="password"] { width: 90%; padding: 10px; margin: 10px 0; background: #1a1a2e; border: 1px solid #e94560; color: #fff; }
        button { background: #e94560; color: #fff; border: none; padding: 10px 20px; cursor: pointer; text-transform: uppercase; font-weight: bold; width: 100%; }
        button:hover { background: #ff2e63; box-shadow: 0 0 10px #ff2e63; }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>🏰 Grimoire Vault</h2>
        <form action="proses_login.php" method="POST">
            <input type="text" name="username" placeholder="Mage Name (Username)" required>
            <input type="password" name="password" placeholder="Secret Spell (Password)" required>
            <label style="color: #fff; font-size: 14px;">
                <input type="checkbox" name="remember"> Remember My Aura (Cookie)
            </label><br><br>
            <button type="submit">Enter Vault</button>
        </form>
    </div>
</body>
</html>
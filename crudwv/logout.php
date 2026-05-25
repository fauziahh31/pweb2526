<?php
session_start();

// hapus semua session
$_SESSION = [];

// hancurkan session
session_destroy();

// hapus cookie session (biar bersih total)
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

header("Location: login.php");
exit;
?>

<?php
    session_start();
    require '../layout/page_header.php';

// unset all session variables
// can also use session_unset();
unset($_SESSION);

// destroy session cookie
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

// destroy the session
session_destroy();
header('Location:./index.php?logout=true');


require '../layout/page_footer.php';

?>
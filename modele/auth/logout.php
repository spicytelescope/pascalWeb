<?php

session_start();
if (isset($_SESSION['username']) and !empty($_SESSION['username'])) {
    $_SESSION = array();
    session_destroy();
}
header('Location: /vitrine/login.php');
exit();

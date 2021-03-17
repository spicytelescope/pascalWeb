<?php

include('../config/connect_db.php');

if (isset($_POST['name']) and !empty($_POST['name'])){
    $query = "INSERT INTO Users(nom, email, password) VALUES ('$_POST[name]','$_POST[email]',md5($_POST[password]))";
    $mysqli->query($query);

    session_start();
    $_SESSION['username'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
}

header('Location: /vitrine/home.php');
exit();

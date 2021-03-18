<?php
include('./config/connect_db.php');


if (isset($_GET['code']) and  !empty($_GET['code'])) {
    $query = "DELETE FROM Produit WHERE code=$_GET[code]";
    if ($mysqli->query($query)) {
        header('Location: /vitrine/home.php');
        exit();
    } else {
        echo $mysqli->connect_error;
    }
}

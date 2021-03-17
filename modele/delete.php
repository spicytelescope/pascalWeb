<?php
include('./config/connect_db.php');


if (!empty($_GET['name']) && !empty($_GET['description']) && !empty($_GET['price'])) {
    $query = "DELETE FROM Produit WHERE code=$_GET[code]";
    if ($mysqli->query($query)) {
        header('Location: /vitrine/home.php');
        exit();
    } else {
        echo $mysqli->connect_error;
    }
}

<?php
include('./connect.php');


if (!empty($_GET['name']) && !empty($_GET['description']) && !empty($_GET['price'])) {
    echo
    $query = "DELETE FROM Produit WHERE code=$_GET[code]";
    if ($mysqli->query($query)) {
        header('Location: /vitrine/modele/afficherProduits.php');
        exit();
    } else {
        echo $mysqli->connect_error;
    }
}

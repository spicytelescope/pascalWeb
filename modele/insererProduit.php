<?php

include('./connect.php');

if (isset($_POST['submitForm'])) {
    if (strlen($_POST['name']) <= 25 and strlen($_POST['name']) > 0 and strlen($_POST['description']) <= 25 and strlen($_POST['description']) > 0 and is_numeric($_POST['price'])) {

        $query = "INSERT INTO Produit(nom, description, prix) VALUES('$_POST[name]','$_POST[description]','$_POST[price]')";
        if (!$mysqli->query($query))
            echo "Error : " . $mysqli->errno;
        else {
            header('Location: /vitrine/modele/afficherProduits.php');
            exit();
        }
    } else {
        header('Location: /vitrine/vue/insererProduit.html');
        exit();
    }
}

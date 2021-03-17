<?php
include('./config/connect_db.php');

if (!empty($_POST['name']) && !empty($_POST['description']) && !empty($_POST['price'])) {
    $query = "UPDATE Produit SET nom='$_POST[name]', description='$_POST[description]', prix='$_POST[price]' WHERE code='$_POST[editForm]'";

    if ($mysqli->query($query)) {
        header('Location: /vitrine/home.php');
        exit();
    } else {
        echo $mysqli->connect_error;
        echo $mysqli->connect_errno;
    }
}

?>
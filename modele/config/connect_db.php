<?php

$mysqli = new mysqli('localhost', 'root', '', 'Produits');

if ($mysqli->connect_errno)
    echo "Echec lors de la connexion $mysqli->connect_error";

?>

<?php

include('./connect.php');
$query = "SELECT * FROM Produit";

$products = $mysqli->query($query);
$labels = $products->fetch_fields();

echo "</table>";

$validFlag = false
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Produits vitrines</title>
    <style>
        html {
            background: linear-gradient(90deg, rgba(193, 17, 193, 1) 0%, rgba(24, 68, 185, 1) 47%, rgba(212, 110, 162, 1) 91%, rgba(255, 157, 0, 1) 100%);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card blue darken-1 z-depth-4 rounded">
            <div class="card-content white-text">
                <span class="card-title">
                    <h1>Produits vitrines</h1>
                </span>
                <table class="striped centered">
                    <thead>
                        <tr>
                            <?php foreach ($labels as $l) {
                                echo "<th>$l->name</th>";
                            } ?>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        foreach ($products as $p) {
                            echo "<tr>";
                            foreach ($p as $sub_p => $v) {
                                echo "<td>$v</td>";
                            }
                            echo '<td><a class="waves-effect waves-light btn-small red" href="/vitrine/modele/delete.php?name=' . $p['nom'] . '&description=' . $p['description'] . '&price=' . $p['prix'] . '&code='.$p['code'].'"><i class="material-icons">delete</i></a></td>';
                            echo "</tr>";
                        }
                        ?>

                    </tbody>
                </table>
            </div>
            <div class="card-action">

                <a class="waves-effect waves-light btn-large green" href="/vitrine/vue/insererProduit.html"
                >Add a product <i class="material-icons right">add</i></a>
            </div>
        </div>
    </div>

</body>
</html>
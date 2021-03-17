<?php

$query = "SELECT * FROM Produit";
$products = $mysqli->query($query);
$labels = $products->fetch_fields();

?>
<style>
    #tableActions>a {
        margin: 0% 5% 0% 5%;
    }
</style>
<div class="container">
    <div class="card red lighten-2 z-depth-1 hoverable">
        <div class="card-content white-text">
            <span class="card-title">
                <h1 class="center-align">Produits vitrines</h1>
            </span>
            <table class="centered">
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

                        echo '<td id="tableActions"><a class="waves-effect waves-light btn green tooltipped modal-trigger" data-position="top" data-tooltip="Edit a product" href="#modal1"><i class="material-icons">edit</i></a>';
                        echo '<a class="waves-effect waves-light btn red tooltipped" data-position="top" data-tooltip="Delete a product" href="/vitrine/modele/delete.php?name=' . $p['nom'] . '&description=' . $p['description'] . '&price=' . $p['prix'] . '&code=' . $p['code'] . '"><i class="material-icons">delete</i></a></td>';
                        echo "</tr>";

                        // Modal
                        echo '<div id="modal1" class="modal blue darken-1">
                            <div class="modal-content">
                                <div class="container">
                                        <div class="card-content white-text">
                                            <span class="card-title">
                                            <h2>Edit the product number #' . $p['code'] . '</h2>
                                            </span>
                                            <form action="./modele/edit.php" class="col s12" method="POST">
                                                <div class="row">
                                                    <div class="input-field col s6">
                                                        <input placeholder="Nom" name="name" type="text" length="25" value=' . $p['nom'] . '" />
                                                        <label>Name</label>
                                                    </div>
                                                    <div class="input-field col s6">
                                                        <input placeholder="Description" name="description" type="text" class="validate" length="50" value="' . $p['description'] . '" />
                                                        <label>Description</label>
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <input placeholder="Price (€)" name="price" type="number" class="validate" step="0.01" value="' . $p['prix'] . '" />
                                                        <label>Price</label>
                                                    </div>
                                                </div>
                                                <button class="btn waves-effect waves-light" type="submit" name="editForm" value=' . $p['code'] . '>Submit
                                                    <i class="material-icons right">send</i>
                                                </button>
                                            </form>
                                        </div>
                                </div>
                            </div>
                        </div>';
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>

    <div class="fixed-action-btn">
        <a class="btn-floating btn-large red tooltipped" data-position="top" data-tooltip="Add a product" href='/vitrine/vue/insererProduit.php'>
            <i class="large material-icons">add</i>
        </a>
    </div>
</div>
<?php
include('../modele/config/connect_db.php');

if (isset($_POST['submitForm'])) {
  if (strlen($_POST['name']) <= 25 and strlen($_POST['name']) > 0 and strlen($_POST['description']) <= 25 and strlen($_POST['description']) > 0 and is_numeric($_POST['price'])) {

    $query = "INSERT INTO Produit(nom, description, prix) VALUES('$_POST[name]','$_POST[description]','$_POST[price]')";
    if (!$mysqli->query($query))
      echo "Error : " . $mysqli->errno;
    else {
      header('Location: /vitrine/home.php');
      exit();
    }
  } else {
    header('Location: /vitrine/vue/insererProduit.php');
    exit();
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<?php require('../modele/template/header.php'); ?>

<body>
  <div class="container">
    <div class="card teal darken-2 z-depth-4 rounded">
      <div class="card-content white-text">
        <span class="card-title">
          <h1 class="center-align">Insérer un produit 🙃</h1>
        </span>
        <form action="./insererProduit.php" class="col s12" method="POST">
          <div class="row">
            <div class="input-field col s6">
              <input placeholder="Nom" name="name" type="text" length="25" />
              <label>Name</label>
            </div>
            <div class="input-field col s6">
              <input placeholder="Description" name="description" type="text" class="validate" length="50" />
              <label>Description</label>
            </div>
            <div class="input-field col s12">
              <input placeholder="Price (€)" name="price" type="number" class="validate" step="0.01" />
              <label>Price</label>
            </div>
          </div>
          <input class="waves-effect waves-light btn white-text" type="submit" name="submitForm" value="Add a product" />
        </form>
      </div>
    </div>
  </div>
  <?php require('../modele/template/footer.php'); ?>
</body>

</html>
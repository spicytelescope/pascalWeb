<?php
include('./modele/config/connect_db.php');

session_start();
if (empty($_SESSION['email'])) {
  header('Location: /vitrine/login.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vitrine - Home</title>
</head>

<body>
  <?php require('modele/template/header.php'); ?>
  <?php include('vue/afficherProduits.php'); ?>
  <?php require('modele/template/footer.php'); ?>
</body>

</html>
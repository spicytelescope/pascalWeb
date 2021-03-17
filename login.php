<?php
include('./modele/config/connect_db.php');

session_start();
if (isset($_SESSION['username'])) {
    header('Location: /vitrine/home.php');
    exit();
} else {
    if (!empty($_POST['email']) and !empty($_POST['password'])) {
        $query = "SELECT * FROM users WHERE email='$_POST[email]' and password='" . md5($_POST['password']) . "'";
        $result = $mysqli->query($query);
        $count  = mysqli_num_rows($result);
        if ($count == 0) {
        } else {
            $userInfo = mysqli_fetch_row($result);
            $_SESSION['username'] = $userInfo['1'];
            $_SESSION['email'] = $userInfo['3'];
            header('Location: /vitrine/home.php');
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vitrine - Login</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<body>
    <?php require('modele/template/header.php'); ?>
    <div class="container">
        <div class="col s12 z-depth-6 card-panel">
            <form class="login-form" action="login.php" method="post">
                <div class="row">
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mail_outline</i>
                        <input class="validate" id="email" type="email" name="email">
                        <label for="email" data-error="Enter a valid email" data-success="right">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">lock_outline</i>
                        <input id="password" type="password" name="password">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12" style="display:flex; justify-content:center;">
                        <input type="submit" value="Login" class="btn waves-effect waves-light col">
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="input-field col s6 m6 l6">
                    <p class="margin medium-small center-align"><a href="/vitrine/vue/register.php">No account ? Register Now !</a></p>
                </div>
            </div>
        </div>
    </div>
    <?php require('modele/template/footer.php'); ?>
</body>

</html>
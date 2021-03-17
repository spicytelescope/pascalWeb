<!DOCTYPE html>
<html lang="en">
<?php require('../modele/template/header.php'); ?>

<div class="container">
    <div class="col s12 z-depth-6 card-panel">
        <form class="login-form" method="POST" action="/vitrine/modele/auth/addUser.php">
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">people</i>
                    <input id="name" type="text" name="name">
                    <label for="name">Name</label>
                </div>
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
                <div class="input-field col s12 " style="display:flex; justify-content:center;">
                    <input type="submit" value="Login" class="btn waves-effect waves-light col">
                </div>
            </div>
        </form>
    </div>
</div>

<?php require('../modele/template/footer.php'); ?>
</body>

</html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Scripts -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    </script>
    <style>
        html {
            background: linear-gradient(90deg,
                    rgba(193, 17, 193, 1) 0%,
                    rgba(24, 68, 185, 1) 47%,
                    rgba(212, 110, 162, 1) 91%,
                    rgba(255, 157, 0, 1) 100%);
        }
    </style>

    <script>
        $(document).ready(function() {
            $("input#input_text").characterCounter();
        });
        $(document).ready(function() {
            $('.tooltipped').tooltip();
        });
        $(document).ready(function() {
            $('.modal').modal();
        });
    </script>
</head>

<body>
    <nav class="z-depth-1">
        <div class="container">
            <a href="/vitrine/home.php" class="brand-logo brand-text" id="home-btn">Vitrine</a>
            <?php
            if (isset($_SESSION['username']) and !empty($_SESSION['username'])) : ?>
                <ul class="right">
                    <li>
                        <a href="#">Hello,
                        <?php echo $_SESSION['username'] ?></a>
                    </li>
                    <li><a href="/vitrine/modele/auth/logout.php"><i class="material-icons right">logout</i></a></li>
                </ul>
            <?php endif; ?>
        </div>
    </nav>
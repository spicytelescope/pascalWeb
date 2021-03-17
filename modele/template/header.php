<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Scripts -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js">
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
            <a href="/vitrine/" class="brand-logo brand-text" id="home-btn">Vitrine</a>
            <ul>
                <li> <a class="waves-effect waves-light btn-large green" href="/vitrine/vue/insererProduit.php">Add a product <i class="material-icons right">add</i></a></li>
            </ul>
        </div>
    </nav>
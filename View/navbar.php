<?php

include("../Controller/protect.php");
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="../View/links/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand bg-dark navbar-dark" style="border-bottom: 4px solid #CCC">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <span class="navbar-brand">
                    Biblioteca
                </span>
                <li class="nav-item">
                    <a href="../View/livroView.php" class="nav-link">Livros</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Clientes</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Locação</a>
                </li>
            </ul>
            <a href="../Controller/logout.php" class="btn btn-danger" style="float: right;">Sair</a>
        </div>
    </nav>

    <script src="../View/links/js/bootstrap.bundle.min.js"></script>
</body>

</html>
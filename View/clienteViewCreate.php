<?php
include('../Controller/session.php');
include("../Controller/protect.php");
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clientes</title>
    <link href="../View/links/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="Container">
        <form style="background-color: #ccc; border-radius: 1em;" method="POST" action="../View/clienteView.php"
            target="_parent">
            <div style="padding: 1.5em;">
                <legend>Cadastrar CLIENTE:</legend>
                <div class="mb-3">
                    <label for="nomeLivro" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="nomeCliente" aria-describedby="nomeClienteHelp"
                        name="nomeCliente">
                    <div id="nomeClienteHelp" class="form-text">Nome por extenso do Cliente.</div>
                </div>
                <br>
                <input type="submit" class="btn btn-success" style="width: 100%;" name="btnCadastrar"
                    value="Cadastrar"></input>
            </div>
        </form>
    </div>

    <script src="../View/links/js/bootstrap.bundle.min.js"></script>
</body>

</html>
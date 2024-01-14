<?php
include('../Controller/session.php');
include("../Controller/protect.php");
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Locações</title>
    <link href="../View/links/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="Container">
        <form style="background-color: #ccc; border-radius: 1em;" method="POST" action="../View/locacaoView.php"
            target="_parent">
            <div style="padding: 1.5em;">
                <legend class="mb-3">Realizar Locação:</legend>
                <div class="mb-3 mt-5">
                    <label for="nomeLivro" class="form-label">Nome do Livro:</label>
                    <input type="text" class="form-control" id="nomeLivro" aria-describedby="nomeLivroHelp"
                        name="nomeLivro">
                    <div id="nomeLivroHelp" class="form-text">Nome por extenso do livro.</div>
                </div>
                <div class="mb-3 mt-2">
                    <label for="nomeCliente" class="form-label">Nome do Cliente:</label>
                    <input type="text" class="form-control" id="nomeCliente" aria-describedby="nomeClienteHelp"
                        name="nomeCliente">
                    <div id="nomeClienteHelp" class="form-text">Nome completo do cliente.</div>
                </div>
                <br>
                <input type="submit" class="btn btn-success" style="width: 100%;" name="btnLocacao"
                    value="Realizar Locação"></input>
            </div>
        </form>
    </div>

    <script src="../View/links/js/bootstrap.bundle.min.js"></script>
</body>

</html>
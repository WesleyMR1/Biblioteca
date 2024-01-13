<?php
include('../Controller/session.php');
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Livros</title>
    <link href="../View/links/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="Container">
        <form style="background-color: #ccc; border-radius: 1em;" method="POST" action="../View/livroView.php"
            target="_parent">
            <div style="padding: 1.5em;">
                <legend>Editar LIVRO:</legend>
                <h5>ID:
                    <?php echo $_GET['alterar']; ?>
                </h5>
                <input type="hidden" name="id" value="<?php echo $_GET['alterar']; ?>">
                <div class="mb-3">
                    <label for="nomeLivro" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="nomeLivro" aria-describedby="nomeLivroHelp"
                        name="nomeLivro">
                    <div id="nomeLivroHelp" class="form-text">Nome por extenso do livro.</div>
                </div>
                <br>
                <input type="submit" class="btn btn-success" style="width: 100%;" name="btnEditar"
                    value="Editar"></input>
            </div>
        </form>
    </div>

    <script src="../View/links/js/bootstrap.bundle.min.js"></script>
</body>

</html>
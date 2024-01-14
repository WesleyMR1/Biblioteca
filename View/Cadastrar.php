<?php
include('../Controller/session.php');

if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
    <link href="../View/links/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../View/links/login.css">
</head>

<body>
    <div class="container">
        <div class="">
            <div class="row justify-content-center pt-5 mt-5 mr-1">
                <div class="col-md-4  formulario">
                    <div class="form-group text-center pt-3">
                        <form action="../Controller/cadastrarController.php" method="POST" class="">
                            <h2 class='text-light'>CADASTRAR</h2>
                    </div>
                    <div class="form-group mx-sm-4 pt-3">
                        <input type="text" name="nome" class="form-control" placeholder="Nome">
                    </div>
                    <div class="form-group mx-sm-4 pt-3">
                        <input type="text" name="usuario" class="form-control" placeholder="Usuario">
                    </div>
                    <div class="form-group mx-sm-4 pb-3 pt-3">
                        <input type="password" name="senha" class="form-control" placeholder="Senha">
                    </div>
                    <div class="form-group mx-sm-4 pb-5">
                        <button type="submit" class="btn col-12 btn-light botao-login  "
                            value="Cadastrar">Cadastrar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>








    <script src="../View/links/js/bootstrap.bundle.min.js"></script>
</body>

</html>
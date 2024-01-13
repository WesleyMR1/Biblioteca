<?php
include('../View/navbar.php');
include('../Controller/livroController.php');
include('../Controller/session.php');
// 

if (!empty($_POST['btnEditar'])) {
    if (!empty($_POST['id'])) {
        if (!empty($_POST['nomeLivro']) and $_POST['nomeLivro'] != "") {
            $idLivro = $_POST['id'];
            $nomeLivro = $_POST['nomeLivro'];
            alterarLivro($idLivro, $nomeLivro);
        }
    }
}

if (!empty($_POST['btnDeletar'])) {
    $id = $_POST['idLivro'];
    deletarLivro($id);
}
if (!empty($_POST['btnCadastrar'])) {
    if (!empty($_POST['nomeLivro'])) {
        $nomeLivro = $_POST['nomeLivro'];
        criarLivro($nomeLivro);
    }
}


// if (!empty($_SESSION['botao']['criarLivro']) or $_SESSION['botao']['criarLivro'] == !null) {
//     //ativar aba
// }


?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LIVROS</title>
    <link href="../View/links/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid h-100" style="margin-top: 5px;">
        <div class="row ">
            <div class="col" style="height: 33em">
                <div class="links" style="display: flex; justify-content: center;">
                    <a href='../View/livroViewCreate.php' target='iframe' class=" btn"
                        style="width: 80%;  border: 0.2em solid #999; border-radius: 0.2em;"> Cadastrar novo livro</a>
                </div>
                <br>
                <div style="display: flex; justify-content: center;">
                    <iframe src="" name="iframe" frameborder="1"
                        style="background-color: #CCC; width: 80%; height: 29em"></iframe>
                </div>
            </div>
            <!--  -->
            <div class="col"
                style="background-color: #AAA; border: 0.2em solid #888; margin-right: 0.3em; overflow-y: auto; max-height: 33.5em;">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 20%; border-bottom: 0.1em solid #aaa; text-align: center;">#
                            </th>
                            <th scope="col" style=" border-bottom: 0.1em solid #aaa; text-align: center;">Nome</th>
                            <th scope="col" style="width: 30%; border-bottom: 0.1em solid #aaa; text-align: center;">
                                --
                            </th>
                        </tr>
                    </thead>
                    <?php
                    tabelaLivros();
                    ?>

                </table>

            </div>
        </div>
    </div>
    <script src=" ../View/links/js/bootstrap.bundle.min.js"></script>
</body>

</html>
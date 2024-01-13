<?php
include('../View/navbar.php');
include('../Controller/livroController.php');

?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LIVROS</title>
    <link href="View/links/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="Container" style="margin-top: 5px;">
        <div class="row">
            <div class="col">
                <div class="links" style="display: flex; justify-content: center;">
                    <button href='../View/livroViewCreate.php' target='iframe'
                        style="width: 80%;  border: 3px solid #777;"> Cadastrar novo
                        livro</button>
                </div>
                <br>
                <div style="display: flex; justify-content: center;">
                    <iframe src="../View/livroViewCreate.php" name="iframe" frameborder="1"
                        style="background-color: #DDD; width: 80%;"></iframe>
                </div>
            </div>
            <!--  -->
            <div class="col" style="background-color: #AAA;">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 20%; border: 1px solid black; text-align: center;">#</th>
                            <th scope="col" style=" border: 1px solid black; text-align: center;">Nome</th>
                            <th scope="col" style="width: 30%; border: 1px solid black; text-align: center;">
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
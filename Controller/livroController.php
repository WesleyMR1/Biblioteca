<?php
include("../Model/livroModel.php");

//



?>

<?php
function tabelaLivros()
{
    $livro = new Livro();
    $res = $livro->get_livros();

    if (count($res) > 0) {

        for ($i = 0; $i < count($res); $i++) {

            echo "<tr>";
            foreach ($res[$i] as $key => $value) {
                if ($key == "id_livro") {
                    echo ("<th scope=\"col\" style=\"text-align: center;\">" . $value . "</th>");
                }
                if ($key == "nome_livro") {
                    echo ("<th scope=\"col\">" . $value . "</th>");
                }
            }
            ?>
            <th scope="col" style="text-align: center;">
                <a target="iframe" class="btn btn-primary" style="width: 40%;"
                    href="../View/livroViewEdit.php?alterar=<?php echo $res[$i]['id_livro'] ?>">Alterar</a>
                <a class="btn btn-danger" style="width: 40%;" href="?deletar=<?php echo $res[$i]['id_livro'] ?>">Deletar</a>

            </th>
            <?php
            echo "</tr>";


        }
    }
}

function deletarLivro($id)
{
    $livro = new Livro();
    if ($livro->verificar_existencia($id)) {
        $livro->deletar_livro($id);
    }
}

function criarLivro($nome)
{
    $livro = new Livro();
    if ($livro->verificar_existenciaNome($nome) == false) {
        $livro->criar_livro($nome);
    }
}

function alterarLivro($idLivro, $nomeLivro)
{
    $livro = new Livro();
    if ($livro->verificar_existencia($idLivro)) {
        $livro->alterarNomeLivro($idLivro, $nomeLivro);
    }

}


?>

</tr>



</table>
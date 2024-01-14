<?php
include("../Model/locacaoModel.php");




?>

<?php
function tabelaLocacoes()
{
    $locacao = new Locacoes();
    $res = $locacao->get_locacoes();

    if (count($res) > 0) {

        for ($i = 0; $i < count($res); $i++) {

            echo "<tr>";
            foreach ($res[$i] as $key => $value) {
                if ($key == "nome_livro") {
                    echo ("<th scope=\"col\" style=\"text-align: center;\">" . $value . "</th>");
                }
                if ($key == "nome_cliente") {
                    echo ("<th scope=\"col\">" . $value . "</th>");
                }
            }
            ?>
            <th scope="col" style="text-align: center;">
                <form action="../View/locacaoView.php" method="post">
                    <input type="hidden" name="idLocacao" value="<?php echo $res[$i]['id_locacao'] ?>">
                    <button name="btnDeletar" type="submit" class="btn btn-danger" style="width: 40%;"
                        value="deletar">Deletar</button>
                </form>


            </th>
            <?php
            echo "</tr>";


        }
    }
}

function deletarLocacao($id)
{
    $locacao = new Locacoes();
    if ($locacao->verificar_existencia($id)) {
        $locacao->deletar_locacao($id);
    }
}

function criarLocacao($livro, $cliente)
{
    $locacao = new Locacoes();
    $locacao->criar_locacao($livro, $cliente);
}


?>

</tr>



</table>
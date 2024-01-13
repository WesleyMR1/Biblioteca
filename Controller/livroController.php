<?php
include("../Model/livroModel.php");



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
                <button style="width: 40%;">Alterar</button>
                <button style="width: 40%;" href="#">Excluir</button>
            </th>
            <?php
            echo "</tr>";


        }
    }
}


?>

</tr>



</table>
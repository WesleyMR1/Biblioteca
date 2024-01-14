<?php
include("../Model/clienteModel.php");

//



?>

<?php
function tabelaClientes()
{
    $livro = new Cliente();
    $res = $livro->get_clientes();

    if (count($res) > 0) {

        for ($i = 0; $i < count($res); $i++) {

            echo "<tr>";
            foreach ($res[$i] as $key => $value) {
                if ($key == "id_cliente") {
                    echo ("<th scope=\"col\" style=\"text-align: center;\">" . $value . "</th>");
                }
                if ($key == "nome_cliente") {
                    echo ("<th scope=\"col\">" . $value . "</th>");
                }
            }
            ?>
            <th scope="col" style="text-align: center;">
                <a target="iframeCliente" class="btn btn-primary" style="width: 40%;"
                    href="../View/clienteViewEdit.php?alterar=<?php echo $res[$i]['id_cliente'] ?>">Alterar</a>
                <form action="../View/clienteView.php" method="post">
                    <input type="hidden" name="idCliente" value="<?php echo $res[$i]['id_cliente'] ?>">
                    <button name="btnDeletar" type="submit" class="btn btn-danger" style="width: 40%;"
                        value="deletar">Deletar</button>
                </form>


            </th>
            <?php
            echo "</tr>";


        }
    }
}

function deletarCliente($id)
{
    $cliente = new Cliente();
    if ($cliente->verificar_existencia($id)) {
        $cliente->deletar_cliente($id);
    }
}

function criarCliente($nome)
{
    $cliente = new Cliente();
    if ($cliente->verificar_existenciaNome($nome) == false) {
        $cliente->criar_cliente($nome);
    }
}

function alterarCliente($idCliente, $nomeCliente)
{
    $cliente = new Cliente();
    if ($cliente->verificar_existencia($idCliente)) {
        $cliente->alterarNomeCliente($idCliente, $nomeCliente);
    }

}


?>

</tr>



</table>
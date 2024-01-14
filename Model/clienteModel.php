<?php
include('../Controller/DAO/conexao.php');

final class Cliente
{
    public function __construct()
    {

    }
    public function get_clientes()
    {
        $pdo = conectar();
        try {
            $result = $pdo->query("select * from clientes;");

            $res = $result->fetchAll(PDO::FETCH_ASSOC);
            return $res;
        } catch (\Throwable $th) {
            echo "Não deu certo5";
            echo $th->getMessage();
        }
    }

    public function verificar_existencia($id)
    {
        $pdo = conectar();
        try {
            $result = $pdo->query("Select * from clientes where id_cliente=$id");
            $res = $result->fetchAll(PDO::FETCH_ASSOC);
            if (count($res) > 0) {
                return true;
            } else {
                return false;
            }
        } catch (\Throwable $th) {
            echo "Não deu certo4";
            echo $th->getMessage();
        }
    }

    public function deletar_cliente($id)
    {
        try {
            $pdo = conectar();
            $stmt = $pdo->prepare("delete from clientes where id_cliente=:id;");
            $stmt->bindParam(":id", $id);
            if ($stmt->execute()) {
                header("../View/clienteView.php?");
            }

        } catch (\Throwable $th) {
            echo "Não deu certo3";
            echo $th->getMessage();
        }
    }

    public function verificar_existenciaNome($nome)
    {
        $pdo = conectar();
        try {
            $result = $pdo->query("select * from clientes where nome_cliente='$nome'");
            $res = $result->fetchAll(PDO::FETCH_ASSOC);
            if (count($res) > 0) {
                return true;
            } else {
                return false;
            }
        } catch (\Throwable $th) {
            echo "Não deu certo2";
            echo $th->getMessage();
        }
    }

    public function criar_cliente($nome)
    {
        try {
            $pdo = conectar();
            $stmt = $pdo->prepare("insert into clientes(nome_cliente) values(:nome);");
            $stmt->bindParam(':nome', $nome);
            if ($stmt->execute()) {
                header("../View/clienteView.php?");
            }


        } catch (\Throwable $th) {
            echo "Não deu certo1";
            echo $th->getMessage();
        }
    }

    public function alterarNomeCliente($idCliente, $nomeCliente)
    {
        try {
            $pdo = conectar();
            $stmt = $pdo->prepare("update clientes SET nome_cliente = :nomeCliente WHERE id_cliente = :idCliente;");
            $stmt->bindParam(':nomeCliente', $nomeCliente);
            $stmt->bindParam(':idCliente', $idCliente);
            if ($stmt->execute()) {
                header("../View/clienteView.php?");
            }


        } catch (\Throwable $th) {
            echo "Não deu certo11111111112112";
            echo $th->getMessage();
        }
    }

    //
}

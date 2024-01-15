<?php
include('../Controller/DAO/conexao.php');

final class Locacoes
{
    public function __construct()
    {

    }
    public function get_locacoes()
    {
        $pdo = conectar();
        try {
            $result = $pdo->query("select livros.nome_livro, clientes.nome_cliente, locacoes.id_locacao from (locacoes inner join clientes on  locacoes.cliente = clientes.id_cliente) inner join livros on locacoes.livro = livros.id_livro;");

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
            $result = $pdo->query("Select * from locacoes where id_locacao=$id");
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

    public function deletar_locacao($id)
    {
        try {
            $pdo = conectar();
            $stmt = $pdo->prepare("delete from locacoes where id_locacao=:id;");
            $stmt->bindParam(":id", $id);
            if ($stmt->execute()) {
                header("../View/locacaoView.php?");
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
            $result = $pdo->query("select * from locacoes where livro='$nome'");
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

    public function criar_locacao($livro, $nome)
    {
        try {
            $pdo = conectar();
            $result = $pdo->query("select * from (locacoes inner join livros on livros.id_livro = locacoes.livro) where livros.nome_livro = '$livro';");
            $res = $result->fetch(PDO::FETCH_ASSOC);
            if (count($res) > 0) {
                if (!isset($_SESSION)) {
                    session_start();
                }
                $_SESSION['msgLivroLocado'] = "Não foi possivel realizar locação, livro ja locado!";
                header('../View/locacaoView.php');
            } else {

                $res = $pdo->query("Select id_livro from livros where nome_livro = '$livro';");
                $id_livro = $res->fetch(PDO::FETCH_ASSOC);
                $res = $pdo->query("Select id_cliente from clientes where nome_cliente = '$nome';");
                $id_cliente = $res->fetch(PDO::FETCH_ASSOC);

                $stmt = $pdo->prepare("insert into locacoes(livro, cliente) values(:livro, :cliente);");
                $stmt->bindParam(':livro', $id_livro['id_livro']);
                $stmt->bindParam(':cliente', $id_cliente['id_cliente']);
                if ($stmt->execute()) {
                    header("../View/locacoesView.php?");
                }

            }


        } catch (\Throwable $th) {
            echo "Não deu certo1";
            echo $th->getMessage();
        }
    }

    //
}

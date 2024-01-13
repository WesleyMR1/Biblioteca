<?php
include('../Controller/DAO/conexao.php');

final class Livro
{
    public function __construct()
    {

    }
    public function get_livros()
    {
        $pdo = conectar();
        try {
            $result = $pdo->query("select * from livros;");

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
            $result = $pdo->query("Select * from livros where id_livro=$id");
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

    public function deletar_livro($id)
    {
        try {
            $pdo = conectar();
            $stmt = $pdo->prepare("delete from livros where id_livro=:id;");
            $stmt->bindParam(":id", $id);
            if ($stmt->execute()) {
                header("../View/livroView.php?");
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
            $result = $pdo->query("select * from livros where nome_livro='$nome'");
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

    public function criar_livro($nome)
    {
        try {
            $pdo = conectar();
            $stmt = $pdo->prepare("insert into livros(nome_livro) values(:nome);");
            $stmt->bindParam(':nome', $nome);
            if ($stmt->execute()) {
                header("../View/livroView.php?");
            }


        } catch (\Throwable $th) {
            echo "Não deu certo1";
            echo $th->getMessage();
        }
    }

    public function alterarNomeLivro($idLivro, $nomeLivro)
    {
        try {
            $pdo = conectar();
            $stmt = $pdo->prepare("update livros SET nome_livro = :nomeLivro WHERE id_livro = :idLivro;");
            $stmt->bindParam(':nomeLivro', $nomeLivro);
            $stmt->bindParam(':idLivro', $idLivro);
            if ($stmt->execute()) {
                header("../View/livroView.php?");
            }


        } catch (\Throwable $th) {
            echo "Não deu certo11111111112112";
            echo $th->getMessage();
        }
    }

    //
}

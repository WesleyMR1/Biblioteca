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
        $result = $pdo->query("select * from livros;");

        $res = $result->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }
}

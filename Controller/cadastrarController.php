<?php

include('../Controller/DAO/Conexao.php');
include('../Controller/session.php');


$pdo = conectar();

$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$senha = criptografar($_POST['senha']);


try {

    $stmt = $pdo->prepare("Insert into Contas values(0, :nome, :usuario, :senha);");
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":usuario", $usuario);
    $stmt->bindParam(":senha", $senha);
    if ($stmt->execute()) {
        $_SESSION['msg'] = "Cadastrado com sucesso!";
        header("location: ../index.php");
    }


} catch (\Throwable $th) {
    echo "Não deu certo";
    echo $th->getMessage();
}



function criptografar($senha)
{
    return password_hash($senha, PASSWORD_DEFAULT);
}
<?php
include('../Controller/DAO/Conexao.php');
include('./Controller/session.php');


$pdo = conectar();

// 


if (isset($_POST['usuario']) || isset($_POST['senha'])) {
    if (strlen($_POST['usuario']) == 0) {
        $_SESSION['msg'] = "Preencha seu usuario!";
        header("Location: ../index.php");
    } elseif (strlen($_POST['senha']) == 0) {
        $_SESSION['msg'] = "Preencha sua senha!";
        header("Location: ../index.php");
    } else {


        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $result = $pdo->query("select * from contas where usuario = '$usuario' LIMIT 1");

        $conta = $result->fetch(PDO::FETCH_ASSOC);

        if (password_verify($senha, $conta['senha'])) {

            if (!isset($_SESSION)) {
                session_start();
            }


            $_SESSION['id'] = $conta['id'];
            $_SESSION['nome'] = $conta['nome'];

            header("Location: ../View/livroView.php");


        } else {
            if (!isset($_SESSION)) {
                session_start();
            }
            $_SESSION['msg'] = "Falha ao logar.<Br/>  Usuario ou senha incorretos!";
            header("Location: ../index.php");
        }


    }
}




?>
<?php

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM usuario WHERE email='{$usuario}' and senha='{$senha}'";

    $conexao = new PDO('mysql:host=127.0.0.1;dbname=remoteduel_project', 'root', '');

    $resultado = $conexao->query($sql);

    $linha = $resultado->fetch();

    $usuario_logado = $linha['usuario'];

    if($usuario_logado == null){
        //Usuario ou senha inválida
        header('Location: ../html/login.html');
    } else{
        session_start();

        $_SESSION['usuario_logado'] = $usuario_logado;
        header('Location: ../html/indexlogado.html');
    }
?>
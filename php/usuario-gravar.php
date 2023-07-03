<?php

    require_once "../php/classes/usuario.php";

    $usuario = new Usuario();

    $usuario->nome = $_POST['nome'];
    $usuario->usuario = $_POST['usuario'];
    $usuario->email = $_POST['email'];
    $usuario->telefone = $_POST['telefone'];
    $usuario->nomeDisc = $_POST['nomeDisc'];
    $usuario->nomeDiscOp = $_POST['nomeDiscOp'];
    $usuario->senha = $_POST['senha'];
    $usuario->confSenha = $_POST['confSenha'];

    $usuario->inserir();
?>
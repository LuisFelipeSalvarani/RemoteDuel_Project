<?php

class usuario {

    public $nome;
    public $usuario;
    public $email;
    public $telefone;
    public $nomeDisc;
    public $nomeDiscOp;
    public $senha;
    public $confSenha;

    public function inserir(){

        if ($this->senha === $this->confSenha) {

            $sql = "INSERT INTO usuario (nome, usuario, email, telefone, nomeDisc, nomeDiscOp, senha) VALUES(
                '".$this->nome. "',
                '".$this->usuario. "',
                '".$this->email. "',
                '".$this->telefone. "',
                '".$this->nomeDisc. "',
                '".$this->nomeDiscOp. "',
                '".$this->senha. "'
                )";
    
            
            $conexao = new PDO('mysql:host=127.0.0.1;dbname=remoteduel_project','root','');
    
            $conexao->exec($sql);
    
            // echo "<h1>Registro Gravado com Sucesso!!!</h1>";
            header('Location: ../html/index.php');
        }
        else {
            echo "Senha e confirmação de senha não são iguais. Tente novamente.";
        }
            
       

    }

}

?>
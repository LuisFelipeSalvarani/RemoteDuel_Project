<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/cadastro.css">
    <link rel="stylesheet" href="../css/NavFooter.css">

  </head>
  <body>

    <?php
        require '../php/navFooter/nav.php'
   ?>
    
    <!--Login-->
    <header>
        <div class="container top_cadastro">
            <form action="../php/usuario-gravar.php" method="POST">
                <div class="title_cadastro">
                    <label>Cadastro</label>
                </div>
                <!--Dados do usuario-->
                <div class="title_linha">
                    <label for="">Dados do usuário</label>
                </div>
                <div class="row g-3 linha_form_cadastro">
                    <div class="col-sm-6 form-floating ">
                        <input type="text" class="form-control" name="nome" id="floatingInput" placeholder="">
                        <label for="floatingInput">Nome:</label>
                    </div>
                    <div class="col-sm-6 form-floating ">
                        <input type="text" id="DateNasc" name="usuario" onkeypress="mascaraDate()" maxlength="10" minlength="10" class="form-control" id="floatingInput" placeholder="">
                        <label for="floatingInput">Nome de usuario</label>
                    </div>
                </div>
                <div class="row g-3 linha_form_cadastro">
                    <div class="col-sm-9 form-floating ">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="">
                        <label for="floatingInput">E-mail:</label>
                    </div>
                    <div class="col-sm-3 form-floating ">
                        <input type="text" class="form-control" name="telefone" maxlength="14" id="tell" onkeypress="macaraTelefone()" placeholder="">
                        <label for="floatingInput">Telefone:</label>
                    </div>
                </div>
                <hr>
                <!--Discord-->
                <div class="title_linha">
                    <label for="">Discord</label>
                </div>
                <div class="row g-3 linha_form_cadastro">
                    <div class="col-sm-6 form-floating ">
                        <input type="text" class="form-control" id="cep" name="nomeDisc" maxlength="10" onkeypress="mascaraCEP()" placeholder="">
                        <label for="floatingInput">Nome Discord</label>
                    </div>
                    <div class="col-sm-6 form-floating ">
                        <input type="text" class="form-control" id="cep" name="nomeDiscOp" maxlength="10" onkeypress="mascaraCEP()" placeholder="">
                        <label for="floatingInput">Nome Discord Secundario (Opcional)</label>
                    </div>
                </div>
                <hr>
                <!--login-->
                <div class="title_linha">
                    <label for="">Login</label>
                </div>
                <div class="row g-4 linha_form_cadastro">
                    <div class="col-sm-5 form-floating ">
                        <input type="password" class="form-control" name="senha" id="floatingInput" placeholder="">
                        <label for="floatingInput">Senha:</label>
                    </div>
                    <div class="col-sm-5 form-floating ">
                        <input type="password" class="form-control" name="confSenha" id="floatingInput" placeholder="">
                        <label for="floatingInput">Repita a senha:</label>
                    </div>
                    <div class="col-sm-2 btn_salvar">
                        <button type="submit" class="btn_salvar_click">Salvar</button>
                    </div>
                </div>

            </form>
        </div>
    </header>

    <?php
        require '../php/navFooter/footer.php'
   ?>

    <footer class="footer_cell footer_bot text-center">
        <div class="container">
            <div>
                <a class="navbar-brand" href="#"><img class="nav_logo" src="../imgs/remote_duel_logo.png" alt=""></a>
            </div>   
            <div class="redes espacamento_cell_footer">
                <p>Remote Duel Discord Brasil</p>
                <a class="aba" href="sobreNos.html">> Sobre Nós</a>
                <a class="aba" href="devs.html">> Devs</a>
            </div>             
            <div>
                <div class="redes espacamento_cell_footer">
                    <p>Nossas Redes</p>
                </div>
                <div class="redes">
                    <a href="https://discord.gg/sZzpCqBrYE"><img src="../imgs/discordia.png" alt=""></a>
                </div>
            </div> 
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- JS UTILIZADO -->

  </body>
</html>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/cadastro.css">
    <link rel="stylesheet" href="../css/perfil.css">
    <link rel="stylesheet" href="../css/NavFooter.css">

  </head>
  <body>

  <?php
        require '../php/navFooter/navLogado.php'
   ?>    

    <!--Perfil-->
    <header>
        <div class="container top_cadastro">
            <form action="../../includes/inserirUsuario.php" method="POST">
                <div class="title_cadastro">
                    <label>Perfil</label>
                </div>
                <div class="personal-image">
                    <label class="label">
                      <input type="file" />
                      <figure class="personal-figure">
                        <img src="https://avatars1.githubusercontent.com/u/11435231?s=460&v=4" class="personal-avatar" alt="avatar">
                        <figcaption class="personal-figcaption">
                          <img src="https://raw.githubusercontent.com/ThiagoLuizNunes/angular-boilerplate/master/src/assets/imgs/camera-white.png">
                        </figcaption>
                      </figure>
                    </label>
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
                        <input type="text" id="DateNasc" name="dataNascimento" onkeypress="mascaraDate()" maxlength="10" minlength="10" class="form-control" id="floatingInput" placeholder="">
                        <label for="floatingInput">Nome de Usuário</label>
                    </div>
                </div>
                <div class="row g-3 linha_form_cadastro">
                    <div class="col-sm-9 form-floating ">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="">
                        <label for="floatingInput">E-mail:</label>
                    </div>
                    <div class="col-sm-3 form-floating ">
                        <input type="text" class="form-control" name="celular" maxlength="14" id="tell" onkeypress="macaraTelefone()" placeholder="">
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
                        <input type="text" class="form-control" id="cep" name="cep" maxlength="10" onkeypress="mascaraCEP()" placeholder="">
                        <label for="floatingInput">Nome Discord</label>
                    </div>
                    <div class="col-sm-6 form-floating ">
                        <input type="text" class="form-control" id="cep" name="cep" maxlength="10" onkeypress="mascaraCEP()" placeholder="">
                        <label for="floatingInput">Nome Discord Secundario (Opcional)</label>
                    </div>
                </div>
                <hr>
                <!--login-->
                <div class="title_linha">
                    <label for="">Login</label>
                </div>
                <div class="row g-4 linha_form_cadastro">
                    <div class="col-sm-4 form-floating ">
                        <input type="text" class="form-control" name="login" id="floatingInput" placeholder="">
                        <label for="floatingInput">Senha atual:</label>
                    </div>
                    <div class="col-sm-3 form-floating ">
                        <input type="password" class="form-control" name="senha" id="floatingInput" placeholder="">
                        <label for="floatingInput">Nova senha:</label>
                    </div>
                    <div class="col-sm-3 form-floating ">
                        <input type="password" class="form-control" name="repeteSenha" id="floatingInput" placeholder="">
                        <label for="floatingInput">Repita a Nova senha:</label>
                    </div>
                    <div class="col-sm-2 btn_salvar">
                        <button type="submit" class="btn_salvar_click">Alterar</button>
                    </div>
                </div>

            </form>
        </div>
    </header>

    <?php
        require '../php/navFooter/footerLogado.php'
   ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- JS UTILIZADO -->
	<script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/popper.js"></script>
	<script type="text/javascript" src="../js/cep/jquery.js"></script>
    <script type="text/javascript" src="../js/mascaras.js"></script>
    <script type="text/javascript" src="../js/cep/cep.js"></script>
  </body>
</html>
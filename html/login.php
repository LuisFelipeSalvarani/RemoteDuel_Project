<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/NavFooter.css">
  </head>
  <body>

  <?php
        require '../php/navFooter/nav.php'
   ?>
    
    <!--Login-->
    <header>
        <div class="login_">
            <form id="formLogin" method="POST" action="../php/usuario-login.php">
                <div class="title_login">
                    <p>Entre com o login criado</p>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="usuario" class="form-control required" id="floatingInput" placeholder="nome@example.com" oninput="nameValidate()">
                    <label for="floatingInput">E-mail:</label>
                    <span class="span-required">Usuario deve ter no mínimo 3 caracteres</span>
                  </div>
                  <div class="form-floating mb-3" >
                    <input type="password" name="senha" class="form-control required" id="floatingPassword" placeholder="Password" oninput="passValidate()">
                    <label for="floatingPassword">Senha:</label>
                    <span class="span-required">A senha deve conter no mínimo 8 caracteres</span>
                  </div>
                <div class="mb-3 form-check campo_login">
                    <div>
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Mostrar Senha</label>
                    </div>
                    <div><a class="esqueceu" href="esqueciSenha.php">Esqueceu a senha ?</a></div>
                </div>
                <div class="btn_login"><button type="submit" class="btn_login_click">Login</button></div>
                <div class="mb-3 text-center">
                    <p>Não Tenho conta ?<a class="esqueceu" href="cadastro.php"> crie agora.</a></p> 
                </div>
              </form>
        </div>
    </header>

    <?php
        require '../php/navFooter/footer.php'
   ?>


    <script type="text/javascript" src="../js/mascaras.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
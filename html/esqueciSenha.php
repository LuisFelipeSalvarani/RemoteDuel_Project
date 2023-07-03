<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Esqueci Senha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/NavFooter.css">
  </head>
  <body>

  <?php
        require '../php/navFooter/nav.php'
   ?>

    <!--Esqueci senha-->
    <header>
        <div class="login_">
            <form id="formLogin">
                <div class="title_login">
                    <p>Digite um E-mail existente</p>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control required" id="floatingInput" placeholder="nome@example.com" oninput="nameValidate()">
                    <label for="floatingInput">E-mail:</label>
                  </div>
                <div class="btn_login"><a type="submit" class="btn_login_click">Resgatar</a></div>
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
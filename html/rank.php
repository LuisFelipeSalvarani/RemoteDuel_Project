<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/rank.css">
    <link rel="stylesheet" href="../css/NavFooter.css">
  </head>
  <body>

  <?php
        require '../php/navFooter/navLogado.php'
   ?>    
    
    <!--rank-->
    
    <header class="container">
        <h1>Rank do Server</h1>
    </header>

    <main>
        <form action="">
            <!--Barra de pesquisa e posição-->
            <div class="pesquisa_barra container">
                <div class="posicao">
                    <p>Sua posição: </p><p class="color_posicao">1°</p>
                </div>
                <div class="row g-3 pesquisar">
                    <div class="col-auto">
                    <label for="inputPassword2" class="visually-hidden">Id Discord</label>
                    <input type="password" class="form-control" id="inputPassword2" placeholder="Id Discord">
                    </div>
                    <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Pesquisar</button>
                    </div>
                </div>
            </div>

            <!--tabela-->

            <div class="container rank_table">
                <table class="table">
                  <thead>
                    <tr>
                        <th scope="col">Posição</th>
                        <th scope="col">IdDiscord</th>
                        <th scope="col">pontuação</th>
                        <th scope="col">Vitorias</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <th scope="row">1°</th>
                        <td>João</td>
                        <td>12</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <th scope="row">2°</th>
                        <td>João</td>
                        <td>9</td>
                        <td>3</td>
                      </tr>
                      <tr>
                        <th scope="row">3°</th>
                        <td>João</td>
                        <td>6</td>
                        <td>2</td>
                      </tr>
                  </tbody>
                </table>
              </div>
        </form>
    </main>
     
    <?php
        require '../php/navFooter/footerLogado.php'
   ?>

    <script type="text/javascript" src="../js/mascaras.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
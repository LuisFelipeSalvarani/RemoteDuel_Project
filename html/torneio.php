<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Torneio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/torneio.css">
    <link rel="stylesheet" href="../css/NavFooter.css">
  </head>
  <body>

   
  <?php
        require '../php/navFooter/navLogado.php'
   ?>  

    <main>
        <!--Torneios em aberto-->
        <div class="container torneios">
            <div class="title_torneios_principal">
                <h3>Torneios em aberto</h3>
            </div>
            <div class="box">
                <!--copiar-->
                <div class="card">
                    <div>
                    <div class="img_logo">
                        <img src="../imgs/remote_duel_logo.png" class="card-img-top" alt="...">
                    </div>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Torneio Remote Duel</h5>
                      <p class="card-text">Torneio Administrado pelo discord Remote Duel</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Formato: Classico</li>
                      <li class="list-group-item">Inscrição: R$ 20,00</li>
                    </ul>
                    <div class="btn_torneio">
                        <button type="button" class="btn_click_inscricao">Inscrever-se</button>
                    </div>
                </div>

            </div>
        </div>

        <!--Modal torneios em aberto-->
        <dialog class="modal_inscricao">

            <div class="fechar">
                <a class=".fecharClick" href=""><img src="../imgs/close.png" alt=""></a>
            </div>

            <div class="title_torneios_modal">
                <h3>Torneio Remote Duel</h3>
            </div>

            <div class="img_logo_modal">
                <img src="../imgs/remote_duel_logo.png" class="card-img-top" alt="...">
            </div>

            <div class="sub-titulo">
                <p>Torneio Administrado pelo discord Remote Duel</p>
            </div>

            <div class="informacoes">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Premiação:</li>
                    <li class="list-group-item">1° R$ 100,00</li>
                    <li class="list-group-item">2° R$ 100,00</li>
                    <li class="list-group-item">3° R$ 100,00</li>
                    <li class="list-group-item">4° R$ 100,00</li>
                </ul>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Formato: Classico</li>
                    <li class="list-group-item">Inscrição: R$ 20,00</li>
                </ul>
            </div>

            <div class="decklist">
                <h5>Adicione sua Deck List para se inscrever</h5>
            </div>

            <div>
                <form action="">
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02"></label>
                    </div>
                    <div class="btn_torneio">
                        <button type="submit" class="btn_click_inscricao">Inscrever-se</button>
                    </div>
                </form>
            </div>

        </dialog>


        <!--torneios Inscritos-->
        <div class="container torneios">
            <div class="title_torneios_principal">
                <h3>Torneios Inscritos</h3>
            </div>
            <div class="box">
                <!--copiar-->
                <div class="card">
                    <div>
                    <div class="img_logo">
                        <img src="../imgs/remote_duel_logo.png" class="card-img-top" alt="...">
                    </div>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Torneio Remote Duel</h5>
                      <p class="card-text">Torneio Administrado pelo discord Remote Duel</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Formato: Classico</li>
                      <li class="list-group-item status">Status: Aprovado</li>
                    </ul>
                    <div class="btn_torneio">
                        <button type="button" class="btn_click_participando">Informações</button>
                    </div>
                    
                </div>
            </div>
        </div>
    </main>

     <!--Modal torneios inscrito-->
     <dialog class="modal_participando">

        <div class="fechar">
            <a class=".fecharClickparticipando" href=""><img src="../imgs/close.png" alt=""></a>
        </div>

        <div class="title_torneios_modal">
            <h3>Torneio Remote Duel</h3>
        </div>

        <div class="img_logo_modal">
            <img src="../imgs/remote_duel_logo.png" class="card-img-top" alt="...">
        </div>

        <div class="sub-titulo">
            <p>Torneio Administrado pelo discord Remote Duel</p>
        </div>

        <div class="informacoes">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Premiação:</li>
                <li class="list-group-item">1° R$ 100,00</li>
                <li class="list-group-item">2° R$ 100,00</li>
                <li class="list-group-item">3° R$ 100,00</li>
                <li class="list-group-item">4° R$ 100,00</li>
            </ul>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Formato: Classico</li>
                <li class="list-group-item status">Status:<p>Aprovado</p></li>
            </ul>
        </div>

    

    </dialog>

    <?php
        require '../php/navFooter/footerLogado.php'
   ?>

    <script type="text/javascript" src="../js/modal.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
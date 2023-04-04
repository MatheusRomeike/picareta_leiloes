<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="eventos.scss">
    <title>Eventos</title>
</head>
<body>

    <?php
    include './../../components/header/header.html';
    ?>

    <h2 class="h1-responsive font-weight-bold text-center my-4">Eventos</h2>

    <div class="mx-auto" style="margin-bottom: 20px;">
        <div class="row g-3">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card" style="width: 20rem;">
                    <img src="./../eventos/assets/event01.webp" class="card-img-top" alt="O sonho do primeiro carro">
                    <div class="card-body">
                        <h5 class="card-title">Leilão Presencial</h5>
                        <p class="card-text">Está procurando o primeiro carro e não sabe por onde começar? Vem conferir!</p>
                    </div>
                    <div class="card-body">
                        <i class='fas fa-map-marker-alt'></i>
                        <p class='card-text'>Rua Imaculada Conceição, 1155 - Prado Velho, Curitiba</p>
                        <i class="fas fa-calendar-alt"></i>
                        <p class='card-text'>23/05/2023 às 17h00.</p>

                        <!-- Adicionar página de listagem de lotes quando for criada -->

                        <div class="justify-content-center d-flex">
                            <button onclick="window.location.href = './../contato/contato.php'"; class="btn btn-outline-success col-6">Leilão</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card" style="width: 20rem;">
                    <img src="./../eventos/assets/event02.jpg" class="card-img-top" alt="As opções mais aguardadas">
                    <div class="card-body">
                        <h5 class="card-title">Leilão Presencial - Online</h5>
                        <p class="card-text">Para você que está esperando pelo momento ideal, chegou a sua vez!</p>
                    </div>
                    <div class="card-body">
                        <i class='fas fa-map-marker-alt'></i>
                        <p class='card-text'>Rua Imaculada Conceição, 1155 - Prado Velho, Curitiba</p>
                        <i class="fas fa-calendar-alt"></i>
                        <p class='card-text'>18/07/2023 às 12h30.</p>

                        <!-- Adicionar página de listagem de lotes quando for criada -->

                        <div class="justify-content-center d-flex">
                            <button onclick="window.location.href = './../contato/contato.php'"; class="btn btn-outline-success col-6">Leilão</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card" style="width: 20rem;">
                    <img src="./../eventos/assets/event03.webp" class="card-img-top" alt="Que vença o mais audacioso!">
                    <div class="card-body">
                        <h5 class="card-title">Leilão Presencial</h5>
                        <p class="card-text">Preparado para grandes emoções? Venha conferir para se surpreender!</p>
                    </div>
                    <div class="card-body">
                        <i class='fas fa-map-marker-alt'></i>
                        <p class='card-text'>Rua Imaculada Conceição, 1155 - Prado Velho, Curitiba</p>
                        <i class="fas fa-calendar-alt"></i>
                        <p class='card-text'>05/09/2023 às 14h00.</p>

                        <!-- Adicionar página de listagem de lotes quando for criada -->

                        <div class="justify-content-center d-flex">
                            <button onclick="window.location.href = './../contato/contato.php'"; class="btn btn-outline-success col-6">Leilão</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include './../../components/footer/footer.html';
    ?>
    
</body>
</html>
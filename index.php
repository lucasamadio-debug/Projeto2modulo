<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagens/logo1.png">
    <link rel="stylesheet" href="css/index.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Oswald:wght@200..700&family=Outfit:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <title>Thiago Lanches</title>
</head>

<body>

<?php include "includes/header.php"; ?>

    <section>
        <h1>Thiago lanches o melhor de Araruna!</h1>
        <p>Os melhores lanches da cidade, com ingredientes frescos e sabor inconfundível que aquece o coração!</p>

        <button><a href="cardapio.php">Cardápio</a></button>

    </section>

    <main>
        <div id="grid">
            <div class="texto1">
                <h2>🥖<br>Ingredientes frescos</h2>
                <p>Utilizamos apenas os melhores ingredientes para garantir o sabor e a qualidade dos nossos lanches.
                </p>
            </div>

            <div class="texto2">
                <h2>🔥<br>Prensados  na hora</h2>
                <p>Seus lanches são preparados e prensados fresquinhos para você se deliciar com um pedaço do paraiso
                </p>
            </div>

            <div class="texto3">
                <h2>🏍️<br>Entrega</h2>
                <p>Entregamos seus lanches com rapidez e eficiência, garantindo que cheguem frescos e saborosos.</p>
            </div>
        </div>

        <div id="pedido">
            <h2>Veja seu pedido agora e aproveite!</h2>
            <p>Os melhores lanches da cidade estao aqui no Thiago Lanches!</p>

            <button><a href="cardapio.php">Cardapio</a></button>
        </div>

    </main>

    <?php include "includes/footer.php"; ?>

    <script src = "js/index.js"></script>
</body>

</html>
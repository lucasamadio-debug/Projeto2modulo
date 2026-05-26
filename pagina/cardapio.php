<?php
// 1. Array estruturado com todas as categorias do Thiago Lanches
$cardapio_completo = [
    [
        'secao_titulo' => 'PRENSADOS',
        'secao_icon' => '🥖',
        'lanches' => [
            ['num' => '01', 'nome' => 'x-salada', 'preco' => 22.00, 'ingredientes' => 'Pão, queijo, presunto, tomate hamburguer e alface.'],
            ['num' => '02', 'nome' => 'x-bacon', 'preco' => 30.00, 'ingredientes' => 'Pão, queijo, presunto, tomate, hamburguer, bacon e alface..'],
            ['num' => '03', 'nome' => 'x-tudo', 'preco' => 55.00, 'ingredientes' => 'Frango, bacon, milho, catupiry, cheeder, tomate, alface, 2 salchichas 2 hambúrgueres, calabresa e bacon.', 'popular' => true],
            ['num' => '04', 'nome' => 'x-calabresa', 'preco' => 30.00, 'ingredientes' => 'Pão, queijo, presunto, tomate hamburguer calabresae alface.'],
            ['num' => '05', 'nome' => 'x-frango', 'preco' => 29.00, 'ingredientes' => 'Pão, salsicha, frango, tomate, hamburguer e alface .'],
            ['num' => '06', 'nome' => 'x-frango catupiry', 'preco' => 33.00, 'ingredientes' => 'Pão, salsicha, frango, tomate, hamburguer e alface catupiry.'],
            ['num' => '07', 'nome' => 'x-frango cheddar', 'preco' => 33.00, 'ingredientes' => 'Pão, salsicha, frango, tomate, hamburguer e alface cheddar.'],
            ['num' => '08', 'nome' => 'x-itapema', 'preco' =>23.00, 'ingredientes' => 'Pão, queijo, presunto, tomate hamburguer, batata palha e alface.'],
        ]
    ],
    [
        'secao_titulo' => 'HOT DOGS',
        'secao_icon' => '🌭',
        'lanches' => [
            ['num' => '09', 'nome' => 'Dog carne', 'preco' => 22.00, 'ingredientes' => 'Pão, salsicha, carne e batata palha.'],
            ['num' => '10', 'nome' => 'Dog Misto', 'preco' => 24.00, 'ingredientes' => 'Pão, salsichas, carne, frango e batata palha.'],
            ['num' => '11', 'nome' => 'Dog Bacon', 'preco' => 27.00, 'ingredientes' => 'Pão, 2salsichas,milho, queijo, tomate,bacon e batata palha .', 'popular' => true],
            ['num' => '12', 'nome' => 'Dog calabresa', 'preco' => 27.00, 'ingredientes' => 'Pão, salsicha,milho, queijo, tomate,calabresa e batata palha .'],
            ['num' => '13', 'nome' => 'Dog Frango', 'preco' => 22.00, 'ingredientes' => 'Pão, 2salsichas, frango e batata palha.'],
            ['num' => '14', 'nome' => 'Dog EGG calabresa', 'preco' => 30.00, 'ingredientes' => 'Pão, 2 salsichas, milho, queijo, tomate, calabresa, 2 EGGS, e batata palha .']
        ]
    ],
    [
        'secao_titulo' => 'LANCHES GOURMET',
        'secao_icon' => '✨',
        'lanches' => [
            ['num' => '08', 'nome' => 'Smash Burguer', 'preco' => 16.00, 'ingredientes' => 'Pão brioche, hamburguer e queijo.'],
            ['num' => '09', 'nome' => 'Gourmet da casa', 'preco' => 22.00, 'ingredientes' => 'Pão brioche, hamburguer, queijo, tomate, alface, molho da casa,cebola roxa'],
            ['num' => '10', 'nome' => 'Gourmet cheddar', 'preco' => 30.00, 'ingredientes' => 'Pão brioche, hamburguer, queijo, tomate, alface, queijo cheddar triplo, molho da casa,cebola roxa','popular' => true],
            ['num' => '11', 'nome' => 'Gourmet triplo bacon', 'preco' => 28.00, 'ingredientes' => 'Pão brioche, hamburguer, queijo, tomate, alface, molho da casa,cebola roxa e bacon .'],
        ]
    ]
];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagens/logo1.png">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="css/cardapio.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400..700&family=Inter:wght@100..900&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <title>Thiago Lanches - Cardápio</title>
</head>

<body>


    <div class="container menu-conteudo my-5">
        <?php 
        // Laço principal para criar cada seção do cardápio
        foreach ($cardapio_completo as $secao): 
        ?>
            <div class="menu-secao mb-5">
                <div class="secao-header d-flex align-items-center mb-4">
                    <span class="secao-icon"><?php echo $secao['secao_icon']; ?></span>
                    <h2 class="secao-title ms-3"><?php echo $secao['secao_titulo']; ?></h2>
                </div>
                
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
                    <?php foreach ($secao['lanches'] as $lanche): ?>
                        <div class="col">
                            <div class="card card-menu h-100 shadow-sm border-0 position-relative">
                                <div class="card-body d-flex flex-column justify-content-between p-4">
                                    
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="lanche-num"><?php echo $lanche['num']; ?></span>
                                        <?php if (isset($lanche['popular'])): ?>
                                            <span class="badge badge-popular">POPULAR</span>
                                        <?php endif; ?>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <h4 class="lanche-nome"><?php echo $lanche['nome']; ?></h4>
                                        <p class="lanche-ingredientes card-text"><?php echo $lanche['ingredientes']; ?></p>
                                    </div>
                                    
                                    <div class="d-flex justify-content-between align-items-center mt-auto pt-2 border-top">
                                        <span class="lanche-preco">R$ <?php echo number_format($lanche['preco'], 2, ',', '.'); ?></span>
                                       <a href="https://wa.me/5544998340641" target="_blank" class="seta-link text-decoration-none">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div> </div>
        <?php endforeach; ?>
    </div>

  

    <script src="js/index.js"></script>
</body>
</html>
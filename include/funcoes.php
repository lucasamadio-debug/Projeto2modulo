<?php
require_once "include/coneçao.php";

// Busca todos os produtos agrupados por categoria
function buscarTodosProdutos(mysqli $conn): array {
    if (!$conn) {
        return [];
    }

    $resultado = [];

    $sql = "SELECT p.id_produto, p.nome_lanches, p.preco, 
                   p.popular, p.ingredientes, c.nome_categoria
            FROM produto p
            JOIN categoria c ON p.id_categoria = c.id_categoria
            ORDER BY c.id_categoria, p.id_produto";

    $res = $conn->query($sql);

    while ($linha = $res->fetch_assoc()) {
        $categoria = $linha['nome_categoria'];
        $resultado[$categoria][] = $linha;
    }

    return $resultado;
}
?>
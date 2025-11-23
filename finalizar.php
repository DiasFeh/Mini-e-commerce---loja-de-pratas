<?php
include 'conexao.php';
session_start();

// Só prosseguir se o carrinho não estiver vazio
if (empty($_SESSION['carrinho'])) {
    echo "<div class='alert alert-warning text-center'>Seu carrinho está vazio!</div>";
    exit;
}

// Quando o formulário for enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];

    // Inserir pedido
    $conn->query("INSERT INTO pedidos (cliente_nome, cliente_telefone) VALUES ('$nome', '$telefone')");
    $pedido_id = $conn->insert_id; // pega o ID do pedido recém-criado

    // Inserir produtos do carrinho
    foreach ($_SESSION['carrinho'] as $produto) {
        $produto_id = $produto['id']; // preciso que cada produto tenha o ID do banco
        $quantidade = 1; // se quiser, pode adicionar quantidade no futuro
        $conn->query("INSERT INTO pedido_produto (pedido_id, produto_id, quantidade) VALUES ($pedido_id, $produto_id, $quantidade)");
    }

    // Limpar carrinho
    $_SESSION['carrinho'] = [];

    echo "<div class='alert alert-success text-center'>Pedido finalizado com sucesso!</div>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Finalizar Compra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-5">
    <h2 class="mb-4 text-center">Finalizar Compra</h2>

    <form method="post" class="mx-auto" style="max-width: 400px;">
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Telefone</label>
            <input type="text" name="telefone" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success w-100">Finalizar Compra</button>
    </form>
</div>
</body>
</html>

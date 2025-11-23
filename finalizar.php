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
        $produto_id = $produto['id'];
        $quantidade = 1;
        $conn->query("INSERT INTO pedido_produto (pedido_id, produto_id, quantidade) VALUES ($pedido_id, $produto_id, $quantidade)");
    }

    // Limpar carrinho
    $_SESSION['carrinho'] = [];

    echo "<div class='alert alert-success text-center'>Pedido finalizado com sucesso!</div>";

    // Redirecionar automaticamente após 3 segundos
    echo "<script>
            setTimeout(function(){
                window.location.href = 'carrinho.php';
            }, 3000); // 3000ms = 3 segundos
        </script>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Finalizar Compra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn{
            background-color: #735A4C;
            color: #fff;
            padding: 8px;
        }
        .btn:hover{
            background: #A69586;
            color: #fff;
            padding: 10px;
        }
        h2{
            color: #735A4C;
        }
        #form{
            background-color: #735A4C;
            color: #fff; 
            padding: 40px 30px;
            border-radius: 25px;
            max-width: 450px;
            margin: 50px auto; /* centraliza na página */
            box-shadow: 0px 4px 15px rgba(0,0,0,0.2);
            text-align: center;
        }
        img{
            max-width: 200px;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <a href="carrinho.php" class="btn">Voltar</a>
        <h2 class="mb-4 text-center">Finalizar Compra</h2>

        <img src="imagens/logo.png" alt="">

        <form method="post" class="mx-auto" style="max-width: 400px;" id="form">
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
    <footer class="bg-light text-dark py-4 mt-5">
        <div class="container text-center">

            <h5 class="fw-bold mb-3">NA•FER</h5>
            <p class="mb-3">
                Elegância que fala por você.
            </p>

            <div class="d-flex justify-content-center gap-4 mb-3">
                <a href="#" class="text-dark text-decoration-none">Quem Somos</a>
                <a href="#" class="text-dark text-decoration-none">Produtos</a>
                <a href="#" class="text-dark text-decoration-none">Contato</a>
            </div>

            <p class="small mb-0">
                © 2025 NA•FER — Todos os direitos reservados.
            </p>
    </footer>
</body>
</html>

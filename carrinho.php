<?php
include 'navbar.php'; 
session_start();

// Se o carrinho ainda não existe, cria
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

// ------- ADICIONAR PRODUTO -------
if (isset($_GET['id']) && isset($_GET['nome']) && isset($_GET['preco']) && isset($_GET['img'])) {

    $produto = [
        "id" => intval($_GET['id']), // <-- adicionado ID do produto
        "nome" => $_GET['nome'],
        "preco" => floatval($_GET['preco']),
        "img" => $_GET['img']
    ];

    $_SESSION['carrinho'][] = $produto;
}

// ------- EXCLUIR PRODUTO -------
if (isset($_GET['excluir'])) {
    $id = $_GET['excluir'];

    if (isset($_SESSION['carrinho'][$id])) {
        unset($_SESSION['carrinho'][$id]);
        $_SESSION['carrinho'] = array_values($_SESSION['carrinho']); // reorganiza índices
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Carrinho</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-light">

    <div class="container py-5">
        <h2 class="text-center mb-4">🛒 Meu Carrinho</h2>

        <?php if (empty($_SESSION['carrinho'])): ?>
            <div class="alert alert-info text-center">Seu carrinho está vazio.</div>

        <?php else: ?>

            <table class="table table-bordered align-middle">
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Imagem</th>
                        <th>Preço</th>
                        <th>Ação</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $total = 0;

                    foreach ($_SESSION['carrinho'] as $index => $produto):
                        $total += $produto['preco'];
                    ?>
                    <tr>
                        <td><?= htmlspecialchars($produto['nome']) ?></td>

                        <td>
                            <img src="<?= $produto['img'] ?>" width="80">
                        </td>

                        <td>R$ <?= number_format($produto['preco'], 2, ',', '.') ?></td>

                        <td>
                            <a href="carrinho.php?excluir=<?= $index ?>" 
                            class="btn btn-danger btn-sm">
                                Excluir
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <h4 class="text-end mt-3">
                Total: <strong>R$ <?= number_format($total, 2, ',', '.') ?></strong>
            </h4>

            <div class="text-end mt-4">
                <a href="produtos.php" class="btn btn-secondary">Continuar Comprando</a>
                <a href="finalizar.php" class="btn btn-success">Finalizar Compra</a>
            </div>

        <?php endif; ?>
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

        </div>
    </footer>

</body>
</html>

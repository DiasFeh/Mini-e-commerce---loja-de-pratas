<?php
include 'navbar.php';
include 'conexao.php';

$result = $conn->query("
    SELECT p.id AS pedido_id, p.cliente_nome, p.cliente_telefone, pr.nome AS produto_nome, pr.preco, p.concluido
    FROM pedidos p
    INNER JOIN pedido_produto pp ON p.id = pp.pedido_id
    INNER JOIN produtos pr ON pp.produto_id = pr.id
    ORDER BY p.id DESC
");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Venda</title>
    <style>
        body{
            padding-top: 120px
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <h2 style="color: #735A4C;">Lista de Pedidos</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Pedido</th>
                    <th>Cliente</th>
                    <th>Telefone</th>
                    <th>Produto</th>
                    <th>Preço</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody><!-- Loop que percorre cada linha retornada pela consulta SQL -->
                <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['pedido_id'] ?></td><!-- htmlspecialchars evita XSS (ATAQUE DA HACK) e falhas de segurança -->
                    <td><?= htmlspecialchars($row['cliente_nome']) ?></td>
                    <td><?= htmlspecialchars($row['cliente_telefone']) ?></td>
                    <td><?= htmlspecialchars($row['produto_nome']) ?></td>
                    <td>R$ <?= number_format($row['preco'], 2, ',', '.') ?></td>  <!-- Formata o preço em formato BR (R$ 0,00) -->
                    <td>
                        <?php if ($row['concluido'] == 0): ?>
                            <a href="marcar_concluido.php?id=<?= $row['pedido_id'] ?>" class="btn btn-sm btn-primary">Concluir</a>
                        <?php else: ?>
                            <span class="badge bg-success">Concluído</span>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <footer class="bg-light text-dark py-4 mt-5">
        <div class="container text-center">
            <h5 class="fw-bold mb-3">NA•FER</h5>
            <p class="mb-3">Elegância que fala por você.</p>

            <div class="d-flex justify-content-center gap-4 mb-3">
                <a href="#" class="text-dark text-decoration-none">Quem Somos</a>
                <a href="#" class="text-dark text-decoration-none">Produtos</a>
                <a href="#" class="text-dark text-decoration-none">Contato</a>
            </div>

            <p class="small mb-0">© 2025 NA•FER — Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>

<?php
include 'navbar.php';
include 'conexao.php';

$result = $conn->query("
    SELECT p.id AS pedido_id, p.cliente_nome, p.cliente_telefone, pr.nome AS produto_nome, pr.preco
    FROM pedidos p
    INNER JOIN pedido_produto pp ON p.id = pp.pedido_id
    INNER JOIN produtos pr ON pp.produto_id = pr.id
    ORDER BY p.id DESC
");
?>

<div class="container py-5">
    <h2>Lista de Pedidos</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Pedido</th>
                <th>Cliente</th>
                <th>Telefone</th>
                <th>Produto</th>
                <th>Preço</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['pedido_id'] ?></td>
                <td><?= htmlspecialchars($row['cliente_nome']) ?></td>
                <td><?= htmlspecialchars($row['cliente_telefone']) ?></td>
                <td><?= htmlspecialchars($row['produto_nome']) ?></td>
                <td>R$ <?= number_format($row['preco'], 2, ',', '.') ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

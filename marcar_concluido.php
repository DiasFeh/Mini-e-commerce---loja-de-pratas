<?php
include 'conexao.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $conn->query("UPDATE pedidos SET concluido = 1 WHERE id = $id");
}

header("Location: listar.php"); // volta para a lista
exit;

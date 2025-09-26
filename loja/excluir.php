


<?php
require 'conexao.php';

// Confere se veio um id válido
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = (int) $_GET['id'];

    $sql = "DELETE FROM produtos WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        // Redireciona para lista depois de excluir
        header("Location: listar.php?msg=excluido");
        exit;
    } else {
        echo "❌ Erro ao excluir produto.";
    }
} else {
    echo "❌ ID inválido.";
}
?>

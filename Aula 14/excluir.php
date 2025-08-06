<?php

    require 'conexao.php';
    
    $id = 1;
    $sql = "DELETE FROM livro WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    
    if ($stmt->execute()) {
        echo "Produto excluído com sucesso!";
    }
    else {
        echo "Erro ao excluir produto.";
    }
?>
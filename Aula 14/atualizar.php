<?php

    require 'conexao.php';

    $autor = "Ana Vezzaro";
    $novoPreco = 89.99;
    
    $sql = "UPDATE livro SET preco = :preco WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':preco', $novoPreco);
    $stmt->bindParam(':id', $id);
    
    if ($stmt->execute()) {
        echo "Produto atualizado com sucesso!";
    }
    else {
        echo "Erro ao atualizar produto.";
    }
?>
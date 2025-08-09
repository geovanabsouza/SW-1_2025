<?php

    require 'conexao.php';

    $id = 1;
    $novoPreco = 89.99;
    
    $sql = "UPDATE livros SET preco = :preco WHERE id = :id";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':preco', $novoPreco);

    $stmt->bindParam(':id', $id);
    
    if ($stmt->execute()) {
        echo "Livro atualizado com sucesso!";
    }
    else {
        echo "Erro ao atualizar livro selecionado.";
    }
?>

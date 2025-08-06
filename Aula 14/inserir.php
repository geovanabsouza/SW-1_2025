<?php
     
    require 'conexao.php';

    $id = 1;
    $titulo = "As Aventuras de Poliana";
    $ano = "2000";
    $autor = "Jéssica Riba";
    $genero = "Aventura";
    $paginas = "236";
    $preco = 34.99;

    $sql = "INSERT INTO livro (id,titulo, ano, autor, genero, paginas, preco) VALUES (:id, :titulo, :ano, :autor, :genero, :paginas, :preco)";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':ano', $ano);
    $stmt->bindParam(':autor', $autor);
    $stmt->bindParam(':genero', $genero);
    $stmt->bindParam(':paginas', $paginas);
    $stmt->bindParam(':preco', $preco);
     
    if ($stmt->execute()) {
        echo "Produto inserido com sucesso! <br> <hr>";
     } 
    else {
        echo "Erro ao inserir produto.";
     }
     ?>
   //$titulo = "As Aventuras de Poliana";
    //$ano = 2000;
    //$autor = "Jéssica Riba";
    //$genero = "Aventura";
    //$paginas = 236;
    //$preco = 34.99;
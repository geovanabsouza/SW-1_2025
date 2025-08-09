<?php
     
    require 'conexao.php';

    $titulo = 1984;
    $ano = 1949;
    $autor = "George Orwell";
    $genero = "Distopia";
    $paginas = 328;
    $preco = 34.99;

    $sql = "INSERT INTO livros (titulo, ano, autor, genero, paginas, preco) VALUES (:titulo, :ano, :autor, :genero, :paginas, :preco)";
    $stmt = $pdo->prepare($sql);

    
    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':ano', $ano);
    $stmt->bindParam(':autor', $autor);
    $stmt->bindParam(':genero', $genero);
    $stmt->bindParam(':paginas', $paginas);
    $stmt->bindParam(':preco', $preco);
     
    if ($stmt->execute()) {
        echo "Livro inserido com sucesso! <br> <hr>";
     } 
    else {
        echo "Erro ao inserir o livro.";
     }
     ?>


    
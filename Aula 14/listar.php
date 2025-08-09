<?php
    require 'conexao.php';

    $sql = "SELECT * FROM livros";
    $stmt = $pdo->query($sql);

    while ($livros = $stmt->fetch(PDO::FETCH_ASSOC)) {
        //PDO::FETCH_ASSOC --> faz com que seja retornado um array associativo
        //que será relacionado a variável $produto. Os índices deste array
        //associativo serão os nomes dos campos da tabela do banco de dados
 
        echo "ID: " . $livros['id'] . "<br>";
        echo "Autor: " . $livros['autor'] . "<br>";
        echo "Titulo: " . $livros['titulo'] . "<br>";
        echo "Gênero: " . $livros['genero'] . "<br>";
        echo "Ano: " . $livros['ano'] . "<br>";
        echo "Páginas: " . $livros['paginas'] . "<br><br>";
    }
?>
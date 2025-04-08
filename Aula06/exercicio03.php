<?php
    $produtos = [
        ["categoria" => "limpeza",
        "nome" => "desinfetante",
        "preco" => "8.99"
    ],
    
    [
        "categoria" => "vestuario",
        "nome" => "vestido",
        "preco" => "50.00"
    ],
    [
        "categoria" => "alimento",
        "nome" => "arroz",
        "preco" => "26.00"
    ],
    [
        "categoria" => "higiene",
        "nome" => "escova de dente",
        "preco" => "12.10"
    ],
    [
        "categoria" => "eletronicos",
        "nome" => "fone de ouvido bluetooth",
        "preco" => "80.00"
    ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
    <style>
        table, td, th {
            border: 1px solid black;
            width: 30%;
        }

        .cabecalho{
            background-color: #B0C4DE;
        }

        .limpeza{
            background-color: 	#6495ED;
        }

        .higiene{
            background-color: 	#2E8B57;
        }

        .vestuario{
            background-color:	#00FFFF;
        }

        .eletronicos{
            background-color:	#20B2AA;
        }

        .alimento{
            background-color:	#00FF00;
        }

    </style>
</head>
<body>
    <h1>TABELA DE PRODUTOS</h1>

    <table>
        <tr>
            <th class= 'cabecalho'>Nome</th>
            <th class= 'cabecalho'>Categoria</th>
            <th class= 'cabecalho'>Preço</th>
        </tr>

        <?php foreach ($produtos as $tabela): 
            $classecategoria = ($tabela["categoria"]);
            ?>
            <tr class="<?= $classecategoria?>">
                <td ><?= $tabela ["nome"] ?></td>
                <td ><?= $tabela ["categoria"] ?></td>
                <td ><?= number_format ($tabela ["preco"], 2, ',', '.') ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
        
        

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
    <style>
        table, td, th{
            border: 1px solid black;
        }
    </style>
</head>
<body>

        <?php
        $linhas = 8;
        $colunas = 4;
        ?>

        <table>
        <tr>
            <?php
                for ($c = 1; $c <= $colunas; $c++) {
                    echo "<th> Coluna $c </th>";
                }
            ?>
        </tr>

        <?php
        for ($i = 1; $i <= $linhas; $i++){
            $cordefundo = ( $i % 2 == 0) ? '#836FFF' : '#D3D3D3';
            echo "<tr style = 'background-color: $cordefundo;'>";

            for ($j = 1; $j <= $colunas; $j++){
                echo "<td> Linha $i, Coluna $j </td>";
            }

        echo "</tr>";
        }
        ?>
        
    </table>
    
</body>
</html>
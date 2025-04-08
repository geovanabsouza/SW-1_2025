<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $linhas = $_POST["linhas"];
        $colunas = $_POST["colunas"];
        var_dump($linhas);


        echo "<h1> TABELA </h1>";
        echo "<table border='1'>";
        
        echo"<tr>";
        echo"<th></th>";

        $j = 1;
        while ($j <= $colunas){
            echo "<th> Coluna $j </th>";
            $j++;
        }
        echo"</tr>";

        
        $i = 1;
        while ($i <= $linhas){
            echo "<tr>";
            echo "<th> Linha $i </th>";

            $j = 1;
            while ($j <= $colunas){
                echo "<td> Linha $i, Coluna $j </td>";
                $j++;
            }
            echo "</tr>";
            $i++;
        }

    echo "</table>";
   }
?>


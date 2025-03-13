<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 03 - Exemplo do prof</title>
</head>
<body>
    <?php
        $nome = "Geovana";
    ?>

    <h1> AULA 02 - INTRODUTÓRIA DE PHP</h1>
    <h2> Prof. Anderson Vanin</h2>

    <p>Oi sou a Geovana</p>
    <?php
        echo "<p> Oi eu sou a Geovana </p>";
        echo "<p> Oi eu sou a $nome </p>";
        echo "<p> Oi eu sou a ".$nome." </p>";
    ?>
</body>
</html>
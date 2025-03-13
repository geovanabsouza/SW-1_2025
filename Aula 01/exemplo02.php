<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 02 - Perdido</title>
</head>
<body>
    <p>Bom dia, Vanessa!</p>
    <?php
        $nome = "Vanessa";
    ?>
    <?php
        echo "<p> Bom dia $nome </p>";
    ?>
    <?php
        echo "<p> Bom dia " . $nome . "</p>";
    ?>
</body>
</html>
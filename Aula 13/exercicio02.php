<?php

include_once 'aluno.class.php';

$aluno = new Aluno("Geovana de Brito Souza", 7, 9);

echo "Nome: " . $aluno->getNome() . "<br>";
echo "Média: " . $aluno->getMedia() . "<br>";
echo "Situação: " . $aluno->verificarSituacao();

?>

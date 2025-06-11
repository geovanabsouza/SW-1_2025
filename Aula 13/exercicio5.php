<?php
include_once 'funcionario.class.php';

$funcionario = new Funcionario("Maria Silva", 2500);

echo $funcionario->exibirInformacoes() . "<br>";

$funcionario->aumentarSalario(10);

echo $funcionario->exibirInformacoes() . "<br>";
?>

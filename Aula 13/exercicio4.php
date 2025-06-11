<?php
include_once 'livro.class.php';

$meuLivro = new Livro("1984", "George Orwell");

echo $meuLivro->exibirStatus() . "<br>";
echo $meuLivro->emprestar() . "<br>";
echo $meuLivro->exibirStatus() . "<br>";
echo $meuLivro->emprestar() . "<br>";
echo $meuLivro->devolver() . "<br>";
echo $meuLivro->exibirStatus() . "<br>";
?>



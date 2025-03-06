<?php
     $nome = $_GET ['nomeest'];
     $n1 = $_GET ['notaum'];
     $n2 = $_GET ['notadois'];
     $n3 = $_GET ['notatres'];

     if (($n1 || $n2 || $n3) != (> 10 || < 0) == FALSE){
        echo("Número Inválido.");
     }}else{
        $media = ($n1 + $n2 + $n3) / 3;
        echo("A média das suas notas é de: ". $media);
?>
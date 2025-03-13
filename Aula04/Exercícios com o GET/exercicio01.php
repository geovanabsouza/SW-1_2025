<?php
     $nome = $_GET ['nomeest'];
     $n1 = $_GET ['notaum'];
     $n2 = $_GET ['notadois'];
     $n3 = $_GET ['notatres'];

     $media = ($n1 + $n2 + $n3) / 3;

     if (is_numeric($n1) && is_numeric($n2) && is_numeric($n3) && ($n1<=10) && ($n2<=10) && ($n3<=10) ) {
      echo "$nome, sua média final é: $media";
  }
  
  else{
      echo "Insira apenas números de 0 a 10";
  }
  

     /*if ( (is_numeric ($n1 && $n2 && $n3)) && (($n1<10) && ($n2<10) && ($n3<10))) {
      echo ("Sua média é de ". $media);
     }
     else{
      echo("Inválido");
     }*/
?>
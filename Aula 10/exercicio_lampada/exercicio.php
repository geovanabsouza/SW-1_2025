<?php
     include_once 'lampada.class.php';

     //Objetos da classe Lampada:

     $lamp1 = new Lampada();
     $lamp2 = new Lampada();

     //var_dump($lamp1);
     //Primeiro objeto da classe Lampada ==> $lamp1
     
     $lamp1->Fabricante = "PHILIPS";
     $lamp1->Tensao = 110;
     $lamp1->Potencia = 50;
     $lamp1->Cor = "Branca";

     $lamp1->Ligar();
     $lamp1->MostrarDados();

     //Segundo objeto da classe Lampada ==> $lamp2

     $lamp2->Fabricante = "OSRAM";
     $lamp2->Tensao = 220;
     $lamp2->Potencia = 30;
     $lamp2->Cor = "Azul";

     $lamp2->Desligar();
     $lamp2->MostrarDados();

?>
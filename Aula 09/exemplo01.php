<?php
    include_once'Pessoa.class.php';

    // CRIAR UM OBJETO -INSTÂNCIA DA CLASSE PESSOA
    $fulano = new Pessoa ();
    $ciclano = new Pessoa ();

    //var_dump($fulano);

    // ATRIBUIR VALORES AOS ATRIBUTOS DO OBJETO CRIADO

    $fulano->Nome = "FULANO DA SILVA";
    $fulano->Peso = "90";
    $fulano->Altura = "1.82";

    $ciclano->Nome = "CICLANO DA SILVA";
    $ciclano->Peso = "60";
    $ciclano->Altura = "1.75";


    //CHAMANDO UM METODO DA CLASSE FULANO

    $fulano->MostrarDados();
    $fulano->Apresentar();

    $ciclano->MostrarDados();
    $ciclano->Apresentar();
?>
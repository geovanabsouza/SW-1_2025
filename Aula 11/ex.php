<?php

    include_once 'produto.class.php';

    $produto1 = new Produto ("Tênis", 321.99, 507);

    $produto1 ->adicionarEstoque (234);
    $produto1 ->removerEstoque (87);

    $produto1 -> mostrarDetalhes ();

?>
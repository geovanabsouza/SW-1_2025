<?php
    $login = $_POST ['log'];
    $senha = $_POST ['sen'];

    if (($login == "etec") && ($senha == "informática")){
        echo ("Logado com sucesso.");
    }
    else{
        echo ("Login e senha incorretos. Tente novamente.");
    }
?>
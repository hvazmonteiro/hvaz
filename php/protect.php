<?php

    date_default_timezone_set('America/Sao_Paulo');
    if(!isset($_SESSION)){
        session_start();
    }


    if(!isset($_SESSION['id'])){
        die("Você não pode acessar esta página por que não está logado.<p><a href=\"index.php\">Entrar</a></p>");
    }

?>
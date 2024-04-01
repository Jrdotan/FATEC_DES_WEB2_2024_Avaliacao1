<?php

/*header criada com o propósito de facilitar a checagem de login em todas as sessões
 além de não permitir que alguém não logado acesse outras paginas do programa */
 
session_start(); //inicia sessão

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
}

?> 


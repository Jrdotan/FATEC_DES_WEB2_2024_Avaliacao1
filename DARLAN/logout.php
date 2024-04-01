<?php

session_start(); 
 

$_SESSION = array(); //limpa variavéis
 

session_destroy(); //sessão explode
 

header("location: index.php");
exit;
?>
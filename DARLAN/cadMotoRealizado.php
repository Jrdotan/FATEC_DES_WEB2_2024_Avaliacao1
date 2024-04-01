<?php

include 'header.php'; //inclui header que checa se login foi executado

?>
<?php

 
 $nome = $_POST['Nome'];

 $ra =  $_POST['RA'];

 $placa = $_POST['Placa'];

 if(!empty($nome)  && !empty($ra) && !empty($placa))//se informações de usuário foram mencionadas, proceder para escrever informações pedidas
 {
    if(!file_exists('moto.txt')) //cria arquivo e registra informações se ele não existir
    {
        $Opn = fopen('moto.txt', 'w');
        fwrite($Opn, $nome . '|' . $ra . '|' . $placa . PHP_EOL);
        fclose($Opn);
        header("location: index.php");
        exit;
      
    }
   $Opn = fopen('moto.txt', 'a'); //escreve em arquivo existentes
   fwrite($Opn, $nome . '|' . $ra . '|' . $placa . PHP_EOL);
   fclose($Opn);
   header("location: index.php");
   
   
}
else{
    echo 'input inválido, tente novamente';
}
 
?>
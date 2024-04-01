<?php

include 'header.php'; //inclui header que checa se login foi executado

?>
<?php

 
 $nome = $_POST['Nome']; 

 $ra =  $_POST['RA']; 

 $placa = $_POST['Placa'];

 if(!empty($nome)  && !empty($ra) && !empty($placa)) //se informações de usuário foram mencionadas, proceder para escrever informações pedidas
 {
    if(!file_exists('carro.txt')) //cria arquivo e registra informações se ele não existir
    {
        $Opn = fopen('carro.txt', 'w');
        fwrite($Opn, $nome . '|' . $ra . '|' . $placa . PHP_EOL);
        fclose($Opn);
        header("location: index.php");
        exit;
      
    }
   $Opn = fopen('carro.txt', 'a'); //escreve em arquivo existente
   fwrite($Opn, $nome . '|' . $ra . '|' . $placa . PHP_EOL);
   fclose($Opn);
   header("location: index.php");
   
   
}
else{
    echo 'input inválido, tente novamente'
}
 
?>
<?php

include 'header.php'; //inclui header que checa se login foi executado

?>


<?php



$fileName = 'moto.txt'; //variavel que armazena arquivo de texto

if (file_exists($fileName)) //se arquivo existe, cria um vetor para armazenas os dados registrados no arquivo
{
  $ru = array(); 
  $Opn3 = fopen($fileName, 'r');

  if ($Opn3) {
    while (($line = fgets($Opn3)) !== false)
     {
      $formataDado = explode('|', trim($line)); // Separa as informações lidas dentro de um vetor, separando cada informação por um delimitador
      $ru[] = array(
        'nome' => $formataDado[0],
        'ra' => $formataDado[1],
        'placa' => $formataDado[2],
      );
    }
    fclose($Opn3); //fecha o arquivo e encerra modo leitura
  } else {
    echo 'arquivo não existe';
  }


  if (!empty($ru)) {
    echo '<h3>Motos cadastradas</h3>';
    echo '<ul>';
    foreach ($ru as $URSS) {
      echo '<li>' . $URSS['nome'] . ' - RA: ' . $URSS['ra'] . ' - Placa: ' . $URSS['placa'] . '</li>';
    }
    echo '</ul>';
  } else {
    echo '<p>Nenhuma moto cadastrada.</p>';
  }
} else {
  echo '<p>Cadê o arquivo? SUMIU.</p>';
}

?>

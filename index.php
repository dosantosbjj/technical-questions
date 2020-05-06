<?php

date_default_timezone_set('America/Sao_Paulo');
$dateUrl = 'https://www.php.net/manual/pt_BR/function.date.php';
$today = date('d/m/Y');

echo '<strong>Questão 1:</strong>';
echo '<br/>';
echo 'Informe abaixo qual a URL oficial para documentação da função date() no PHP.
      Logo abaixo da URL, indique como utilizar a função para mostrar a data de hoje no
      formato “Dia / Mês / Ano” com o Ano não resumido (4 dígitos):';
echo '<hr/>';
echo '<strong> Resposta </strong>: ';
echo "A url oficial da função date é: $dateUrl e a data formatada é: $today";
?>
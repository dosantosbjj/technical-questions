<?php

echo '<strong>Questão 2:</strong>';
echo '<br/>';
echo 'Em PHP, aplique as validações necessárias para que se garanta que as variáveis abaixo existam,
 tenham um valor e que estejam no tipo correto para ser utilizado:
 (Se desejar, pode encaminhar link para solução no GitHub, preferimos).';
echo '<br/>';
echo 'a) Validar a variável: $variavel = 198;';
echo '<br/>';
echo 'b) Validar o array e o indice “endereco":';
echo '<br/>';
echo '$variavel = [ “nome” => “Pedro Luiz”, “endereco” => “Av Taquara”, “telefone” => “(51) 5151-51511” ];<br/>';
echo 'c) Validar a variável: $variavel = “Romarinho” <hr/>';
echo '<strong> Resposta </strong>: <br/> ';
echo '<strong>a) </strong>';
$variavel = 198;
$tipo = gettype($variavel);
if(!isset($variavel)){
  echo "Variável não existe ou não possui valor setado...<br>"; 
  die; 
}else if($tipo !== 'integer'){
  echo "Variável existe mas o tipo não é inteiro";
  die;
}
  echo "Variável existe e o valor setado é $variavel do tipo $tipo; <br>";
  unset($variavel);
  unset($tipo);

echo '<strong> b) </strong>';

 $variavel = ["nome" => "Pedro Luiz",
              "endereco" => "Av Ipiranga",
             "telefone" => "(51)5151-51511"];
 $size = count($variavel);

  if(!$size > 0 && !isset($variavel['endereco'])){
    echo 'Campo sem valor... <br>';
  }
  $endereco = $variavel['endereco'];
  $tipo = gettype($variavel['endereco']);

    if($tipo !== 'string'){
      echo 'Tipo do valor inválido';
      die;
    }
    echo "Endereço foi preenchido com o valor $endereco do tipo $tipo <br>";
    unset($variavel);
    unset($endereco);
    unset($tipo);

echo '<strong>c)</strong>';

$variavel = "Romarinho";
$tipo = gettype($variavel);

if(!isset($variavel) || $tipo !== 'string'){
  echo 'Variável não foi setada ou não é do tipo string';
  die;
}
  echo "Variável foi setada com o valor $variavel do tipo $tipo.";
  unset($variavel);
  unset($tipo); 
?>
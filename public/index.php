<?php

use App\Classes\Usuario;

require('../vendor/autoload.php');


$usuario = new Usuario();

try{
  $usuario->preencherDados('Lucas','51981189706','Administrador');
}catch (Exception $e){
  echo 'Exceção capturada: ', $e->getMessage();
}finally{
  $usuario->cadastrar();
  echo "<strong>Nome:</strong> ". $usuario->getNome() . "<br>";
  echo "<strong>Telefone:</strong> " . $usuario->getTelefone() . "<br>";
  echo "<strong>Nível:</strong> " . $usuario->getNivel();
}
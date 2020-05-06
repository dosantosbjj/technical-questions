<?php

require('../vendor/autoload.php');

use App\Classes\Usuario;
$usuario = new Usuario();
$usuario->preencherDados('Admin','','');
var_dump($usuario->getNome());
// $usuario->cadastrar();



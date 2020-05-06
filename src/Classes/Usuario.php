<?php

namespace App\Classes;
use App\Classes\Permissao;
use App\Classes\Utils;
use Exception;

class Usuario extends Permissao{

  private $nome;
  private $telefone;
  private $data_cadastro;

  public function getNome()
  {
    return $this->nome;
  }

  public function getTelefone()
  {
    return $this->telefone;
  }

  public function getDataCadastro()
  {
    return $this->cadastro;
  }

  public function cadastrar()
  {
      $this->data_cadastro = date('d/m/Y');
  }

  public function preencherDados($nome, $telefone, $nivel)
  {
    if(Utils::isFieldSet($nome)){
      Utils::throwException('Informe um nome...');
    }
    $this->nome = $nome;
    
    
    if(Utils::isFieldSet($telefone)){
    Utils::throwException('Informe um telefone...');
    }
    $this->telefone = $telefone; 

    if(Utils::isFieldSet($nivel)){
      Utils::throwException('Informe um nível...');
    }
    $nivel = Usuario::setNivel($nivel);
  }
}

?>
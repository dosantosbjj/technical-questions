<?php
namespace App\Classes;

class Permissao
{
  private $nivel;

  public function getNivel()
  {
    return $this->nivel;
  }

  public function setNivel($nivel)
  {
    $this->nivel = $nivel;
    return $this;
  }
}


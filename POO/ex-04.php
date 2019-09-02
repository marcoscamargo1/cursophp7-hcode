<?php

class Endereco {
  private $logradouro;
  private $numero;
  private $cidade;

  public function __construct($log, $num, $cid)
  {
    $this->logradouro = $log;
    $this->numero = $num;
    $this->cidade = $cid;
  }
  /*
  public function __destruct()
  {
    var_dump("DESTRUIR");
  }
  */
  public function __toString()
  {
    return $this->logradouro.", ".$this->numero." - ".$this->cidade;
  }

  /*
  public function setLogradouro($logradouro) {
    $this->logradouro = $logradouro;
  }
  public function getLogradouro() {
    return $this->logradouro;
  }
  public function setNumero($numero) {
    $this->numero = $numero;
  }
  public function getNumero() {
    return $this->numero;
  }
  public function setCidade($cidade) {
    $this->cidade = $cidade;
  }
  public function getCidade() {
    return $this->cidade;
  }
  */
}
$casa = new Endereco("Rua Guarani", "246", "Campo Mourão");
//var_dump($casa);
//unset($casa);

//var_dump($casa->__toString());
echo $casa;

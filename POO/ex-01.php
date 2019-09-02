<?php
Class Pessoa {
  public $nome;
  public $idade;

  public function falar() {
    return "O meu nome é: " .$this->nome ." e a minha idade é " .$this->idade ." anos";    
  }  
}

$marcos = new Pessoa();
$marcos->nome = "Marcos Camargo";
$marcos->idade = 44;
echo $marcos->falar();
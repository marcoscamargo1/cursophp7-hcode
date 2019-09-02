<?php

require_once ("config.php");
use Cliente\Cadastro;
$cad = new Cadastro();

$cad->setNome("Marcos Camargo");
$cad->setEmail("marcoscamargo.cm@gmail.com");
$cad->setSenha("123456");

$cad->registrarVenda(); // classe cadastro cliente
//echo $cad->__toString();
//echo $cad; // vai invocar o __toString automaticamente
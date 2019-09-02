<?php
error_reporting(E_ALL & ~E_NOTICE);


$nome = $_GET["nome"];
echo $nome; // Notice: Undefined index: nome in C:\xampp\htdocs\HCODE\PHP-7\excecoes-try-catch\warning.php on line 3

// função para ignorar os erros notice : error_reporting(E_ALL & ~E_NOTICE)
// mostrar todos os erros, menos o Notice (~ está negando)
// sobrescreve configuração definida no php.ini

// o nome pode ser passado por parâmetro na url
// http://localhost/HCODE/PHP-7/excecoes-try-catch/warning.php
// ?nome=Marcos

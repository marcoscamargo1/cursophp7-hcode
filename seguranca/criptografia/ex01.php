<?php

// mcrypt
/* NÃO FUNCIONA MAIS NO PHP 7.3
$data = [
    "nome" => "Marcos"
];

define('SECRET', pack('a16', 'senha'));

$mcrypt = mcrypt_encrypt(
    MCRYPT_RIJNDAEL_128,
    SECRET,
    json_encode($data),
    MCRYPT_MODE_ECB
);

var_dump($mcrypt);

*/
// OPENSSL ENCRYPT
define('SECRET_IV', pack('a16', 'senha'));
define('SECRET', pack('a16', 'senha'));

$data = [
  "nome" => "Marcos"
];

$openssl = openssl_encrypt(
    json_encode($data),
    'AES-128-CBC',
    SECRET,
    0,
    SECRET_IV
);

echo $openssl;

// DECRYPT
$string = openssl_decrypt($openssl, 'AES-128-CBC', SECRET, 0, SECRET_IV);

var_dump(json_decode($string));



















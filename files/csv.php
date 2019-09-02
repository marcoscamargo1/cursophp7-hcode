<?php /** @noinspection ALL */
require_once ("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

//print_r($usuarios);

$headers = [];

foreach ($usuarios[0] as $key => $value) {
    array_push($headers, ucfirst($key)); //ucfirst() deixa primeira letra Maiúscula
}

//echo implode(",", $headers); // adiciona separador ,

// gravar em um arquivo como csv (grava os identificadores das colunas: id, nome, etc
$file = fopen("usuarios.csv", "w+");
fwrite($file, implode(",", $headers) . "\r\n");

// adicionar os dados
foreach ($usuarios as $row) { // Begin - foreach row
    $data = [];

    foreach ($row as $key => $value) { // Begin - foreach column

        array_push($data, $value);
    } // End - foreach column

    fwrite($file, implode(",", $data) . "\r\n");
} // End - foreach row
fclose($file);
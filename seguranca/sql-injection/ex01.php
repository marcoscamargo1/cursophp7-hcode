<?php

// exemplo usando mysqli

$id = (isset($_GET['id'])) ? $_GET['id'] : 5;

// evitar sql injection
// pedir sempre id numérico
// pode ser usado addslashes
// usar PDO com bind params

//if (!is_numeric($id)) exit("Não foi dessa vez!");
if (!is_numeric($id) || strlen($id) > 5) {

    exit("Não foi dessa vez!");

}

$conn = mysqli_connect("localhost", "root", "", "dbphp7");

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

while ($result = mysqli_fetch_object($exec)) {

    //echo $result->deslogin . "<br>";
    var_dump($result);

}

// exemplo de sql injection:
// aqui é para trazer apenas 1 registro: $sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";
// mas se digitarmos na url após o .php o seguinte: ?id=1 OR 1=1 --

/*
alterado
aluno
aluno
aluno3
alterado
aluno5
aluno5
aluno5
alterado
 */

// traz todos os resultados!!!
// e o var_dump mostra todos os dados, inclusive senha!
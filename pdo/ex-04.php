<?php
// futuramente usar try, catch
// CONEXÃO COM MYSQL - ATUALIZAR DADOS
$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root", "");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "marcelo";
$password = "12345F";
$id = 2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

// teste
echo "Dados atualizados com sucesso!";











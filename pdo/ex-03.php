<?php
// futuramente usar try, catch
// CONEXÃO COM MYSQL - INSERIR DADOS
$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root", "");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "marcos";
$password = "12345$";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

// teste
echo "Dados inseridos com sucesso!";











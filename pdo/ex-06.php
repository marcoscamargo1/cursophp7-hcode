<?php
// DELETAR DADOS COM PDO, USANDO MYSQL e TRANSAÇÕES
$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?"); // outra forma de passar parametros

$id = 2;

$stmt->execute(array($id));

//$conn->rollBack();
//echo "Exclusão cancelada pelo rollback!";

$conn->commit();
echo "Exclusão confirmada com o commit!";
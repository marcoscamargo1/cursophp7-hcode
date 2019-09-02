<?php

require_once ("config.php");
// buscar toda a tabela
/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);*/

// lista um usuário por id
/*$user = new Usuario();
$user->loadById(3);
echo $user;*/

// carrega uma lista de usuarios
/*$list = Usuario::getList(); // não precisa instanciar, método estático
echo json_encode($list);*/

// traz usuário(s) pesquisando por uma parte do nome(login)
/*$search = Usuario::search("m"); // se não achar, vem um array vazio
echo json_encode($search);*/

// busca usuarios autenticados
/*$user = new Usuario();
$user->login("marcos", "12345$");
echo $user;*/

// insert de dados usando procedure sp_usuarios_insert, usando construtor
/*$aluno = new Usuario("teste", "123456");
$aluno->insert();
echo $aluno;*/

// update dados
/*$usuario = new Usuario();
// primeiro tem que "carregar"
$usuario->loadById(8);
$usuario->update("alterado", "");
echo $usuario;*/

// deletar dados
/*$user = new Usuario();
$user->loadById(12);
$user->delete();
echo $user;*/

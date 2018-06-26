<?php
require_once("config.php");

// aula 62
//$sql = new Sql();
//$usuarios = $sql->select("select * from tb_usuarios");
//echo json_encode($usuarios);

// aula 63
// busca registro por ID
//$root = new Usuario();
//$root->buscaId(1);
//echo $root;

// aula 64
// lista todos os usuarios
//$lista = Usuario::lista();
//echo json_encode($lista);

// busca por login (nome)
//$busca = Usuario::busca("fin");
//echo json_encode($busca);

// faz login com usuario e senha
$usuario = new Usuario();
$usuario->login("renan","123456");
echo $usuario;
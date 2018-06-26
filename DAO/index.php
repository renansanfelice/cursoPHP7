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
//$usuario = new Usuario();
//$usuario->login("renan","123456");
//echo $usuario;

/*aula 65
// insert usuario novo

$aluno = new Usuario("aluno", "@lun0");

// ante do metodo construtor __construct
//$aluno->setLogin("juridico");
//$aluno->setSenha("a1b2c3d4");

$aluno->novo();
echo $aluno;
*/

//Aula 66
// update de um registro
/*
$usuario = new Usuario();

$usuario->buscaId(6);
$usuario->update("cobranca","rcs1357");

echo $usuario;
*/

//Aula 67
// update de um registro

$usuario = new Usuario();

$usuario->buscaId(4);
$usuario->delete();

echo $usuario;




<?php
require_once("config.php");

$root = new Usuario();
$root->buscaId(1);
echo $root;

// aula 62
//$sql = new Sql();
//$usuarios = $sql->select("select * from tb_usuarios");
//echo json_encode($usuarios);

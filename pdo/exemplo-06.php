<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

$conn->beginTransaction();

$stmt = $conn->prepare("update tb_usuarios set login = :LOGIN, senha = :SENHA WHERE id = :ID");

$id = 4;
$login = "financeiro";
$senha = "nao mudou";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":SENHA",$senha);
$stmt->bindParam(":ID", $id);

$stmt->execute();

//se deu certo
//$conn->commit();
//echo  "alterado com sucesso!";

// senao
$conn->rollback();
echo  "não foi alterado!";





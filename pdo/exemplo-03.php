<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

$stmt = $conn->prepare("insert into tb_usuarios (login, senha) values (:LOGIN, :SENHA)");

$login = "financeiro";
$senha = "102030";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":SENHA",$senha);

$stmt->execute();

echo  "incluido com sucesso!";


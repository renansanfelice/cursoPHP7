<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

$stmt = $conn->prepare("update tb_usuarios set login = :LOGIN, senha = :SENHA WHERE id = :ID");

$id = 3;
$login = "financeiro";
$senha = "112233";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":SENHA",$senha);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo  "alterado com sucesso!";


<?php

$conn = new mysqli("localhost","root","","dbphp7");

if ($conn->connect_error) {
    echo "Erro: ".$conn->connect_error;
}

$query = $conn->prepare("insert into tb_usuarios (login,senha) value (?,?)");

$query->bind_param("ss",$login,$senha);

$login = "renan";
$senha = "123456";

$query->execute();

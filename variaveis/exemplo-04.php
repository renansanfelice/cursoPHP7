<?php

$nome = $_GET["a"];
// http://localhost:8080/cursophp7/variaveis/exemplo-04.php?a="abc"
echo $nome;
echo "<br/>";

$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;

echo "<br/>";

$ip = $_SERVER["SCRIPT_NAME"];
echo $ip;







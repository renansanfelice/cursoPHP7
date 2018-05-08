<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Renan C Sanfelice");
$cad->setEmail("renan@emporiumdigital.net");
$cad->setSenha("102030");

$cad->registrarVenda();

?>


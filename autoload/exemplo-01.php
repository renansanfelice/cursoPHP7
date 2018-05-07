<?php

function __autoload($nomeClasse) {

    require_once("$nomeClasse.php");
}

$carro = new Sandero();
$carro->acelerar(80);

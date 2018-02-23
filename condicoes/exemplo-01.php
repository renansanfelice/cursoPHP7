<?php

$idade = 47;

$idadeCrianca = 12;
$idadeAdulto = 18;
$idadeMelhor = 65;

if ($idade < $idadeCrianca) {
    echo "é criança!";
} else if ($idade < $idadeAdulto) {
    echo "é adolescente!";
} else if ($idade < $idadeMelhor) {
    echo "é adulto";
} else {
    echo "é idoso";
}

echo "<br>";
echo ($idade = 47)?"minha idade":"não é minha idade";

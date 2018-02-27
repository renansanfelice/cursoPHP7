<?php

$meses = array(
    "JANEIRO","FEVEREIRO","MARÇO",
    "ABRIL","MAIO","JUNHO",
    "JULHO","AGOSTO","SETEMBRO",
    "OUTUBRO","NOVEMBRO","DEZEMBRO"
    );

foreach ($meses as $index => $mes) {
    $ii = $index + 1;
    echo "o mes ".$ii." é: ".$mes."<br>";
}
<?php

function ola($texto="Mundo", $periodo="Bom Dia") {
    return "Olá $texto $periodo <br>";
}

echo ola();
echo ola("Mundo!!!");
echo ola("Mundo!", "boa tarde.");

<?php

$frase = "Deus ajuda quem cedo madruga!";

$palavra = "cedo";

echo $frase;
echo "<br>";

$pos = strpos($frase, $palavra);
echo $pos;
echo "<br>";

$texto = substr($frase, 0, $pos);
echo $texto;
echo "<br>";

$texto2 = substr($frase, $pos + strlen($palavra), strlen($frase));
echo $texto2;
echo "<br>";

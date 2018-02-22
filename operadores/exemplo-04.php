<?php

$a = 35;
$b = 55;

var_dump($a > $b);
echo "<br>";

var_dump($a < $b);
echo "<br>";

var_dump($a == $b);   // comparacao de valores
echo "<br>";

var_dump($a === $b);   // comparacao de identidade
echo "<br>";

var_dump($a != $b);
echo "<br>";

var_dump($a !== $b);
echo "<br>";

///////   operador misto   se a for mario traz 1, se for igual traz 0 se b for maior traz -1
var_dump($a <=> $b);
echo "<br>";

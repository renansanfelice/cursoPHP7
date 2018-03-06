<?php

function soma(int ...$valores):string {

    return array_sum($valores);
}

echo soma(2,2);
echo "<br>";
echo soma(25,22);
echo "<br>";
echo soma(2,18,6);
echo "<br>";

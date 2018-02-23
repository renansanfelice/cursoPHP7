<?php

$empresa = "Emporium Digital";

$empresa = str_replace("o", "0",$empresa);
$empresa = str_replace("i", "1",$empresa);
$empresa =  str_replace("a", "@",$empresa);
$empresa = str_replace("g", "8",$empresa);

echo $empresa;



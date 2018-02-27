<?php

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'José',
    'idade' => 25
    ));

array_push($pessoas, array(
    'nome' => 'Renan',
    'idade' => 47
    ));

print_r($pessoas[1]['nome']);


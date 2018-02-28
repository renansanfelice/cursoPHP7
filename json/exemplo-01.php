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

echo json_encode($pessoas);

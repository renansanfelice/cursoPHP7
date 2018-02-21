<?php

$nome = "Renan C";
$sobreNome = "Sanfelice";
$nomeCompleto = $nome." ".$sobreNome;
echo $nomeCompleto;

//var_dump($nome);

echo "<br/>";
unset($nome);

if (isset($nome)) {
    echo $nome;
}

?>


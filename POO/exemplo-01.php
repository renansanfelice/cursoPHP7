<?php

class Pessoa {
    public $nome; //atributo

    public function falar() {
        return "o meu nome é ".$this->nome;
    } //metodo
}

$professor = new Pessoa();
$professor->nome = "Neti Sanfelice";
echo $professor->falar();

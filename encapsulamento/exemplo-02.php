<?php

class Pessoa {

    public $nome = "Rasmus Lerdorf";
    protected $idade = 47;
    private $senha = "123456";

    public function verDados(){

        // para ver qual classe ta mostrando
        echo get_class($this) . "<br/";

        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";
    }

}

class Programador extends Pessoa{


}

$objeto = new Programador();

//echo $objeto->nome . "<br/>";
//echo $objeto->idade . "<br/>";

$objeto->verDados();
<?php

// existem 9 metodos magicos __
class Endereco {

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c){

        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __destruct(){
        //var_dump("destruir");
    }

    public function __toString(){

        return $this->logradouro.", ".$this->numero." - ".$this->cidade;
    }
}

$endereco = new Endereco("rua abrao thome","1020","sjrp");
//var_dump($endereco);
echo ($endereco);

unset($endereco);

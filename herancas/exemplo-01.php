<?php

class Documento {

    private $numero;

    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($num){
        $this->numero = $num;
    }
}

class CPF extends Documento {

    public function validar():bool{
        $numeroCPF = $this->getNumero();

        // validar aki

        return true;
    }
}

$doc = new CPF();
$doc->setNumero("12345678910");
var_dump($doc->validar());

echo ($doc->getNumero());


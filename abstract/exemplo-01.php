<?php

interface Veiculo {
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo {

    public function acelerar($velocidade) {

        echo 'O veículo acelerou até '.$velocidade.' km/h';
    }

    public function frenar($velocidade) {

        echo 'O veículo frenou ao chegar na velocidade de '.$velocidade.' km/h';
    }

    public function trocarMarcha($marcha) {

        echo 'Mudar de marcha para '.$marcha;
    }
}

class Sandero extends Automovel {

    public function ligar(){


    }
}

$carro = new Sandero();
$carro->acelerar(100);

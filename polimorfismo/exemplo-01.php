<?php

abstract class Animal {

    public function falar() {

        return "som";
    }

    public function mover() {

        return "anda";
    }
}

class Cachorro extends Animal {

    public function falar() {

        return "late";
    }
}

class Gato extends Animal {

    public function falar() {

        return "mia";
    }
}
class Passaro extends Animal {

    public function falar() {

        return "pia";
    }
    public function mover() {

        return "voa e ".parent::mover();
    }
}

$pluto = new Cachorro();
echo "O Pluto ".$pluto->falar()."</br>";
echo "O Pluto ".$pluto->mover()."</br>";

$gato = new Gato();
echo "O gato ".$gato->falar()."</br>";
echo "O gato  ".$gato->mover()."</br>";

$piupiu = new Passaro();
echo "O passaro ".$piupiu->falar()."</br>";
echo "O passaro  ".$piupiu->mover()."</br>";



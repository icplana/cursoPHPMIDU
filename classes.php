<?php

    class SuperHero{
        //propiedades y metodos
        public $name;
        public $powers;
        public $planet;


        public function __construct($name)
        {
         #minuto 1:01:20   
        }


        public function attack() {
            return "$this->name ataca con sus poderes";
        }

        public function description() {
            return "
            $this->name es un superheroe que viene de 
            $this->planet y tiene los siguientes poderes $this->powers";
        }
    }


    $hero = new SuperHero();
    $hero->name = 'batman';
    $hero->powers = 'int, fuer, tecno';
    $hero->planet = 'gotham';
    echo $hero->powers;
    
?>
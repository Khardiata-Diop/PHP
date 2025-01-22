<?php
    require 'Character.class.php';
    class Warrior extends Character
    {
        private int $energy;
        public function __construct($name, $energy)
        {
            parent::__construct($name, 100, 12, 15, 11, rand(8,14));
        }
         public function getEnergy() : int
        {
            return $this->energy;
        }
        public function setEnergy() : void
        {
            $this->energy = $energy;
        }
        public function stab() : int 
        {
            return rand(0,1) * $agility;
        }
    }
?>
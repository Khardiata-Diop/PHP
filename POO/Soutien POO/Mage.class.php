<?php
    require 'Character.class.php';
    class Mage extends Character
    {
        private int $mana;
        public function __construct($name,$mana)
        {
            parent::__construct($name, 100, 10, 12, 15, rand(8,14));
        }
         public function getMana() : int
        {
            
        }
        public function setMana() : void
        {
            
        }
        public function cast() : int
        {
            return rand(0, 1) * $intelligence;
        }
    }
?>
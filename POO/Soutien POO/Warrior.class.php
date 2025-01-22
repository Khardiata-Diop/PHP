<?php
    require 'Character.class.php';
    class Warrior extends Character
    {
        private int $rage;
        public function __construct(private string $name)
        {
            parent::__construct($name, 150, 14, 12, 10, rand(8, 14));
        }
        public function getRage() : int
        {
            return $this->rage;
        }
        public function setRage() : void
        {
            $this->rage = $rage;
        }
        public function strike() : int
        {
            return rand(0, 1) * $strength;
        }
    }
?>
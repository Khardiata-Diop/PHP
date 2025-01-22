<?php
    require 'Weapon.php';
    class Character
    {
        private string $name;
        private Weapon $weapon;
        public function __construct( $name)
        {
            $this->weapon = new Weapon("", 0);
        }
        public function getName() : string
        {
            return $this->name;
        }
        public function setName() : string
        {
            $this->name = $name;
        }
        public function getWeapon() : string
        {
            return $this->weapon;
        }
        public function setWeapon() : string
        {
            $this->weapon = $weapon;
        }
        public function fight() : string
        {
            return $this->weapon->strike();
        }
    }
?>
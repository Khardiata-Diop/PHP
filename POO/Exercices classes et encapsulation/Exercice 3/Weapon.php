<?php
    class Weapon
    {
        private string $name;
        private int $damages;
        public function __construct(string $name,
        int $damages)
        {
            
        }
        public function getName() : string
        {
            return $this->name;
            
        }
        public function setName() : string
        {
            $this->name = $name;
        }
        public function getDamages() : int
        {
            return $this->damages;
        }
        public function setDamages() : int
        {
            $this->damages = $damages ;
        }
        public function strike() : string
        {
            return "Mais aïeuh ! </br>";
        }
    
    
    }
    
?>
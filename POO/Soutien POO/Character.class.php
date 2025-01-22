<?php
    abstract class Chapter
    {
        public function __construct(protected string $name, protected int $life, protected int $strength, protected int $agility, protected int $intelligence, protected int $charisma)
        {
            
        }
        public function getName() : string
        {
            return $this->name;
        }
        public function setName() : void
        {
            $this->name = $name;
        }
        public function getLife() : int
        {
            return $this->life;
        }
        public function setLife() : void
        {
            $this->life = $life;
        }
        public function getStrength() : int
        {
            return $this->strength;
        }
        public function setStrength() : void
        {
            $this->strength = $strength;
        }
        public function getAgility() : int
        {
            return $this->agility;
        }
        public function setAgility() : void
        {
            $this->agility = $agility;
        }
        public function getIntelligence() : int
        {
            return $this->intelligence;
        }
        public function setIntelligence() : void
        {
            $this->intelligence = $intelligence;
        }
        public function getCharisma() : int
        {
            return $this->charisma;
        }
        public function setCharisma() : void
        {
            $this->charisma = $charisma;
        }
        public function introduce() : string
        {
            return "Bonjour, je m'appelle $name";
        }
        public function takeDamages(int $damages)
        {
            $life = $life - $damages;
        }
    }
?>
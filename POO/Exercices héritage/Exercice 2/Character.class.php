<?php
    class Character
    {
        protected int $life;
        protected tring $name;
        public function __construct()
        {
            $this->life=$life;
            $this->name=$name;
        }
        public function getLife() : int
        {
            return $this->life;
        }
        public function setLife(int $life) : void
        {
            $this->life=$life;
        }
        public function getName() : string
        {
            return $this->name;
        }
        public function setName(string $name) : void
        {
            $this->name=$name;
        }
        public function introduce()
        {
            return "Bonjour je m'appelle " .$this->getName();
        }
        
        
        
    }
?>
<?php
    require 'Mage.class.php';
    require 'Rogue.class.php';
    require 'Warrior.class.php';
    class Story
    {
        private array $characters=[];
        private array $chapters=[];
        public function __construct()
        {
            
        }
        public function getCharacters() : array
            {
                return $this->characters;
            }
            public function setCharacters() : void
            {
                $this->characters = $characters;
            }
            public function getChapters() : array
            {
                return $this->chapters;
            }
            public function setChapters() : void
            {
                $this->chapters = $chapters;
            }
            public function addChapter(Chapter $chapter) : void
            {
                $chapters[] = $chapter;
            }
            public function removeChapter(Chapter $chapter): void
            {
                array_splice($chapters);
            }
            public function addCharacter(Character $character) : void
            {
                $characters[] = $character;
            }
            public function removeCharacter(Character $character): void
            {
                array_splice($characters);
            }
    }
?>
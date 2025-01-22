<?php
    require 'Character.class.php';
    class Chapter
    {
        public function __construct(private string $title, private string $content, private ? Chapter $nextChapter)
        {
            
        }
        public function getTitle() : string
        {
            return $this->title;
        }
        public function setTitle() : void
        {
            $this->title = $title;
        }
        public function getContent() : string
        {
            return $this->content;
        }
        public function setContent() : void
        {
            $this->content = $content;
        }
        public function getNextChapter() : ? Chapter
        {
            return $this->nextchapter;
        }
        public function setNextChapter() : void
        {
            $this->nextchapter= $nextChapter;
        }
    }
?>
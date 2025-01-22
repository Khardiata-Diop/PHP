
<?php
class Character 
{

    private int $id;
    private string $firstName = "Jane";
    private string $lastName = "Doe";


    public function __construct(int $id) 
    {
        $this->id = $id;
    }


    public function getId() : int 
    {
        return $this->id;
    }


    public function setId(int $id) : void 
    {
        $this->id = $id;
    }


    public function getFirstName() : string 
    {
        return $this->firstName;
    }


    public function setFirstName(string $firstName) : void 
    {
        $this->firstName = $firstName;
    }


    public function getLastName() : string 
    {
        return $this->lastName;
    }


    public function setLastName(string $lastName) : void 
    {
        $this->lastName = $lastName;
    }


    public function getFullName() : string 
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}
?>
﻿<?php
    class Character
    {
        private int $id;
        private string $firstName="Jane";
        private string $lastName="Doe";
        public function __construct(int $id)
        {
            
        }
        public function getId() : int
        {
            return $this->id;
        }
        public function setId($id) : int
        {
            $this->id = $id;
        }
        public function getFirstName() : string
        {
            return $this->firstName;
        }
        public function setFirstName(string $firstName) : string
        {
            $this->firstName = $firstName;
        }
        public function getLastName() : string
        {
            return $this->lastName;
        }
        public function setLastName(string $lastName)  : string
        {
            $this->lastName = $lastName;
        }
        public function getFullName() : string
        {
            return $this->firstName."</br>".$this->lastName;
        }
    }
?>

<?php
    class User
    {
        private ? int $id = null;
        
        public function __construct(private string $firstName, private string $lastName, private string $email)
        {
            $this->Firstname = $firstName;
        }
        public function getId() : ?int
        {
            return $this->int;
        }
        public function setId(?int $id) : void
        {
            $this->int = $id;
        }
        public function getFirstName() : string
        {
            return $this->string;
        }
        public function setFirstName(string $firstName) : void
        {
            $this->string = $firstName;
        }
        public function getLastName() : string
        {
            return $this->string;
        }
        public function setLastName(string $lastName) : void
        {
            $this->string = $lastName;
        }
        public function getEmail() : string
        {
            return $this->string;
        }
        public function setEmail(string $email) : void
        {
            $this->string = $email;
        }
        public function saveToDatabase(PDO $db): void
        {
            $req=$db->prepare("INSERT INTO users (first_name, last_name, email) VALUES (:first_name, :last_name, :email");
            $req->execute([
                ':first_name' => $this->firstName,
                ':last_name' => $this->lastName,
                ':email' => $this->email
                ]);
            $this->id = (int) $db->lastInsertId();
                
        }
    }
?>
<? php
    class User
    {
        
        public function __construct(private int $id, private string $username, private string $password)
    {

    }
    public function getInt()
    {
        return $this->int;
    }
    public function setInt()
    {
        $this->int = $int;
    }
     public function getUsername()
    {
        return $this->username;
    }
    public function setUsername()
    {
        $this->username = $username;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword()
    {
        $this->password = $password;
    }
    }
?>
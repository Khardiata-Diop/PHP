<?php 
    class Router
    {
        public function __construct()
    {
        
    } 
    
        public function handleRequest(array $get) : void
        {
            if(isset($get["route"]) && $get["route"] === "a-propos"){
                $prems = new UserController();
                $prems->about();
                
                
            } else if(! isset($get["route"])){
                $sec = new UserController();
                $sec->home();
                
                
            }else{
                $autre = new UserController();
                $autre->notFound();
            }
        }
    
    }
?>
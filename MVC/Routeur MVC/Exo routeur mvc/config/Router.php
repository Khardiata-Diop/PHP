<?php
    class Router
    {
        public function __construct()
        {
            
        }
        public function handleRequest(array $get) : void
        {
            if(isset($get["route"]) && $get["route"] === "a-propos"){
                $prems = new PageController();
                $prems->about();
                
                
            } else if(! isset($get["route"])){
                $sec = new PageController();
                $sec->home();
                
                
            }else{
                $autre = new PageController();
                $autre->notFound();
            }
        }
    }
?>
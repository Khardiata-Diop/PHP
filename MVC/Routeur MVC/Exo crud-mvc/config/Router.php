<?php 
    class Router
    {
        public function __construct()
    {
        
    } 
    
        public function handleRequest(array $get) : void
        {
            if(isset($get["route"]) && $get["route"] === "show_user"){
                $leshow = new UserController();
                $leshow->show();
                
                
            } else if($get["route"] === "create_user"){
                $lecreate = new UserController();
                $lecreate->create();
                
                
            }else if($get["route"] === "check_create_user"){
                $leCheckCreate = new UserController();
                $leCheckCreate->checkCreate();
            }else if($get["route"] === "update_user"){
                $leUpdateUser = new UserController();
                $leUpdateUser->update();
            }else if( $get["route"] === "check_update_user"){
                $leCkeckUpdate = new UserController();
                $leCkeckUpdate->checkUpdate();
            }else if($get["route"] === "delete_user"){
                $leDelete = new UserController();
                $leDelete->delete();
            }else{
                $autre = new UserController();
                $autre->list();
            }
            
        }
    
    }
?>
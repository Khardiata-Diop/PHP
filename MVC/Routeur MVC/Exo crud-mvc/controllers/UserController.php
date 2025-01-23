<?php
    class UserController
    {
        public function show() : void
        {
            $route = "show";
            require "templates/layout.phtml";
        }
         public function create () : void
        {
            $route = "create";
            require "ttemplates/layout.phtml";
        }
         public function checkCreate() : void
        {
            $route = "checkCreate";
            require "templates/layout.phtml";
        }
         public function update() : void
        {
            $route = "update";
            require "templates/layout.phtml";
        }
         public function checkUpdate() : void 
        {
            $route = "checkUpdate";
            require "templates/layout.phtml";
        }
         public function delete() : void
        {
            $route = "delete";
            require "templates/layout.phtml";
        }
         public function list() : void
        {
            $route = "list";
            require "templates/layout.phtml";
        }
         
         
        
    }
?>
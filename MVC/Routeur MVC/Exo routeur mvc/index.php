<?php
    require "config/autoload.php";
    $indice = new Router();
    $indice->handleRequest($_GET);
?>
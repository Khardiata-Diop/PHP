<?php
    require 'Character.php';
    $nvpers = new Character("Ragnar", new Weapon("Sword", 10));
    echo getName($nvpers);
    echo fight();
?>
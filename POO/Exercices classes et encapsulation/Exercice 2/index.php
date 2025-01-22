<?php
    require 'Character.php';
    $truc = new Character(1);
    echo $truc->getFullName(1);
    $truc->setFirstName('Sarah');
    $truc->setLastName('Connor');
    echo $truc->getFullName(1);
    
?>
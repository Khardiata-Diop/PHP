<?php
    require 'Character.class.php';
    require 'Warrior.class.php';
    require 'Mage.class.php';
    $personnage = new Character(9, "Khardiata");
    $guerrier = new Warrior(9, "Sikilli", 9999);
    $mage = new Mage(9, "Mikilli", 1970);
    //présentation et annonce du niveau de vie et d'énergie du Warrior :
    echo "<pre>";
    print_r("Voici" . $guerrier->getName() . "Il a " . $guerrier->getLife() . "vies" . "et" . $guerrier->getEnergy() . "points d'énergie.");
    echo "<pre>";
    //présentation et annonce du niveau de vie et d'énergie du MAge :
    echo "<pre>";
    print_r("Voici" . $mage->getName() . "Il a " . $mage->getLife() . "vies" . "et" . $mage->getEnergy() . "points d'énergie.");
    echo "<pre>";
?>
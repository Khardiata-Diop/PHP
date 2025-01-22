<?php
    require 'Story.class.php';
    require 'Mage.class.php';
    // instanciation de la classe Story
    $histoire = new Story();
    
    // Création de 2 Mages, 2 Warriors et 2 Rogues
    $merlin = new Mage("Merlin", 3);
    Story->addCharacter($merlin); // ajout du personnage à la Story
    $melusine = new Mage("Melusine", 5);
    Story->addCharacter($melusine); // ajout du personnage à la Story
    $xena = new Warrior("Xena", 30);
    Story->addCharacter($xena); // ajout du personnage à la Story
    $perceval = new Warrior("Perceval", 20);
    Story->addCharacter($perceval); // ajout du personnage à la Story
    $sikkili = new Rogue("Sikkili", 9);
    Story->addCharacter($sikkili); // ajout du personnage à la Story
    $mikkili = new Rogue("Mikkili", 9);
    Story->addCharacter($mikkili); // ajout du personnage à la Story
    
    // Création du premier chapitre de notre histoire
    $intro = new Chapter("Introduction", "Bonjour je m'appelle $name");
?>
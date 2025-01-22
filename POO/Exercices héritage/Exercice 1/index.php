<?php
    require 'Users.php';
    
    //1. Créez un lecteur et ajoutez deux livres à sa liste de favoris. 
    $email = "alloallo@gmail.com";
    $password = "TrUcNuCh£" ;
    $reader = new Reader($email, $password);
    $favBooks = $reader->addBookToFavorites("The art of war");
    $favBooks = $reader->addBookToFavorites("Alice in Wonderland");

    //2. Affichez la liste de ses livres favoris
    echo "Liste des livres favoris du lecteur après ajout : ";
    print_r($favBooks);
    
    
    //3. Retirez l'un des deux livres.
    $favBooks = $reader->removeBookFromFavorites("Alice in Wonderland");
    //4. Affichez la liste de ses livres favoris
    print_r($favBooks);
    //5. Affichez son email et son mot de passe sans modifier les classes.
    print_r($reader->login());

?>
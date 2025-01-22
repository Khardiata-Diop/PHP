<?php
    session_start();
    if(isset($pseudo)){
        echo "Bienvenue " . $pseudo;
    }
    else{
        echo "Bienvenue invité";
    }
?>
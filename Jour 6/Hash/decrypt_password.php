<?php
    $password = $_POST['password'];
    $hashedPassword = $_POST['hashedpassword'];
    
        $isPasswordCorrect = password_verify($password, $hashedPassword);
        
        if ($isPasswordCorrect === true)
        {
            echo "Mot de passe correct";
        }
        else
        {
            echo "Mot de passe erroné";
        }
    
?>
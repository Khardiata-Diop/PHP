<?php
    require 'User.php';
    require 'connexion.php';
    
    $superman = [
    "first_name" => "Clark",
    "last_name" => "Kent",
    "email" => "clark.kent@test.fr"
    ];
    
    $supaman = new User($superman["first_name"], $superman["last_name"], $superman["email"]);
    
    echo "<pre>";
    var_dump($supaman);
    echo "</pre>";
    
    // Exécute une requête pour récupérer le premier utilisateur
    $query = $db->prepare("SELECT * FROM users LIMIT 1");
    $parameters = [
    
    ];
    $query->execute($parameters);
    $result = query->fetch(PDO::FETCH_ASSOC);
    
    $user = new User($result["first_name"], $result["last_name"], $result["email"]);
    
    $user->setId
    if(isset($result))
    {
        // Crée une instance de User avec les données de la BDD
        $user = new User( $result['id'], $result['username']
        , ['password']);
        // Affiche les informations de l'utilisateur
        echo "Id:" . $user->getId() ."<br>";
        echo "Username:" . $user->getUsername() . "<br>";
        echo "Password" . $user->getPassword() . "<br>";
    } else {
        echo "Aucun utilisateur n'a été trouvé dans la base de données.";
    }
    
    $utilisateurs = [];
    $otherquery = $db->query("SELECT * FROM users");
    $otheresult = query->fetchAll(PDO::FETCH_ASSOC);
    foreach ($otheresult as $row) 
    {
        $utilisateurs[]= new User(
            $row['id'],
            $row['username'],
            $row['password']
            );
    } 
    if(!empty($utilisateurs)) {
        foreach($utilisateurs as $utilisateur) {
            echo "Id:" . $utilisateur->getId() . "<br>" ;
            echo "Username:" . $utilisateur->getUsername() . "<br>";
            echo "Password" . $utilisateur->getPassword() . "<br><br>";
        } else {
            echo "Aucun utlilisateur n'a été trouvé dans la base de données";
        }
    }
?>
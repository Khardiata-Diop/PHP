<?php
    require('connexion.php');
    $query = $db->prepare('SELECT  users.first_name, users.last_name, adress.street FROM users JOIN adress ON users.adress = adress.id');
    $parameters = [
        'id' => $_GET['id']
    ];
    $query->execute($parameters);
    $users = $query->fetch(PDO::FETCH_ASSOC);
    var_dump($users);
?>

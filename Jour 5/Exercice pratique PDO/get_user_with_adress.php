<?php
    require('connexion.php');
    $query = $db->prepare('SELECT  users.first_name, users.last_name, address.street FROM users JOIN address ON users.address = address.id WHERE users.id = :id');
    $parameters = [
        'id' => $_GET['id']
    ];
    $query->execute($parameters);
    $users = $query->fetch(PDO::FETCH_ASSOC);
    var_dump($users);
?>

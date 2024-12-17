<?php
    $users = [
        [
            "firstName" => "Hugues",
            "lastName" => "Froger"
        ],
        [
            "firstName" => "Mari",
            "lastName" => "Doucet"
        ]
    ];
    for($i=0; $i<count($users); $i++)
    {
        echo "Nom: {$users[$i]['firstName']}  prénom: {$users[$i]['lastName']} <br>";
    }
?>
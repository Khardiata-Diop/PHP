<?php
    require('connexion.php');
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $street = $_POST['street'] ?? null;
    $city = $_POST['city'] ?? null;
    $zipcode = $_POST['zipcode'] ?? null;

    // Validation des données
    if ($street && $city && $zipcode) {
        try {
            // Préparation de la requête SQL pour insérer les données
            $query = $db->prepare('INSERT INTO address (street, city, zipcode) VALUES (:street, :city, :zipcode)');
            $query->execute([
                'street' => $street,
                'city' => $city,
                'zipcode' => $zipcode
            ]);

            echo "Adresse ajoutée avec succès !";
        } catch (PDOException $e) {
            die('Erreur lors de l\'ajout de l\'adresse : ' . $e->getMessage());
        }
    } else {
        echo "Veuillez remplir tous les champs du formulaire.";
    }
}
?>
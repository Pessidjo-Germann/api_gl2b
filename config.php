<?php

// Configuration de la base de données
define('DB_HOST', 'localhost');
define('DB_NAME', 'iai_db');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

// Connexion à la base de données
try {
    $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
    // Pour afficher les erreurs de PDO
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
    exit;
}
?>

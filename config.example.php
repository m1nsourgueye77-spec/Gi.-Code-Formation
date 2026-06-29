<?php
// ====== Configuration de la base de données ======
$host = "localhost";   // NE PAS changer pour XAMPP
$user = "root";        // Utilisateur MySQL (par défaut root)
$pass = "";            // Mot de passe MySQL (par défaut vide sous XAMPP)
$db   = "elearning";   // Nom de ta base

// ====== Connexion ======
$conn = new mysqli($host, $user, $pass, $db);

// Vérification de la connexion
if ($conn->connect_error) {
    die("❌ Connexion échouée : " . $conn->connect_error);
}
?>

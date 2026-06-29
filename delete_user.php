<?php
include 'config.php';
$id = $_GET['id'] ?? 0;

if ($id > 0) {
    // Suppression sécurisée dans la table `users`
    $stmt = $conn->prepare("DELETE FROM users WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

// Retour au tableau de bord
header("Location: dashboard.php");
exit();
?>

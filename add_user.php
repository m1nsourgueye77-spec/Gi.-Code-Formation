<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $stmt = $conn->prepare("INSERT INTO elearning (name, email, login, password, role) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $login, $password, $role);
    $stmt->execute();
    $stmt->close();
    echo "Utilisateur ajouté ! <a href='dashboard.php'>Retour</a>";
    exit();
}
?>
<form method="POST">
Nom: <input type="text" name="name" required><br>
Email: <input type="email" name="email" required><br>
Login: <input type="text" name="login" required><br>
Mot de passe: <input type="text" name="password" required><br>
Rôle: <input type="text" name="role" value="user"><br>
<input type="submit" value="Ajouter">
</form>

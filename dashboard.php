<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.html");
    exit();
}
include 'config.php';

// Liste des utilisateurs (table `users`, pas la base `elearning`)
$result = $conn->query("SELECT * FROM users");
?>
<h2>Tableau de bord Admin</h2>
<a href="add_user.php">Ajouter un utilisateur</a><br><br>
<table border="1">
<tr><th>ID</th><th>Nom</th><th>Email</th><th>Login</th><th>Rôle</th><th>Action</th></tr>
<?php while($row = $result->fetch_assoc()) { ?>
<tr>
    <td><?= htmlspecialchars($row['id']) ?></td>
    <td><?= htmlspecialchars($row['name']) ?></td>
    <td><?= htmlspecialchars($row['email']) ?></td>
    <td><?= htmlspecialchars($row['login']) ?></td>
    <td><?= htmlspecialchars($row['role']) ?></td>
    <td><a href="delete_user.php?id=<?= urlencode($row['id']) ?>">Supprimer</a></td>
</tr>
<?php } ?>
</table>

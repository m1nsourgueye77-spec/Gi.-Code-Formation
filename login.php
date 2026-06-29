<?php
include 'config.php';

$login = $_POST['login'] ?? '';
$password = $_POST['password'] ?? '';

$stmt = $conn->prepare("SELECT * FROM elearning WHERE login=? AND password=?");
$stmt->bind_param("ss", $login, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    session_start();
    $_SESSION['login'] = $login;
    header("Location: dashboard.php");
} else {
    echo "Login ou mot de passe incorrect";
}

$stmt->close();
$conn->close();
?>

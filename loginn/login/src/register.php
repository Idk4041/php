<?php
$conn = require_once "partials/dbconnection.php";

$username = $_POST['username'];
$email    = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO user (username, password, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $password, $email);
$stmt->execute();
$stmt->close();

header("Location: password.html?registered=1");
exit();
?>
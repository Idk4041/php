<?php
session_start();
$conn = require_once "partials/dbconnection.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $stmt = $conn->prepare("SELECT * FROM user WHERE username = ? AND email = ?");
  $stmt->bind_param("ss", $_POST['name'], $_POST['email']);
  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_assoc();

  if ($row && password_verify($_POST['password'], $row['password'])) {
    $_SESSION['ingelogd'] = true;
    header("Location: overview.php");
    exit();
  } else {
    echo "Invalid credentials.";
  }
  $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <table>
    <tr>
      <th>Username</th>
      <th>Password</th>
      <th>Email</th>
    </tr>
    <?php
    $stmt = $conn->prepare("SELECT * FROM user");
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows === 0)
      exit('No rows');
    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td><a href='details.php?id=" . $row['username'] . "'>" . $row['username'] . "</a></td>";
      echo "<td>" . $row['password'] . "</td>";
      echo "<td>" . $row['email'] . "</td>";
      echo "</tr>";
    }
    echo "</table>";
    $stmt->close();
    ?>
</body>
</html>
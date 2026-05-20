<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Games; met SQL prepared statement en partial</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <?php
  $conn = require_once "partials/dbconnection.php";

  
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $conn->prepare("SELECT * FROM user WHERE username = ? AND email = ? AND password = ?");
    $stmt->bind_param("sss", $_POST['name'], $_POST['email'], $_POST['password']);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
      echo "Login successful!";
    } else {
      echo "Invalid credentials.";
    }
    $stmt->close();
  }
  ?>

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
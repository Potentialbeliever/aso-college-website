<?php
session_start();

$ADMIN_USER = "admin";
$ADMIN_PASS = "aso2025"; // CHANGE THIS

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if (
    $_POST["username"] === $ADMIN_USER &&
    $_POST["password"] === $ADMIN_PASS
  ) {
    $_SESSION["admin"] = true;
    header("Location: dashboard.php");
    exit;
  } else {
    $error = "Invalid login details";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>

<section>
<form method="POST">
  <h3>Admin Login</h3>

  <?php if(isset($error)) echo "<p style='color:red'>$error</p>"; ?>

  <label>Username</label>
  <input name="username" required>

  <label>Password</label>
  <input name="password" type="password" required>

  <button type="submit">Login</button>
</form>
</section>

</body>
</html>

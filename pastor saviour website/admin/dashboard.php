<?php
session_start();
if (!isset($_SESSION["admin"])) {
  header("Location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard – ASO College</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>

<!-- NAV -->
<nav>
  <div class="logo">
    <img src="../images/logo.png" alt="ASO College Logo">
  </div>
  <div class="nav-links">
    <a href="dashboard.php" class="active">Dashboard</a>
    <a href="upload-assignment.php">Upload Assignment</a>
    <a href="../assignments.php">View Assignments</a>
    <a href="logout.php">Logout</a>
  </div>
</nav>

<!-- MAIN -->
<section>
  <h2>Admin Dashboard</h2>
  <p>Welcome, Administrator 👋</p>

  <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(250px,1fr)); gap:20px; margin-top:30px;">

    <article>
      <h3>📤 Upload Assignment</h3>
      <p>Add new assignment PDFs for students.</p>
      <a href="upload-assignment.php" class="btn">Upload</a>
    </article>

    <article>
      <h3>📚 View Assignments</h3>
      <p>See all uploaded assignments.</p>
      <a href="../assignments.php" class="btn">View</a>
    </article>

    <article>
      <h3>👨‍🎓 Admissions</h3>
      <p>Review admission form submissions.</p>
      <a href="../admissions.html" class="btn">Open</a>
    </article>

    <article>
      <h3>🔒 Logout</h3>
      <p>End admin session securely.</p>
      <a href="logout.php" class="btn">Logout</a>
    </article>

  </div>
</section>

<footer>
  <p>© 2025 ASO College of Stewardship — Admin Panel</p>
</footer>

</body>
</html>

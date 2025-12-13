<?php
session_start();
if (!isset($_SESSION["admin"])) {
  header("Location: login.php");
  exit;
}

$message = "";

if (isset($_POST["upload"])) {
  $targetDir = "../images/gallery/";
  $fileName = time() . "_" . basename($_FILES["image"]["name"]);
  $targetFile = $targetDir . $fileName;

  $imageType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
  $allowed = ["jpg", "jpeg", "png", "webp"];

  if (!in_array($imageType, $allowed)) {
    $message = "Only JPG, PNG, WEBP allowed.";
  } elseif ($_FILES["image"]["size"] > 3000000) {
    $message = "Image too large (max 3MB).";
  } else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
      $message = "Image uploaded successfully!";
    } else {
      $message = "Upload failed.";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gallery Upload – Admin</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>

<nav>
  <div class="logo">
    <img src="../images/logo.png" alt="ASO College Logo">
  </div>
  <div class="nav-links">
    <a href="gallery-upload.php" class="active">Upload Gallery</a>
    <a href="../gallery.php">View Gallery</a>
    <a href="logout.php">Logout</a>
  </div>
</nav>

<section>
  <h2>Upload Gallery Image</h2>

  <?php if ($message): ?>
    <p style="color:green;font-weight:bold;"><?= $message ?></p>
  <?php endif; ?>

  <form method="POST" enctype="multipart/form-data">
    <label>Select Image</label>
    <input type="file" name="image" required>

    <button type="submit" name="upload">Upload Image</button>
  </form>
</section>

<footer>
  <p>© 2025 ASO College — Admin Gallery</p>
</footer>

</body>
</html>

<?php
session_start();
if (!isset($_SESSION["admin"])) {
  header("Location: login.php");
  exit;
}

$msg = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $dir = "../images/uploads/";
  if (!is_dir($dir)) mkdir($dir, 0755, true);

  $file = $dir . time() . "_" . basename($_FILES["image"]["name"]);
  $type = strtolower(pathinfo($file, PATHINFO_EXTENSION));

  if (!in_array($type, ["jpg","jpeg","png","webp"])) {
    $msg = "Invalid image type";
  } elseif (move_uploaded_file($_FILES["image"]["tmp_name"], $file)) {
    $msg = "Image uploaded successfully";
  } else {
    $msg = "Upload failed";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Upload Image</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>

<section>
<form method="POST" enctype="multipart/form-data">
  <h3>Upload Image</h3>
  <p style="color:green"><?= $msg ?></p>

  <input type="file" name="image" required>
  <button type="submit">Upload</button>
</form>
</section>

</body>
</html>

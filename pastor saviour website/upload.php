<?php
$targetDir = "images/uploads/";
$fileName = basename($_FILES["image"]["name"]);
$targetFile = $targetDir . time() . "_" . $fileName;

$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
$allowed = ["jpg", "jpeg", "png", "webp"];

if (!in_array($imageFileType, $allowed)) {
  die("Only JPG, PNG, WEBP allowed");
}

if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
  echo "Upload successful <br>";
  echo "<a href='gallery.html'>Go to Gallery</a>";
} else {
  echo "Upload failed";
}
?>

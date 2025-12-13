<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gallery – ASO College</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<nav>
  <div class="logo">
    <img src="images/logo.png" alt="ASO College Logo">
  </div>
  <div class="nav-links">
    <a href="index.html">Home</a>
    <a href="gallery.php" class="active">Gallery</a>
    <a href="contact.html">Contact</a>
  </div>
</nav>

<header class="hero small-hero">
  <h1>Gallery</h1>
  <p>Moments from ASO College</p>
</header>

<section>
  <div class="gallery-grid">
    <?php
      $dir = "images/gallery/";
      $images = glob($dir . "*.{jpg,jpeg,png,webp}", GLOB_BRACE);

      foreach ($images as $img) {
        echo "<img src='$img' alt='Gallery Image'>";
      }
    ?>
  </div>
</section>

<footer>
  <p>© 2025 ASO College of Stewardship</p>
</footer>

</body>
</html>

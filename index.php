<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>StreamIt - Home</title>
  <link rel="stylesheet" href="style.css" />
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: #f9f9f9;
    }
    header {
      background: #222;
      color: #fff;
      padding: 1rem;
      text-align: center;
    }
    nav a {
      color: #fff;
      margin: 0 1rem;
      text-decoration: none;
    }
    .upload-btn {
      display: inline-block;
      background: #ff6f61;
      padding: 0.5rem 1rem;
      margin: 1rem 0;
      border-radius: 8px;
      color: white;
      font-weight: bold;
      text-decoration: none;
    }
    .hero {
      text-align: center;
      padding: 3rem 1rem;
    }
    footer {
      text-align: center;
      padding: 1rem;
      background: #eee;
      color: #555;
    }
  </style>
</head>
<body>

  <header>
    <h1>🎬 StreamIt</h1>
    <nav>
      <a href="login.php">Login</a>
      <a href="register.php">Register</a>
      <a href="upload.php" class="upload-btn">Upload Your Video</a>
   <a href="php/my_videos.php">Videos</a>
 
</nav>
  </header>

  <main>
    <section class="hero">
      <h2>
        Welcome to StreamIt<?php if (isset($_SESSION['username'])) echo ', ' . htmlspecialchars($_SESSION['username']); ?>!
      </h2>
      <p>Upload. Share. Watch. Connect.</p>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 StreamIt. All rights reserved.</p>
  </footer>

</body>
</html>

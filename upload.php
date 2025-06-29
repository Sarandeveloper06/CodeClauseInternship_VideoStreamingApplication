<?php
include("php/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Upload Video - StreamIt</title>
  <link rel="stylesheet" href="css/style.css" />
  <style>
    .upload-container {
      max-width: 500px;
      margin: 3rem auto;
      background: #fff;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .upload-container h2 {
      text-align: center;
      margin-bottom: 1rem;
    }
    input[type="text"],
    select,
    input[type="file"] {
      width: 100%;
      padding: 0.75rem;
      margin: 0.5rem 0 1rem;
      border-radius: 6px;
      border: 1px solid #ccc;
    }
    button {
      width: 100%;
      padding: 0.75rem;
      background: #222;
      color: #fff;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }
    button:hover {
      background: #ff6f61;
    }
  </style>
</head>
<body>

  <div class="upload-container">
    <h2>Upload a New Video</h2>
    <form action="php/upload.php" method="POST" enctype="multipart/form-data">
      <input type="text" name="title" placeholder="Video Title" required />
      
      <label for="privacy">Privacy:</label>
      <select name="privacy" required>
        <option value="public">Public</option>
        <option value="private">Private</option>
      </select>
      
      <input type="file" name="video" accept="video/*" required />
      
      <button type="submit" name="upload">Upload Video</button>
    </form>
  </div>

</body>
</html>

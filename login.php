<?php
include("php/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - StreamIt</title>
  <link rel="stylesheet" href="css/style.css" />
  <style>
    .form-container {
      max-width: 400px;
      margin: 3rem auto;
      background: #fff;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .form-container h2 {
      text-align: center;
      margin-bottom: 1rem;
    }
    input[type="email"],
    input[type="password"] {
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

  <div class="form-container">
    <h2>Login to StreamIt</h2>
    <form action="php/login.php" method="POST">
      <input type="email" name="email" placeholder="Email" required />
      <input type="password" name="password" placeholder="Password" required />
      <button type="submit">Login</button>
    </form>
  </div>

</body>
</html>

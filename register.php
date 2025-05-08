<html lang="si">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>ලියාපදිංචි වන්න</h2>
  <form method="POST" action="register_process.php">
    <input type="text" name="name" placeholder="නම" required><br>
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="date" name="dob" required><br>
    <input type="text" name="address" placeholder="ලිපිනය" required><br>
    <input type="email" name="email" placeholder="ඊමේල් ලිපිනය" required><br>
    <input type="text" name="phone" placeholder="දුරකථන අංකය" required><br>
    <input type="password" name="password" placeholder="මුරපදය" required><br>
    <input type="password" name="confirm_password" placeholder="මුරපදය තහවුරු කරන්න" required><br>
    <button type="submit">Register</button>
  </form>
  <p><a href="index.php">පිවිසෙන්න</a></p>
</body>
</html>

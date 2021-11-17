<?php
session_start();
if(isset($_SESSION['zalogowano']) && $_SESSION['zalogowano'] == true){
  echo "zalogowany!";
  unset($_SESSION['zalogowano']);
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<title>Dealer samochodowy</title>
</head>
<body>
  <form action="log_script.php" method="post">
  <label for="email">Email:</label>
  <input type="text" name="email">
  <label for="password">Hasło:</label>
  <input type="text" name="password">
  <br>
  <input type="submit" value="Zaloguj się!">
  </form>
</body>
</html>

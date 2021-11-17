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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title>Dealer samochodowy</title>
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Komis samochodowy</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="index.php">Strona główna</a></li>
        <li><a href="#">Page 1</a></li>
        <li><a href="#">Page 2</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span>Rejestracja</a></li>
        <li class="active"><a href="log.php"><span class="glyphicon glyphicon-log-in"></span>Logowanie</a></li>
      </ul>
    </div>
  </nav>
  <h1>Logowanie</h1>
  <form action="log_script.php" method="post">
  <label for="email">Email:</label>
  <input type="email" name="email">
  <label for="password">Hasło:</label>
  <input type="password" name="password">
  <br>
  <input type="submit" value="Zaloguj się!">
  </form>
</body>
</html>

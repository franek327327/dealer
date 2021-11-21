<?php
session_start();
if(isset($_SESSION['reg']) && $_SESSION['reg'] == true){
  $_SESSION['reg'] = "Zarejestrowano!";
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
        <li class="active"><a href="reg.php"><span class="glyphicon glyphicon-user"></span>Rejestracja</a></li>
        <li><a href="log.php"><span class="glyphicon glyphicon-log-in"></span>Logowanie</a></li>
      </ul>
    </div>
  </nav>
  <h1>Rejestracja</h1>
  <form action="reg_script.php" method="post">
  <label for="input_email">Email:</label>
  <input type="email" name="input_email" value=<?php if(isset($_SESSION['email'])){echo '"'.$_SESSION['email'].'"';}?>>
  <label for="input_password">Hasło:</label>
  <input type="password" name="input_password">
  <label for="input_password_2">Powtórz hasło:</label>
  <input type="password" name="input_password_2">
  <br>
  <input type="submit" value="Zarejestruj się!">
  </form>
  <br>
  <?php
  if(isset($_SESSION['password_not_match']))
  {
    echo "<div class='alert alert-danger' role='alert'>".$_SESSION['password_not_match']."</div>";
    unset($_SESSION['password_not_match']);
  }
  if(isset($_SESSION['account_exists']))
  {
    echo "<div class='alert alert-danger' role='alert'>".$_SESSION['account_exists']."</div>";
    unset($_SESSION['account_exists']);
  }
  if(isset($_SESSION['empty_input']))
  {
    echo "<div class='alert alert-danger' role='alert'>".$_SESSION['empty_input']."</div>";
    unset($_SESSION['empty_input']);
  }
  ?>
</body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <title>Dealer samochodowy</title>
        <script src="app.js"></script>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  
  <link rel="stylesheet" href="flipster.min.css">

  
    </head>
    <body>
      <?php
        session_start();
        if(isset($_SESSION['account_created']))
          {
            echo "<div class='alert alert-success' role='alert'>".$_SESSION['account_created']."</div>";
            unset($_SESSION['account_created']);
          }
          if(isset($_SESSION['account']))
          {
            echo "<div class='alert alert-success' role='alert'>".$_SESSION['account']."</div>";
            unset($_SESSION['account']);
          }
     ?>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="#">Komis samochodowy</a>
              </div>
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Strona główna</a></li>
                <li><a href="#">Page 1</a></li>
                <li><a href="#">Page 2</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <?php
                 
                  if(isset($_SESSION['log']) && $_SESSION['log'] == true){
                    echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Wyloguj się</a></li>';
                  }else{
                    echo '<li><a href="reg.php"><span class="glyphicon glyphicon-user"></span>Rejestracja</a></li>
                    <li><a href="log.php"><span class="glyphicon glyphicon-log-in"></span>Logowanie</a></li>';
                  }
                  
                  
                ?>
              </ul>
            </div>
          </nav>
		  
<h1>Przykładowe oferty:</h1>
		  
		  <div class="my-flipster">
		  
          <?php
                $polaczenie = mysqli_connect("localhost", "root", "", "dealer");
                $zapytanie = "select model, rocznik, zdjecie from samochody";
                $wynik = mysqli_query($polaczenie, $zapytanie);
                if(mysqli_num_rows($wynik) > 0)
                {
                  echo "<ul>";
                  while($wiersz = mysqli_fetch_assoc($wynik)) 
                  {
                      echo "<li>
                      <img src='zdj/".$wiersz['zdjecie']."' width='700'>
                      <h2>".$wiersz['model']."</h2>
                      <p>".$wiersz['rocznik']."</p>
                      
                      </li>";
                  }
                  echo "</ul>";
                }
                mysqli_close($polaczenie);
          ?>
		  
		  
		  </div>
		  
		  <footer>
  <p>Author: </p>
  <p><a href="mailto:hege@example.com">hege@example.com</a></p>
</footer>
		  
		  <script src="jquery.min.js"></script>
		<script src="jquery.flipster.min.js"></script>
		<script>
			$('.my-flipster').flipster();
		</script>
		  
          </body>
          </html>
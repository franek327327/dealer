<!DOCTYPE html>
<html>
    <head>
        <title>Oferta</title>
        <script src="app.js"></script>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  
  <link rel="stylesheet" href="flipster.min.css">

  
    </head>
    <body>


        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="#">Komis samochodowy</a>
              </div>
              <ul class="nav navbar-nav">
                <li><a href="index.php">Strona główna</a></li>
                <li class="active"><a href="oferta.php">Oferta</a></li>
                <li><a href="#">Page 2</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <?php
                  session_start();
                  if(isset($_SESSION['zalogowano']) && $_SESSION['zalogowano'] == true){
                    echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Wyloguj się</a></li>';
                  }else{
                    echo '<li><a href="#"><span class="glyphicon glyphicon-user"></span>Rejestracja</a></li>
                    <li><a href="log.php"><span class="glyphicon glyphicon-log-in"></span>Logowanie</a></li>';
                  }
                ?>
              </ul>
            </div>
          </nav>

          <h1>Nasze samochody:</h1>

          <img src="zdj/1.jpg" width="700px">
          <img src="zdj/2.jpg" width="700px">
          <img src="zdj/3.jpg" width="700px">
          <img src="zdj/4.jpg" width="700px">
          <img src="zdj/5.jpg" width="700px">
          <img src="zdj/6.jpg" width="700px">
          <img src="zdj/7.jpg" width="700px">
          <img src="zdj/8.jpg" width="700px">
          <img src="zdj/9.jpg" width="700px">
          <img src="zdj/10.jpg" width="700px">
          <img src="zdj/11.jpg" width="700px">
          <img src="zdj/12.jpg" width="700px">
          <img src="zdj/13.jpg" width="700px">
          <img src="zdj/14.jpg" width="700px">
          <img src="zdj/15.jpg" width="700px">
          <img src="zdj/16.jpg" width="700px">
          <img src="zdj/17.jpg" width="700px">
          
  
		  <footer>
  <p>Author: Łukasz i Filip</p>
  <p><a href="mailto:hege@example.com">hege@example.com</a></p>
</footer>

                </body>
                </html>

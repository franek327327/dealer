<?php
session_start();
    if(isset($_POST['email']))
    {
        $polaczenie = mysqli_connect("localhost", "root", "", "dealer");
        $zapytanie = "select * from uzytkownicy where email = '".$_POST['email']."' and haslo = '".md5($_POST['password'])."'";
        $wynik = mysqli_query($polaczenie, $zapytanie);
        if(mysqli_num_rows($wynik) > 0)
        {
            while($wiersz = mysqli_fetch_assoc($wynik)) {
               
              }
             $_SESSION['zalogowano'] = true;
        }
        mysqli_close($polaczenie);
    }
    header("location:index.php");
?>
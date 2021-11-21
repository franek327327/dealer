<?php
session_start();
    if(isset($_POST['input_email']) && $_POST['input_email'] != '' && isset($_POST['input_password']) && $_POST['input_password'] != '' && isset($_POST['input_password_2']) && $_POST['input_password_2'] != '')
    {
        if($_POST['input_password'] == $_POST['input_password_2'])
        {
            $polaczenie = mysqli_connect("localhost", "root", "", "dealer");
            $zapytanie = "select * from uzytkownicy where email = '".$_POST['input_email']."'";
            $wynik = mysqli_query($polaczenie, $zapytanie);
            if(mysqli_num_rows($wynik) > 0)
            {
                mysqli_close($polaczenie);
                $_SESSION['account_exists'] = "Konto o podanym email'u już istnieje!";
                header("location:reg.php");
                return;
            }
            $zapytanie2 = "INSERT INTO uzytkownicy (id, email, haslo, rola) VALUES (NULL, '".$_POST['input_email']."', '".md5($_POST['input_password'])."', '0')";

            if (mysqli_query($polaczenie, $zapytanie2)) {
                $_SESSION['account_created'] = "Udało się utworzyć konto, możesz się teraz zalogować!";
                unset($_SESSION['email']);
                header("location:index.php");
                return;
              } else {
                $_SESSION['account_created'] = "Nie udało się utworzyć konta!";
                header("location:reg.php");
                return;
              }
            
        }else
        {
            $_SESSION['password_not_match'] = "Prosze wpisać takie same hasła!";
            $_SESSION['email'] = $_POST['input_email'];
            header("location:reg.php");
            return;
        }
    }else
    {
        $_SESSION['empty_input'] = "Proszę wypełnić wszystkie pola!";
        $_SESSION['email'] = $_POST['input_email'];
        header("location:reg.php");
        return;
    }
?>
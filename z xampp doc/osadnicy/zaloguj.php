<?php
    session_start();

    if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
    {
        header('Location: index.php');
        exit();
    }

    require_once "conect.php";
    //include / include_once- dolaczenie bibliotek
    //require / require_once

    // wczytanie wartosci ktore przychodza metoda POST
    $login=$_POST['login'];
    $haslo=$_POST['haslo'];

    $login=htmlentities($login,ENT_QUOTES,"UTF-8");
    $haslo=htmlentities($haslo,ENT_QUOTES,"UTF-8");


    $polaczenie = new mysqli($host,$db_user,$db_password,$db_name);
    //@ wycisza raportowanie bledow

    if($polaczenie->connect_errno!=0){
        echo "Error ".$polaczenie->connect_errno;
    }else{

        $login=$_POST['login'];
        $haslo=$_POST['haslo'];
        echo "It works";

        //zapytanie do bazy



       if($rezultat =@$polaczenie->query(sprintf("select * from uzytkownicy where user='%s' and pass='%s'",mysqli_real_escape_string($polaczenie,$login),mysqli_real_escape_string($haslo))))
       {
            $ilu_userow=$rezultat->num_rows;
            if($ilu_userow>0){

                $_SESSION['zalogowany']=true;

                $wiersz=$rezultat->fetch_assoc();

                //fetch przynies, aportuj tablica ze slownym indexem
                $_SESSION['id']=$wiersz['id'];

                $_SESSION['user'] = $wiersz['user'];
                $_SESSION['drewno']=$wiersz['drewno'];
                $_SESSION['kamien']=$wiersz['kamien'];
                $_SESSION['zboze']=$wiersz['zboze'];
                $_SESSION['email']=$wiersz['email'];
                $_SESSION['dnipremium']=$wiersz['dnipremium'];

                unset($_SESSION['blad']); //wyrzuca z sesji blad bo juz sie zalogowalismy


                $rezultat->free_result(); //usuwa niepotrzebne reazultaty z pamieci

               // echo $user;

                header('Location:gra.php'); //przekierowanie do pliku!


            }else{

                $_SESSION['blad']='<span style="color:red">Nieprawidlowy login lub haslo!</span>';

                    header('Location:index.php');

            }


       }


        $polaczenie->close();


    }


    // sprawdzenie czy wartosci sa odczytane poprawnie
  //  echo $login."<br>";
    //echo $haslo;


 ?>
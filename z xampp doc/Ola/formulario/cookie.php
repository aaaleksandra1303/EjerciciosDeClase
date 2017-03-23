<!DOCTYPE html>
<html>
<head>
    <title>cookie</title>
</head>
<body>
    <?php

    /*if(!$_COOKIE['naszastrona']=="1")
    {
         $contador=1;
         if(session_start())
        {
            $contador=$contador++;

        }
       setcookie('naszastrona',"1");
    }


        setcookie('aktywacja',1);

        if(isset($_COOKIE['aktywacja'])){

            $contador=$contador++;
            setcookie('aktywacja',$contador);

            echo "Ciasteczko istnieje";
        }
        else
            echo "Brak ciastecza o nazwie aktywacja";

         */

        if(isset(if($_COOKIE['contador'])){
             setcookie('contador',$_COOKIE['contador']+1);
             $mensaje = 'Numero de visitas ' .$_COOKIE['contador'];
         }
         else{
            setcookie('contador',1);
            $mensaje = "Bienvenido a la pagina web";
            }
    ?>


</body>
</html>
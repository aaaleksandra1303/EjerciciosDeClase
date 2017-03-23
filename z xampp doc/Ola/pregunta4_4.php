<!DOCTYPE html>
<html>
<head>
    <title>Pregunta 4.4 </title>
</head>
<body>
<?php
         $biblioteca=[
         "novela"=>["Janko muzykant"
                    ],
        "cine" =>[
            "El guion",
             "Hitchcock",],

        "programacion"=>[
             "Patterns",
            "Clean Code",
            "Refactoring"]


     ];

     echo "<ul>";

        foreach($biblioteca as $categoria => $books)
        {


            echo "<li>$categoria<ul>";


            foreach($books as $book){

                echo "<li>$book</li><br>";

            };
          echo  "</ul></li>";

        };
        echo "</ul>";


 ?>



</body>
</html>
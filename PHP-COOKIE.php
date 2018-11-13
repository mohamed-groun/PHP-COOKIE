
<html>

<head>
    <?php

    if(key_exists("name",$_COOKIE)) {
        echo " <link rel=\"stylesheet\"  href=\"special.css\"> ";
    }
    else{
          setcookie("name","h",time()+60);
        echo " <link rel=\"stylesheet\"  href=\"defaut.css\"> ";
    }


    ?>

</head>

<body class="background">
<p class="title">php cookie</p>
<p class="parag"> Écrire un script PHP qui crée une page HTML simple, avec un titre et un peu de texte.</p>


</body>

</html>

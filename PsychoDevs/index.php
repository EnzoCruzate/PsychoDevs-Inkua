<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css" />

    <!-- Hipervinculos a otras paginas -->
    <!--AwesomeFonts-->
    <script src="https://kit.fontawesome.com/823f508539.js" crossorigin="anonymous"></script>
    <!--AwesomeFonts-->
    <script src="https://kit.fontawesome.com/44a853ca4e.js" crossorigin="anónimo"></script>
    <!--GoogleFonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!--GoogleFonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!--Titulos-->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC&display=swap" rel="stylesheet">
    <!--Cuerpos-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!--Icono-->
    <link rel="icon" type="image/x-icon" href="img/Logo.png">


</head>


<body>

    <div class="content-home">

        <div class="button-test-home">
            <a href="test.php"><button class="button-home" ><span> Test </span></button></a>
        </div>

        <div class="text-home">
            <h1 class="text-home-frase"> "La variedad de personalidades individuales es la mayor fortuna del mundo." </h1>
        </div>

    </div>
    <header> 
       
        <nav class="nav-bar">
            <ul class="nav-ul nav-block">

                <div class="nav-left nav-block">
                    <img src="img/Logo.png">
                </div>
                
                <div class="nav-center nav-block">
                <h1 ><a href="index.php" class="titulo">Psycho Devs</a></h1>
                </div>
    
                <div class="nav-right nav-block">
                <li class="nav-link2"><a href="test.php">Test de Personalidad</a></li>
                </div>
                
            </ul>
        </nav>
    
    </header>


    <footer>

    
        <hr>
        <div class="box__copyright">
            <div class="box__footer copy">
                <div class="logo">
                    <img src="img/Logo.png">
                </div>
            </div>
            
            <p class="copy">Todos los derechos reservados © 2023</p>
            <b class="copy">PsychoDevs</b>
    
            <button id="btn-black" class="btn-neon-black">
                <i id="imagen1" class="fa-solid fa-moon" style="color: #7d1fa8;"></i>
                <i id="imagen2" class="fa-solid fa-sun" style="color: #e5a315;"></i>
            </button>
    
        </div>
        
        
    </footer>

    <script type="text/javascript" src="JavaScript/button_day_night.js"></script>
</body>

</html>





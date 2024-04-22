<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Popis mojej stránky">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Real Madrid</title>
</head>
<body>
    <header>
        <?php
        $file_path = "parts/nav.php";
        if(!include($file_path)) {
            echo"Failed to include $file_path";
        }
        ?>
    </header>
    <section class="domov">
        <!--Domovská stránka-->
        <h3>REAL MADRID CLUB DE FÚTBOL</h3>
        <p>
            Vitajte na oficiálnej webovej stránke Real Madrid Club de Fútbol. Real Madrid je jedným z najslávnejších a najúspešnejších futbalových klubov na svete.
        </p>
    
        <p>
            Klub bol založený v roku 1902 a od tej doby si získal mnoho fanúšikov svojimi úspechmi v domácich aj medzinárodných súťažiach.
        </p>
        <img class="logo-body" src="img/logo.webp" alt="Real Madrid C.F">
        <p>
            Real Madrid C.F.
        </p>
    </section>
    <div class="vysledky">
        <a href="https://www.flashscore.sk/tim/real-madrid/W8mj7MDD/" class="button">Výsledky a program</a>
    </div>
    <!--Footer-->
    <footer>
        <?php
          $file_path = "parts/footer.php";
           if(!include($file_path)) {
                echo"Failed to include $file_path";
                }
           ?>
    </footer>
</body>
</html>
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
    <!--formulár-->
    <div class="formular">
        <h3>KONTAKTUJTE NÁS</h3>
        <form id="myForm" method="post" action="db/spracovanieFormulara.php" onsubmit="validateForm(); return false;">
            <input type="text" placeholder="Vaše meno" name="meno" id="meno" required><br>
            <input type="email" placeholder="Váš email" name="email" id="email" required><br>
            <label for="spracovanie-suhlas">Súhlas so spracovaním osobných údajov:</label>
            <input type="checkbox" id="spracovanie-suhlas" name="spracovanieSuhlas" required><br>
            <textarea placeholder="Vaša správa" name="sprava" id="sprava" rows="5" cols="50" required></textarea><br>
            <input type="submit" value="Odoslať">
        </form>
    </div>

    <footer>
        <?php
        $file_path = "parts/footer.php";
        if(!include($file_path)) {
            echo"Failed to include $file_path";
        }
        ?>
    </footer>
    <script src="js/app.js"></script>  
</body>
</html>
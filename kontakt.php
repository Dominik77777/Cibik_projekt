<!DOCTYPE html>
<html lang="sk">
<head>
    <?php
    $file_path = "parts/header.php";
    if(!include($file_path)) {
        echo"Failed to include $file_path";
    }
    ?>
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
        <form id="myForm" onsubmit="validateForm(); return false;">
            <label for="meno">Meno:</label>
            <input type="text" id="meno" name="meno" required>
    
            <br>
    
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <br>
    
            <label for="spracovanie-suhlas">Súhlas so spracovaním osobných údajov:</label>
            <input type="checkbox" id="spracovanie-suhlas" name="spracovanieSuhlas" required>
    
            <br>
    
            <label for="sprava">Správa:</label>
            <textarea id="sprava" name="sprava" rows="4" cols="50" required></textarea>
    
            <br>
    
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
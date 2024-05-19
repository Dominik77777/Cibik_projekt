<?php
include_once "parts/header.php";
?>
<body>
<?php
include_once "parts/nav.php";
?>
    <!--formulár-->
    <div class="formular">
        <h3>KONTAKTUJTE NÁS</h3>
        <form id="myForm" method="post" action="db/spracovanieFormulara.php">
            <input type="text" placeholder="Vaše meno" name="meno" id="meno" required><br>
            <input type="email" placeholder="Váš email" name="email" id="email" required><br>
            <label for="spracovanie-suhlas">Súhlas so spracovaním osobných údajov:</label>
            <input type="checkbox" id="spracovanie-suhlas" name="spracovanieSuhlas" required><br>
            <textarea placeholder="Vaša správa" name="sprava" id="sprava" rows="5" cols="50" required></textarea><br>
            <input type="submit" value="Odoslať">
        </form>
    </div>

    <section class="qna">
        <h3>Q&A</h3>
    </section>
    <section class="otazkyodpovede">
        <?php
        include_once "classes/QnA.php";
        use formular\QnA;

        $qna = new QnA();
        $qna->getQna();
        ?>
    </section>
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
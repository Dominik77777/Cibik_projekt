<?php
include_once "parts/header.php";
?>
<body>
<?php
include_once "parts/nav.php";
?>
    <div class="row">
        <div class="form-container register-form">
            <h3 class="form-title">REGISTRÁCIA</h3>
            <form method="post" action="db/register.php" id="CreateAccount">
                <div class="form-group">
                    <label for="username">Používateľské meno:</label>
                    <input type="text" id="username" name="username" class="form-input">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="form-input">
                </div>
                <div class="form-group">
                    <label for="password">Heslo:</label>
                    <input type="password" id="password" name="password" class="form-input">
                </div>
                <button type="submit" class="form-button">Registrovať</button>
            </form>
            <p class="form-link register-link">Už máte účet? <a href="#Login" id="linkLogin">Prihlásiť sa</a></p>
        </div>
        <div class="form-container login-form">
            <h3 class="form-title">PRIHLÁSENIE</h3>
            <form method="post" action="db/login.php" id="Login">
                <div class="form-group">
                    <label for="username">Používateľské meno:</label>
                    <input type="text" id="email" name="email" class="form-input">
                </div>
                <div class="form-group">
                    <label for="password">Heslo:</label>
                    <input type="password" id="password" name="password" class="form-input">
                </div>
                <button type="submit" class="form-button">Prihlásiť</button>
            </form>
            <p class="form-link login-link">Nemáte účet? <a href="#CreateAccount" id="linkCreateAccount">Registrovať</a></p>
        </div>
    </div>
<footer>
    <?php
    include_once "parts/footer.php";
    ?>
</footer>
<script src="js/app.js"></script>
</body>

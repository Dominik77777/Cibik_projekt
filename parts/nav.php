<?php
include_once "functions.php";

$menu = getMenuData("header");
?>
<header>
    <nav>
        <div class="logo">
            <img src="img/logo.webp" alt="Real Madrid">
        </div>
        <div class="nadpis">Real Madrid</div>
        <ul class="sidebar">
            <?php printMenu($menu); ?>
        </ul>
    </nav>
</header>

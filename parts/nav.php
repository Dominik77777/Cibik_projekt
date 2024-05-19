<?php
error_reporting(E_ALL);
ini_set("display_errors","On");
include "classes/Menu.php";
$menuManager = new Menu();
?>
<header>
    <nav>
        <div class="logo">
            <a href="<?php echo (isset($menuManager->getMenuData("header")['home']['path'])) ?
                $menuManager->getMenuData("header")['home']['path'] : ''; ?>">
                <img src="img/logo.webp" alt="Real Madrid">
            </a>
        </div>
        <div class="nadpis">Real Madrid</div>
        <ul class="sidebar">
            <?php
            // Overenie validácie typu navigácie
            if ($menuManager->isValidMenuType("header")) {
                $menuData = $menuManager->getMenuData("header");
                $menuManager->printMenu($menuData);
            } else {
                echo "Neplatný typ menu";
            }
            $menuManager->printLoginRegister()
            ?>
        </ul>
    </nav>
</header>

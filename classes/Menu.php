<?php
error_reporting(E_ALL);
ini_set("display_errors","On");
class Menu{
    private array $validateMenuTypes = ["header", "footer"];

    public function isValidMenuType(string $type): bool{
        return in_array($type, $this->validateMenuTypes);
    }

    public function getMenuData(string $type): array {
        if (!$this->isValidMenuType($type)) {
            throw new InvalidArgumentException("Invalid menu type: $type");
        }
        $menuData = [
            "header" => [
                    'home' => [
                        'name' => 'DOMOV',
                        'path' => 'index.php',
                    ],
                    'historia' => [
                        'name' => 'HISTÓRIA',
                        'path' => 'história.php',
                    ],
                    'supiska' => [
                        'name' => 'SÚPISKA',
                        'path' => 'supiska.php',
                    ],
                    'uspechy' => [
                        'name' => 'ÚSPECHY',
                        'path' => 'úspechy.php',
                    ],
                    'kontakt' => [
                        'name' => 'KONTAKT',
                        'path' => 'kontakt.php',
                    ]
                ],
            ];
        return $menuData[$type];
    }

    function printMenu(array $menu): void {
        foreach ($menu as $menuName => $menuItem) {
            echo '<li><a href="' . $menuItem['path'] . '">' . $menuItem['name'] . '</a></li>';
        }
    }
    public function printLoginRegister(): void{
        session_start();
        if (isset($_SESSION['login'])) {
            echo '<li> <a href= db/logout.php >PRIHLÁSENÝ:' . $_SESSION['login'] . ' (' . $_SESSION['rola'] . ')'.'</a> </li> ';
        } else {
            echo '<li> <a href="/Projekt_SJ_RM/signin.php">PRIHLÁSIŤ REGISTROVAŤ</a> </li>';
        }
    }
}

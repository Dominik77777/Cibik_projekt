<?php
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
                    'domov' => [
                        'name' => 'DOMOV',
                        'path' => 'index.php',
                    ],
                    'história' => [
                        'name' => 'HISTÓRIA',
                        'path' => 'história.php',
                    ],
                    'supiska' => [
                        'name' => 'SÚPISKA',
                        'path' => 'supiska.php',
                    ],
                    'úspechy' => [
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
}

<?php
function validateMenuType(string $type): bool
{
    $menuTypes = [
        'header',
        'footer'
    ];
    if(in_array($type, $menuTypes)) {
        return true;
    } else {
        return false;
    }
}
function getMenuData(string $type): array {
    $menu = [];
    if (validateMenuType($type)) {
        if ($type === "header") {
            $menu = [
                'domov' => [
                    'name' => 'Domov',
                    'path' => 'index.php',
                ],
                'história' => [
                    'name' => 'História',
                    'path' => 'história.php',
                ],
                'supiska' => [
                    'name' => 'Súpiska',
                    'path' => 'supiska.php',
                ],
                'úspechy' => [
                    'name' => 'Úspechy',
                    'path' => 'úspechy.php',
                ],
                'kontakt' => [
                    'name' => 'Kontakt',
                    'path' => 'kontakt.php',
                ],
            ];
        }
    }
    return $menu;
}

function printMenu(array $menu){
    foreach ($menu as $menuName => $menuData) {
        echo '<li><a href="' . $menuData['path'].'">'.$menuData['name'].'</a></li>';
    }
}


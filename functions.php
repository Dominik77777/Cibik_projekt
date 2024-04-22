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



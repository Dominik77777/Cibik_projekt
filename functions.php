<?php
function validateMenuType(string $type): bool{
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
                'home' => [
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
function generateSlides($dir){
    $files = glob($dir . "/*.png");
    $json = file_get_contents("data/datas.json");
    $data = json_decode($json, true);
    $text = $data["text_banner"];

    foreach ($files as $file) {
        echo '<div class="slide fade">';
        echo '<img src="' . $file . '">';
        echo '<div class="slide-text">';

        echo($text[basename($file)]); //basename zistí názov
        echo '</div>';
        echo '</div>';
    }
    echo '<a id="prev" class="prev">❮</a>';
    echo '<a id="next" class="next">❯</a>';
}


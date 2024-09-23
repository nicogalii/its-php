<?php

$pagina = 'home';

if (isset($_GET['page']) && !empty($_GET['page'])) {
    $pagina = $_GET['page'];
}

switch ($pagina) {
    case 'gallery':
        $pagina = include './views/pages/gallery.php';
        break;

    default:
        $pagina = include './views/pages/home.php';
        break;
}

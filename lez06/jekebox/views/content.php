<?php

$pagina = 'home';

if (isset($_GET['page']) && !empty($_GET['page'])) {
    $pagina = $_GET['page'];
}

switch ($pagina) {
    case 'gallery':
        $pagina = include './views/pages/gallery.php';
        break;

    case 'solfuri':
        $solfuro = new Minerale();
        $solfuro->nome = "Solfuro";
        $solfuro->tipo = "Tipo sicuro";

        $bromo = new Minerale();
        $solfuro->nome = "Bromo";
        $solfuro->tipo = "Tipo nombre";

        echo $solfuro->stampaScheda();
        echo $bromo->stampaScheda();

        break;

    default:
        $pagina = include './views/pages/home.php';
        break;
}

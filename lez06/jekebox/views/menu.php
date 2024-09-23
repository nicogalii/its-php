<nav>

    <?php

    // $selected = isset($_GET['page']) ? $_GET['page'] : 'Home'; // Operatore ternario
    $selected = $_GET['page'] ?? 'home';


    foreach ($menu as $etichetta => $pagina) {

        <a href='{$link}' class='' title='Vai alla pagina {$etichetta}'>
    {$etichetta}
    </a>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      ;
    }
    ?>
</nav>
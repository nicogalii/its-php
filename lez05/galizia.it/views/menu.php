<nav>

    <?php

    // $selected = isset($_GET['page']) ? $_GET['page'] : 'Home'; // Operatore ternario
    $selected = $_GET['page'] ?? 'home';


    foreach ($menu as $posizione) {

        $etichetta = $posizione['etichetta'];
        $link = $posizione['collegamento'];

        $active = strtoupper($selected) == strtoupper($etichetta) ? 'active' : 'inactive';

        echo "<a href='{$link}' class='{$active}' title='Vai alla pagina {$etichetta}'>
    {$etichetta}
    </a>";
    }
    ?>
</nav>
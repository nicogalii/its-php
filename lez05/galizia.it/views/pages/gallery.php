<?php

// FIXME Sistemare e aggiungere i pezzi mancanti

$immagini = [
    "https://img.pokemondb.net/sprites/ruby-sapphire/normal/squirtle.png",
    "https://img.pokemondb.net/sprites/red-blue/normal/pikachu.png",
    "https://img.pokemondb.net/sprites/silver/normal/gengar.png"
];

if (!isset($_SESSION['$contatore']))
    $_SESSION['$contatore'] = 0;

// if (isset($_SESSION['$contatore'])) {
//     $contatore = $_SESSION['$contatore'];
// } else {
//     $_SESSION['$contatore'] = 0;
//     $contatore = $_SESSION['$contatore'];
// }


if (isset($_POST['azione'])) {
    if ($_POST['azione'] == 'incrementa')
        incrementa();

    if ($_POST['azione'] == 'decrementa')
        decrementa();
}

function incrementa()
{
    global $immagini;
    if ($_SESSION['$contatore'] >= count($immagini) - 1) {
        $_SESSION['$contatore'] = 0;
    }
    $_SESSION['$contatore']++;
}

function decrementa()
{
    $_SESSION['$contatore']--;
}

// incrementa();
// incrementa();
// incrementa();
// decrementa();
// incrementa();


?>

<form action="" method="post">
    <input type="hidden" name="azione" value="incrementa">
    <button>+</button>

    <input type="hidden" name="azione" value="decrementa">
    <button>-</button>

</form>

<h3><?= $_SESSION['$contatore'] ?></h3>
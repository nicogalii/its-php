<?php

$pokemon_pics = file("https://raw.githubusercontent.com/maboglia/ProgrammingResources/master/tabelle/games/pokemon_pics.csv");
$immagini = [
    "https://img.pokemondb.net/sprites/black-white/normal/kyogre.png",
    "https://img.pokemondb.net/sprites/black-white/normal/groudon.png",
    "https://img.pokemondb.net/sprites/black-white/normal/latias.png",
    "https://img.pokemondb.net/sprites/black-white/normal/latios.png"
];

$pokemon_array = [
    "nome" => "Bulbasaur",
    "img" => "http://------"
];
$pokemon_array_scalare = [];

foreach ($pokemon_pics as $riga) {
    $parole = explode(",", $riga);
    $pokemon_array_scalare[] = [$parole[0], $parole[1]];
}

if (!isset($_SESSION['$contatore'])) $_SESSION['$contatore'] = 0;

// if (isset($_SESSION['$contatore'])) {
//     //  $contatore = $_SESSION['$contatore'];
//     echo "sessione ok";
// } else {
//     // è la prima volta che
//     $_SESSION['$contatore'] = 0;
//     echo "sessione KO";
// }


if (isset($_POST["azione"])) {
    if ($_POST["azione"] == "incrementa") incrementa();

    if ($_POST["azione"] == "decrementa") decrementa();
}

function incrementa()
{
    global $pokemon_array_scalare;
    if ($_SESSION['$contatore'] >= count($pokemon_array_scalare) - 1) {
        $_SESSION['$contatore'] = 0;
    } else {

        $_SESSION['$contatore']++;
    }
}

function decrementa()
{
    if ($_SESSION['$contatore'] <= 0) {
        $_SESSION['$contatore'] = 0;
    } else {

        $_SESSION['$contatore']--;
    }
}

?>

<form action="" method="post">
    <input type="hidden" name="azione" value="incrementa">
    <button>+</button>
</form>
<form action="" method="post">
    <input type="hidden" name="azione" value="decrementa">
    <button>-</button>
</form>

<?php
$num = $_SESSION['$contatore'];
$foto = $pokemon_array_scalare[$num][0];
$fotoPokemon = $pokemon_array_scalare[$num][1];
?>


<h3><?= $fotoPokemon ?></h3>
<div class="fotocopertina">
    <img src="<?= $foto ?>" alt="" class="foto">
</div>
<?php

$cookie_name = 'last_visit';
$cookie_value = date('Y-m-d H:i:s');
$cookie_expire = time() + (86400 * 30);
$cookie_path = '/';

$last_visit_message = '';
if (isset($_COOKIE[$cookie_name])) {
    $last_visit_message = 'Bentornato!';
} else {
    $last_visit_message = 'Benvenuto!';
}
setcookie($cookie_name, $cookie_value, $cookie_expire, $cookie_path);

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Additional information about the document -->
    <meta name="description" content="" />
    <meta name="author" content="Nicolò Galizia" />
    <style>
        .cookie-consent {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #222;
            color: #fff;
            text-align: center;
            padding: 15px;
            display: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Gestione </h1>
        <h2><?= $last_visit_message ?></h2>


        <div class="cookie-consent" id="cookie-consent">
            Questo sito utilizza i cookie per migliorare la tua esperienza.
            <button id="accept"
                </div>
        </div>

</body>

</html>
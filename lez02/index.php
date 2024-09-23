<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Titolo</h1>

    <?php
    $testo = "<h2>";
    $testo .= "funziona";
    $testo = $testo . "<h2>";

    echo 'funziona';
    ?>

    <?php echo $testo ?>
    <?= $testo ?>

    <?php include 'script01.php' ?>

</body>

</html>
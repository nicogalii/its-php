<?php include("./config.php"); ?>

<h1>PAGINA SEGRETA</h1>


<form action="?" method="post">

    <input type="text" name="todo" placeholder="todo">
    <input type="submit" value="Add">
</form>

<ul>

    <?php foreach ($_SESSION['todolist'] as $todo) : ?>
        <li><?= $todo ?></li>
    <?php endforeach; ?>

</ul>
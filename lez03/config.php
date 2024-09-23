<?php
session_start();

if (!isset($_SESSION['loggato'])) {
    header('location:login.html');
}

if (!isset($_SESSION['todolist'])) {
    // $_SESSION['todolist'] = array();
    $_SESSION['todolist'] = [];
}

if (isset($_POST['todo'])) {
    $_SESSION['todolist'][] = $_POST['todo'];
}


function checkLogin($username, $password)
{
    if ($username == 'mauro' && $password == '12345') {
        $_SESSION['loggato'] = $username;
        // echo 'Benvenuto ' . $username;
        header('location:pagina_segreta.php');
    } else {

        header('location:login.html');
        // echo 'Mi dispiace non puoi entrare ' . $username;
    }
}

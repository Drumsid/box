<?php
session_start();
$name = 'admin';
$password = 'secret';

if (isset($_POST) && isset($_POST['submit'])) {

    $fieldName = $_POST['field']['name'];
    $fieldPassword = $_POST['field']['pass'];
    if ($fieldName == $name && $fieldPassword == $password) {
        // echo "Welcome!";
        $_SESSION['login'] = $fieldName;
        header('Location: index.php');
    } else {
        // echo "WrongPassword!";
        header('Location: index.php?login=wrong');
    }
}

if (isset($_POST) && isset($_POST['dellSession'])) {
    $_SESSION = [];
    session_destroy();
    header('Location: index.php');
}


echo "<pre>";
// print_r($_SESSION);
echo "</pre>";

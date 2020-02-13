<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AjaxForm</title>
</head>
<?php 

$name = 'admin';
$password = 'secret';

if (isset($_POST) && isset($_POST['submit'])) {
    
    $fieldName = $_POST['field']['name'];
    $fieldPassword = $_POST['field']['pass'];
    if ($fieldName == $name && $fieldPassword == $password) {
        echo "Welcome!";
        $_SESSION['login'] = $fieldName;
    } else {
        echo "WrongPassword!";
    }
}

if (isset($_POST) && isset($_POST['dellSession'])) {
    $_SESSION = [];
    session_destroy();
}

echo "<pre>";
// print_r($_SESSION);
echo "</pre>";
?>
<body>
<?php if ( ! $_SESSION['login']) : ?>
    <form action="<?php $_SERVER['REQUEST_URI']?>" class="ajaxForm" method="POST">
    <p>name</p>
        <input type="text" name="field[name]" value="<?= htmlspecialchars($_POST['field']['name'])?>"><br>
    <p>pass</p>
        <input type="password" name="field[pass]" value="<?= htmlspecialchars($_POST['field']['pass'])?>"><br>

        <input type="submit" name="submit" value="log in"><br>
    </form>
    <?php else : ?>
    <form action="<?php $_SERVER['REQUEST_URI']?>" method="POST">
        <input type="submit" name="dellSession" value="log out">
    </form>
    <?php endif; ?>
</body>
</html>
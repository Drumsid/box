<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AjaxForm</title>
    <style>
        .wrongLogin {
            color: red;
        }

        .welcomeGood {
            color: green;
        }
    </style>
</head>
<?php

// 2 вариант, но обработчик на той же строке
// $name = 'admin';
// $password = 'secret';

// if (isset($_POST) && isset($_POST['submit'])) {

//     $fieldName = $_POST['field']['name'];
//     $fieldPassword = $_POST['field']['pass'];
//     if ($fieldName == $name && $fieldPassword == $password) {
//         echo "Welcome!";
//         $_SESSION['login'] = $fieldName;
//         // header('Location: index.php');
//     } else {
//         echo "WrongPassword!";
//         // header('Location: index.php');
//     }
// }

// if (isset($_POST) && isset($_POST['dellSession'])) {
//     $_SESSION = [];
//     session_destroy();
// }

echo "<pre>";
// print_r($_POST);
echo "</pre>";
?>

<body>
    <div id="response"></div>
    <?php if (!$_SESSION['login']) : ?>
        <?php if ($_GET['login'] == 'wrong') : ?>
            <p class="wrongLogin">Wrong password or login!</p>
        <?php endif; ?>
        <form action="login.php" name="ourForm" class="ajaxForm" method="POST">
            <h3>Авторизация</h3>
            <p>name</p>
            <input type="text" name="field[name]" value="<?= htmlspecialchars($_POST['field']['name']) ?>" required><br>
            <p>password</p>
            <input type="password" name="field[pass]" value="<?= htmlspecialchars($_POST['field']['pass']) ?>" required><br>

            <input type="submit" class="sample2" name="submit" value="log in"><br>
        </form>
    <?php else : ?>
        <p class="welcomeGood">Welcome!</p>
        <form action="login.php" method="POST">
            <input type="submit" name="dellSession" value="log out">
        </form>
    <?php endif; ?>
</body>

</html>
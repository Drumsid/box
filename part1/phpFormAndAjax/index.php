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

// как вариант обработчик на той же строке
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
<?php if ( ! $_SESSION['login']) : ?>
    <?php if ($_GET['login'] == 'wrong') : ?>
        <p class = "wrongLogin" >Wrong password or login!</p>
    <?php endif; ?>
    <form action ="login.php" name = "ourForm" class="ajaxForm" method="POST">
        <h3>Авторизация</h3>
    <p>name</p>
        <input type="text" name="field[name]" value="<?= htmlspecialchars($_POST['field']['name'])?>" required ><br>
    <p>password</p>
        <input type="password" name="field[pass]" value="<?= htmlspecialchars($_POST['field']['pass'])?>" required ><br>

        <input type="submit" class = "sample2" name="submit" value="log in"><br>
    </form>
    <?php else : ?>
        <p class = "welcomeGood">Welcome!</p>
    <form action="login.php" method="POST">
        <input type="submit" name="dellSession" value="log out">
    </form>
    <?php endif; ?>
</body>
</html>



<script>
// $('.sample2').click( function() {

//     $.ajax({
//     type: 'POST',
//     url: 'login.php?action=sample2',
//     data: 'name=Andrew&nickname=Aramis',
//     success: function(data){
//         $('.results').html(data);
//     }
//     });

// });


// let servResponse = document.querySelector('#response');

// document.forms.ourForm.onsubmit = function (e) {
//     e.preventDefault();
//     let inputName = document.forms.ourForm.name.value;

//     let xhr = new XMLHttpRequest();

//     xhr.open('POST', 'index.php');
//     let formData = new FormData(document.forms.ourForm);
//     // xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

//     xhr.onreadystatechange = function() {
//         if(xhr.readyState === 4 && xhr.status === 200){
//             servResponse.textContent = xhr.responseText;
//         }
//     }

//     // xhr.send('name=' + inputName);
//     xhr.send(formData);
// };
</script>
<!-- <div class="results">Ждем ответа</div> -->
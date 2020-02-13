<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="styles.css" rel="stylesheet" />
<title>Project - ведение списков</title>
</head>

<body>

  <div class="header">
    	<div class="logo"><img src="i/logo.png" width="68" height="23" alt="Project" /></div>
        <div style="clear: both"></div>
    </div>
    
    	<table width="100%" border="0" cellspacing="0" cellpadding="0">
        	<tr>
            	<td class="left-collum-index">
				
					<h1>Возможности проекта —</h1>
					<p>Вести свои личные списки, например покупки в магазине, цели, задачи и многое другое. Делится списками с друзьями и просматривать списки друзей.</p>
					
				
				</td>
                <td class="right-collum-index">
					
					<div class="project-folders-menu">
						<ul class="project-folders-v">
						<li class="project-folders-v-active"><a href="?login=yes">Авторизация</a></li>
						<li><a href="?registr=yes">Регистрация</a></li>
						<li><a href="?passForget=yes">Забыли пароль?</a></li>
						</ul>
					<div style="clear: both;"></div>
					</div>
					<?php
					$login = 'admin';
					$password = 'secret';

					if (!empty($_POST) && isset($_POST['submit'])) {
						$inputLogin = $_POST['login'];
						$inputPassword = $_POST['password'];
						if ($inputLogin == $login && $inputPassword == $password) {
							require 'success.php';
						} else {
							echo 'STOP!';
						}
					}
					?>
					<div class="index-auth">
						<?php if($_GET['login'] == 'yes') : ?>
						<form method = "POST">
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="iat">
										Ваш e-mail: <br /> 
										<input id="login_id" type = "text" size="30" name="login" required >
									</td>
								</tr>
								<tr>
									<td class="iat">
										Ваш пароль: <br /> 
										<input id="password_id" type="password" size="30" name="password" required >
									</td>
								</tr>
								<tr>
									<td><input type="submit" name="submit" value="Войти" /></td>
								</tr>
							</table>
						</form>
						<?php endif;?>
						<?php if($_GET['registr'] == 'yes') : ?>
							<p>Регистрация</p>
						<?php endif;?>
						<?php if($_GET['passForget'] == 'yes') : ?>
						<p>Восстановить пароль</p>
						<?php endif;?>
					</div>

				</td>
            </tr>
        </table>
    
    <div class="footer">&copy;&nbsp;<nobr>2018</nobr> Project.</div>

</body>
</html>
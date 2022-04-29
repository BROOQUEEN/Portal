<?php
	session_start();

	if ($_SESSION['user']) {
		header('Location: main.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="img/favicon.png">
	<link rel="stylesheet" href="css/style.css">
	<title>Регистрация</title>
</head>
<body>
	

	<form class="box" action="/vendor/signup.php" method="post" enctype="multipart/form-data">
        <h1>Регистрация</h1>
		  <label>ФИО</label>
        <input type="text" name="full_name" placeholder="Введите свое имя">
		  <label>Логин</label>
		  <input type="text" name="login" placeholder="Введите свой логин">
		  <label>Почта</label>
		  <input type="email" name="email" placeholder="Введите свой email">
		  <label>Изображение профиля</label>
		  <input type="file" name="avatar">
		  <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
		  <label>Подтверждение</label>
		  <input type="password" name="password_confirm" placeholder="Повторите пароль">
        <input type="submit" name="" value="Регистрация">
		  <p class="login-text">У вас есть аккаунт? <a href="/index.php">авторизируйсеть</a></p>

			<?php
				if	($_SESSION['message']) {
					echo '<p class="msg">'  . $_SESSION['message'] .  '</p>';
					unset($_SESSION['message']);
				}
			?> 
		  

    </form>

</body>
</html>
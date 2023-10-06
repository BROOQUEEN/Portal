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
    <link rel="icon" href="img/favicon.png">
    <link rel="stylesheet" href="/css/style.css">
    <title>Авторизация</title>
</head>
<body>

    <!--  Форма авторизации  -->
    <form class="box" action="/vendor/signin.php" method="post">
        <div class="photo"></div>
        <h1>Авторизация</h1>
        <input type="text" name="login" placeholder="Имя пользователя">
        <input type="password" name="password" placeholder="Пароль">
        <input type="submit" name="" value="Войти">
        <p class="login-text">У вас нет аккаунта? <a href="/register.php">зарегестрируйтесь</a></p>

        <?php
			if($_SESSION['message']) {
				echo '<p class="msg">'  . $_SESSION['message'] .  '</p>';
				unset($_SESSION['message']);
			}
		?> 
    </form>
    <!--  / Форма авторизации  -->
    

        <!-- JQUERY -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

        <!-- AJAX -->
        <script>
            $.ajax({
                method: "POST",
                url: "some.php",
                data: { name: "John", location: "Boston" }
            })
            .done(function( msg ) {
                alert( "Data Saved: " + msg );
            });
        </script>
</body>
</html>


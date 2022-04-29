<?php
	session_start();
	require_once '../vendor/connect.php';

	if (!$_SESSION['user']) {
		header('Location: /');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="../img/favicon.png">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/main.css">
	<title>Сотрудники</title>
</head>

<body>
	
<!-- Шапка сайта -->
	<header>
		<div class="container">
			<div class="header">
				<a class="header_logo" href="main.php" alt="Перейти на главную страницу">Главная</a>
				
				
				<nav class="header_lists">
					<ul class="header_list">
						<li>
							
						</li>
					</ul>

					<a href="" class="header_list">Запросы</a>
					<a href="pages/sotrudniki.php" class="header_list">Сотрудники</a>
					<a href="" class="header_list">Обучение</a>
				</nav>
				

				<div class="header_profile">
					<div class="header_profile_img">
						<a href="profile.php"><img  src="<?= $_SESSION['user']['avatar'] ?>" alt=""></a>
					</div>
					<div class="header_profile_name">
						<div class="header_profile_full_name">Имя: <?= $_SESSION['user']['full_name'] ?></div>
						<div class="header_profile_login">Логин: <?= $_SESSION['user']['login'] ?></div>
						<a href="vendor/logout.php" class="header_profile_logout">Выход</a>
					</div>
					
				</div>
			</div>
		</div>
	</header>
<!-- / Шапка сайта -->










</body>
</html>
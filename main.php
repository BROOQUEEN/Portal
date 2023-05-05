<?php
    session_start();

    if (!$_SESSION['user']) {
        header('Location: /');
    }

	 require_once './vendor/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="img/favicon.png">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/modal.css">
	<link rel="stylesheet" href="css/tables.css">
	<link rel="stylesheet" href="css/profile.css">
	<script defer type="text/javascript" src="js/modal.js">
</script>
	<title>База данных</title>
</head>

<body>
	
<?php
	require_once "components/header.php";
?>
<main class="main">
	<!-- Модалка с профилем -->
<div class="section_profile section-profile-hide">
        <div class="profile_photo">
            <img  src="<?= $_SESSION['user']['avatar'] ?>" alt="">
        </div>
        <div class="profile_full_name">
            <p>Фио: <?= $_SESSION['user']['full_name'] ?></p>
        </div>
        <div class="profile_login">
            <p>Логин: <?= $_SESSION['user']['login'] ?></p>
            <p></p>
        </div>
        <div class="profile_email">
            <p>Почта: <?= $_SESSION['user']['email'] ?></p>
            <p></p>
        </div>
        <div class="profile_user_right">
            <p>Права:</p>
            <p></p>
        </div>
        <a class="profile_link">Изменить</a>
        <a class="profile_link blue" href="vendor/logout.php" class="logout">Выход</a>
</div>

	<!-- Модалка с профилем -->

<!-- Сегодняшняя дата -->
<div class="date">
<?php
  echo date("Сегодня d.m.Y");
?>
</div>
<div class="date">
	<?php
	  echo ("Версия v.1.1");
	?>
</div>
<!-- / Сегодняшняя дата -->



<!-- Все заметки -->
<section class="section-notes">
	<div class="notes__lists">
	<h2 class="notes__title">Все заметки</h2>
		<?php
		require 'connectionDB-to-do.php';

		echo "<ol>";
		$query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');
		while($row = $query->fetch(PDO::FETCH_OBJ)) {
			echo '<li><b>'.$row->task.'</b><a href="/delete-note.php?id='.$row->id.'"><button>X</button></a></li>';
		};
		echo "</ol>";
		?>
		<div class="add-todo-block">
		<h3 class="add-notes__title">Добавить дело</h3>
		<form action="/pages/add-note.php" method="post">
			<input class="add-notes__input" type="text" name="task" id="task" placeholder="Нужно сделать..." class="form-control">
			<button class="add-notes__button" type="submit" name="sendTask" class="btn btn-success">Отправить</button>
		</form>
		</div>
	</div>
	<div class="changes-block">
		<h2 class="changes-block__title">
			Список изменений
		</h2>
		<ul class="changes__lists">
			<li>1. Изменение 111</li>
			<li>2. Изменение 222</li>
			<li>3. Изменение 333</li>
		</ul>
	</div>
</section>

</main>
<!-- / Все заметки -->


</body>
</html>
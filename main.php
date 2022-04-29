<?php
    session_start();

    if (!$_SESSION['user']) {
        header('Location: /');
    }

	 require_once 'vendor/connect.php';
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
	<title>База данных</title>
</head>

<body>
	
<?php
	require_once "components/header.php";
?>

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
	<h3 class="notes__title">Все заметки</h3>
	<div class="notes__lists">
		<?php
		require 'connectionDB-to-do.php';

		echo "<ol>";
		$query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');
		while($row = $query->fetch(PDO::FETCH_OBJ)) {
			echo '<li><b>'.$row->task.'</b><a href="/delete-note.php?id='.$row->id.'"><button>X</button></a></li>';
		};
		echo "</ol>";
		?>
	</div>
</section>

<div class="container">
	<h2>Список дел</h2>
	<form action="/pages/add-note.php" method="post">
		<input type="text" name="task" id="task" placeholder="Нужно сделать..." class="form-control">
		<button type="submit" name="sendTask" class="btn btn-success">Отправить</button>
	</form>
	<a class="profile_link blue" href="/" class="logout">Главная страница</a>
</div>
<!-- / Все заметки -->


</body>
</html>
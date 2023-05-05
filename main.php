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


<!-- Сегодняшняя дата -->
<div class="date">
<?php
  echo date("Сегодня d.m.Y");
?>
</div>
<div class="date">
	<?php
	  echo ("Версия v.1.3");
	?>
</div>
<!-- / Сегодняшняя дата -->

<div class="container">

<!-- Все заметки -->
<section class="update">
	<h3 class="update__title">Обновления</h3>
	<ul class="update__lists">
		<?php
			$table_updates = mysqli_query($connect, "SELECT * FROM `updates`");
				while ($table = mysqli_fetch_assoc($table_updates)) {
					?>
						<li class="update__item">
							<div class="update__item-top">
								<p class="update__data"><?php echo $table['update_date'];?></p>
								<p class="update__text-title"><?php echo $table['update_title'];?></p>
							</div>
							<div class="update__item-bottom">
								<p class="update__text"><?php echo $table['update_text'];?></p>
							</div>
						</li>
					<?php
				}?>
	</ul>
<!-- / Все заметки -->

		<!-- <div class="add-todo-block">
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
	</div> -->
</section>
</div>
</main>
<!-- / Все заметки -->


</body>
</html>
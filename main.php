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
	<script defer type="text/javascript" src="js/functions.js">
</script>
	<title>База данных</title>
</head>

<body>
	
<?php
	require_once "components/header.php";
?>
<main class="main">
<div class="container">
	<?php
		require_once "pages/users.php";
	?>
</div>




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
	<button class="update__add" id="update__add">+</button>
	<h3 class="update__title">Обновления</h3>
	<ul class="update__lists">
		<?php
			$table_updates = mysqli_query($connect, "SELECT * FROM `updates`");
				while ($table = mysqli_fetch_assoc($table_updates)) {
					?>
						<li class="update__item">
							<div class="update__item-top">
								<p class="update__text-title"><?php echo $table['update_title'];?></p>
								<p class="update__data"><?php echo $table['update_date'];?></p>
							</div>
							<div class="update__item-bottom">
								<p class="update__text"><?php echo $table['update_text'];?></p>
							</div>
						</li>
					<?php
				}?>
	</ul>
<!-- / Все заметки -->

</section>
</div>

<section class="new-update" id="new-update">
	<div class="new-update__window">
		<p class="new-update__name">Название</p>
		<p class="new-update__text">Новые обновления подкатили</p>
		<button class="new-update__btn-close" id="new-update__btn-close">X</button>
	</div>
	<div class="overlay"></div>
</section>
<style>
	.new-update {
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		color: black;
		font-size: 24px;
		display: flex;
		align-items: center;
		justify-content: center;
		display: none;
	}
	.new-update__window {
		position: relative;
		padding: 30px;
		z-index: 2;
		width: 550px;
		border-radius: 10px;
		background-color: white;
		box-shadow: 0 10px 15px rgba(0,0,0 .4);
	}
	.new-update__name {
	}
	.new-update__text {
	}
	.new-update .overlay {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background-color: #000;
		opacity: 0.7;
		z-index: 0;
	}
	.new-update__btn-close {
		width: 30px;
		height: 30px;
		display: flex;
		align-items: center;
		justify-content: center;
		font-size: 20px;
		border-radius: 100%;
		position: absolute;
		top: 10px;
		right: 10px;
		cursor: pointer;
		opacity: 0.7;
	}
	.new-update__btn-close:hover {
		opacity: 1;
	}
</style>


</main>



</body>
</html>
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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="/css/profile.css">    
    <title>Заметки</title>
</head>
<body>
    
<?php
	require_once "../components/header.php";
?>
  
  <div class="container">
      <h2>Список дел</h2>
      <form action="add-note.php" method="post">
          <input type="text" name="task" id="task" placeholder="Нужно сделать..." class="form-control">
          <button type="submit" name="sendTask" class="btn btn-success">Отправить</button>
      </form>
      <a class="profile_link blue" href="/" class="logout">Главная страница</a>
  </div>

</body>
</html>
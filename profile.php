<?php
    session_start();

    if (!$_SESSION['user']) {
        header('Location: /');
    }

    // Обновлнение информации профиля ! ! !

    $query = "UPDATE users"



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/favicon.png">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/profile.css">
    <title>Авторизация</title>
</head>
<body>
    

    <!-- Секция Профиль -->
    <section class="section_profile">
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
        <a class="profile_link" href="\">Главная страница</a>
        <a class="profile_link" href="profile-edit.php">Изменить</a>
        <a class="profile_link blue" href="vendor/logout.php" class="logout">Выход</a>

    </section>
    <!-- / Секция Профиль -->

    <!-- Новости -->
    <!-- / Новости -->





</body>
</html>


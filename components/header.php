<header>
    <div class="container">
        <div class="header" id="header">
            <a class="header_logo" href="main.php" alt="Перейти на главную страницу">Главная</a>
            
            
            <nav class="header_lists">
                <a href="pages/notes.php" class="header_list">Заметки</a>
                <button href="" class="header_list" id="open-modal-read">Сотрудники</button>
                <button href="" class="header_list" id="open-modal-update">Редактировать</button>
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
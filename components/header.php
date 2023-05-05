<header class="header" id="header">
    <div class="container">
        <div class="header__content">
            <a class="header__logo" href="main.php" alt="Перейти на главную страницу">Главная</a>
            
            <nav class="header__navigation">
                <ul class="header__lists">
                    <li class="header__item"><a href="./pages/notes.php" class="header__link">Заметки</a></li>
                    <li class="header__item"><a href="" class="header__link">Обновления</a></li>
                    <li class="header__item"><a href="" class="header__link">Редактировать</a></li>
                </ul>
            </nav>
            

            <div class="header_profile">
                <div class="header_profile_img">
                    <a href="#"><img  src="<?= $_SESSION['user']['avatar'] ?>" alt=""></a>
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

	<!-- Модалка с профилем -->
    <section class="section_profile section-profile-hide">
        <div class="profile__container">
            <div class="section__content">

            
            <div class="profile-block__left">
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
            
            <div class="profile-block__right">
                <p class="test">
                    ghfg
                </p>
                
            </div>
         </div>
        </div>
    </section>

	<!-- Модалка с профилем -->
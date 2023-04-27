<? session_start();?>
<!-- session_start(); для использования в коде сессии -->

<nav class=" wrapper align-items-center navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="/img/logo.png" width="200" height="50" alt="ГОСКЛИН" loading="lazy">
        </a>
        <a class="navbar-brand" href="/index.php">Клининговая компания</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav ">
                <li class="nav-item <?php if ($current_page=="home") {echo "active"; }?>">
                    <a class="nav-link" href="<?php echo "http://gosclean.ru";?>/index.php">Гавная</a>
                </li>
                <li class="nav-item <?php if ($current_page=="catalog") {echo "active"; }?>">
                    <a class="nav-link" href="<?php echo "http://gosclean.ru";?>/catalog.php">Услуги и цены</a>
                </li>
                <li class="nav-item <?php if ($current_page=="about") {echo "active"; }?>">
                    <a class="nav-link" href="<?php echo "http://gosclean.ru";?>/about.php">Контакты</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/catalog.php" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Стати
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="flex-box header-user">
        <div class="flex-box align-items-center margin-left-30">
            <div class="header-account header-icon"></div>

            <?php if (isset($_COOKIE['user_id'])) { ?>

                Привет, <?= (new User($_COOKIE['user_id']))->login() ?> (<a class="header-user-out" href="/system/controllers/users/logout.php">Выйти</a>)

            <?php } else { ?>
                <a href="/auth/index.php">Войти</a>
            <?php } ?>

        </div>
        <div class="flex-box align-items-center margin-left-30">
            <div class="header-basket header-icon "></div>
            <a href="/basket.php">Корзина(<span id="basket-count"><?= isset($_SESSION['basket']) ? count($_SESSION['basket']) : 0?></span>) </a> 
        </div>
    </div>

    </div>
</nav>
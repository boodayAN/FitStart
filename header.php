<header>
    <div class="header-container">
        <div class="logo">
            <a href="index.php"><img src="images/logo.png" alt="FitStart Logo"></a>
        </div>
        <div class="auth-buttons">
            <?php if (isset($_SESSION['username'])): ?>
                <span>Добрый день, <?php echo $_SESSION['username']; ?></span>
                <a href="?content=cabinet.php" class="button">Личный кабинет</a>
                <a href="?content=cart.php" class="button">Корзина</a>
                <a href="?content=logout.php" class="button">Выйти</a>
            <?php else: ?>
                <a href="?content=login.php" class="button">Войти</a>
                <a href="?content=register.php" class="button">Зарегистрироваться</a>
            <?php endif; ?>
        </div>
    </div>
    <nav>
        <ul class="menu">
            <li><a href="?content=introduction.php">Введение</a></li>
            <li><a href="?content=exercises.php">Упражнения</a></li>
            <li><a href="?content=nutrition.php">Питание</a></li>
            <li><a href="?content=content.php">Товары</a></li>
            <li><a href="?content=faq.php">FAQ</a></li>
            <li><a href="?content=motivation.php">Мотивация</a></li>
        </ul>
    </nav>
</header>

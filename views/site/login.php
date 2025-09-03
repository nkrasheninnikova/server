<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
</head>
<body>
<h2>Авторизация</h2>
<h3><?= $message ?? ''; ?></h3>

<div class="wrapper">
    <main>
        <section class="authorization-logo-block">
            <div class="authorization-logo-center">
                <div class="authorization-logo">
                    <div class="authorization-logo-color">
                        <p>Logo</p>
                    </div>
                    <p>Мой университет</p>
                </div>
                <div class="authorization-logo-text">
                    <p>Каждый день на основе<br>
                        интеграции образования, науки и<br>
                        практики</p>
                </div>
            </div>
        </section>

        <section class="authorization-form-block">
            <div class="authorization-form-center">
                <div class="authorization-form-block-text">
                    <div class="authorization-form-header">
                        <a href="/">&larr;</a>
                        <p>Вход в личный кабинет</p>
                    </div>

                    <?php if (!app()->auth->check()): ?>
                        <form class="authorization-form" method="post" action="">
                            <div class="authorization-form-login">
                                <p>Логин</p>
                                <input type="text" name="login" placeholder="|Введите ваш логин">
                            </div>
                            <div class="authorization-form-password">
                                <p>Пароль</p>
                                <input type="password" name="password" placeholder="|Введите ваш пароль">
                            </div>
                            <div class="authorization-form-button">
                                <input type="submit" value="Войти">
                            </div>
                        </form>
                    <?php else: ?>
                        <h3>Добро пожаловать, <?= app()->auth->user()->name ?? 'Пользователь'; ?>!</h3>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer-section">
        <div class="footer-block">
            <div class="footer-block-menu">
                <div class="footer-block-menu-text">
                    <p>Информация</p>
                    <p>Информация</p>
                    <p>Информация</p>
                </div>
                <div class="footer-block-menu-logo">Logo</div>
                <div class="footer-block-menu-icons">
                    <img src="img/icons-vk.png" alt="VK">
                    <img src="img/icons-telegram.png" alt="Telegram">
                    <img src="img/icons-mail.png" alt="Email">
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Деканат</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="wrapper">
    <header>
        <div class="header">
            <nav class="logo-menu">
                <div class="logo">Logo</div>
                <?php if (!app()->auth::check()): ?>
                <a href="<?= app()->route->getUrl('/login') ?>" class="account">Личный кабинет</a>
                <?php else: ?>
                    <p><?= app()->auth::user()->first_name ?> | <a href="/logout">Выйти</a></p>
                <?php endif; ?>
            </nav>
        </div>
    </header>
<main>
    <?= $content ?? '' ?>
</main>
</div>
</body>
</html>

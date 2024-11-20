<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Мой блог</title>
    <link rel="stylesheet" href="/level-2/styles.css">
</head>
<body>

<table class="layout">
    <tr>
        <td colspan="2" class="header">
            Мой блог
        </td>
    </tr>
    <tr>
        <td colspan="2" style="text-align: right">
            <?php if(!empty($user)): ?>
                Привет, <?= $user->getNickname() ?>  | <a href="/level-2/users/logout">Выйти</a>
            <?php else: ?>
                <a href="/level-2/users/login">Войти</a> | <a href="/level-2/users/register">Зарегестрироваться</a>
            <? endif; ?>
        </td>
    </tr>
    <tr>
        <td>
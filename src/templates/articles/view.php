<?php include __DIR__ . '/../header.php'; ?>
    <h1><?= $article->getName() ?></h1>
    <p><?= $article->getText() ?></p>
    <p>Автор: <?= $article->getAuthor()->getNickname() ?></p>
    <?if ($user!==null && $user->isAdmin()):?>
        <a href="/level-2/articles/<?= $article->getId() ?>/edit">Редактировать</a>
    <?endif?>
<?php include __DIR__ . '/../footer.php'; ?>



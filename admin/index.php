<?php

require_once __DIR__. '/../includes/functions.php';

$articles = getAllArticles();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Blog | Maria Fernanda</title>
    <link href="https://cdn.boxicons.com/3.0.8/fonts/basic/boxicons.min.css" rel="stylesheet"/>
    <link href="/style.css" rel="stylesheet"/>
    <script src="/script.js"></script>
</head>
<body>
    <div class="container" id="main-container">
        <main class="content-list">
            <header>
                <div class="logo">
                    <i class="bx bx-face-child"></i>
                </div>
                <span class="title">All Articles</span>
                <a href="javascript:void(0)" onclick="openAddForm()" class="add">+ Add New Article</a>
            </header>

            <section class="year-group">
                <?php foreach($articles as $article): ?>
                    <?php 
                        $jsTitle = json_encode($article['title']);
                        $jsContent = json_encode($article['content']);
                    ?>
                    <div class="post-item" onclick='changeContent(<?= $jsTitle ?>, <?= $jsContent ?>)'>
                        <span class="post-date"><?= $article['date'] ?></span>
                        <span class="post-title"><?= $article['title'] ?></span>
                        <a href="javascript:void(0)"  
                        onclick='event.stopPropagation(); openEditForm(<?= $article['id'] ?>, <?= json_encode($article['title']) ?>, <?= json_encode($article['date']) ?>, <?= json_encode($article['content']) ?>)'
                        class="post-action">[ edit ]</a>
                        <a href="delete.php?id=<?= $article['id'] ?>"
                        onclick="event.stopPropagation();"
                        class="post-delete">[ delete ]</a>
                    </div>
                <?php endforeach ?>
            </section>
    
        </main>

        <aside class="details-panel" id="details-panel">
            <div onclick="closeContent()" class="close-btn">[ close ]</div>
            <div id="dynamic-content">
                <p>Add a new post here.</p>
            </div>
        </aside>

    </div>

</body>
</html>

<style>


</style>
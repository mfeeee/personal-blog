<?php

require_once __DIR__ . '/auth.php';
require_once __DIR__. '/../includes/functions.php';

$articles = getAllArticles();

include __DIR__ . '/../includes/head.php';

?>

<body>
    <div class="container" id="main-container">
        <main class="content-list">
            <header>
                <div class="logo">
                    <i class="bx bx-quote-right"></i>
                </div>
                <div class="article-header">
                    <span class="title">All Articles</span>
                    <a href="logout.php" class="logout">[ Logout ]</a>
                </div>
                <div class="new-article">
                    <a href="javascript:void(0)" onclick="openAddForm()" class="add">+ Add New Article</a>
                </div>
            </header>

            <section class="year-group">
                <?php foreach($articles as $article): ?>
                    <?php 
                        $jsTitle = json_encode($article['title']);
                        $jsContent = json_encode($article['content']);
                    ?>
                    <div class="post-item list-item ">
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

            

            <?php include __DIR__ . '/../includes/footer.php' ?>
    
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
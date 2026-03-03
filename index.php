<?php

require_once __DIR__. '/includes/functions.php';

$articles = getAllArticles();

include __DIR__ . '/includes/header.php';
?>

<section class="year-group">
    <p class="year">2026</p>
    <?php foreach($articles as $article): ?>
        <?php 
            $jsTitle = json_encode($article['title']);
            $jsContent = json_encode($article['content']);
        ?>
        <div class="post-item" onclick='changeContent(<?= $jsTitle ?>, <?= $jsContent ?>)'>
            <span class="post-date"><?= $article['date'] ?></span>
            <span class="post-title"><?= $article['title'] ?></span>
        </div>
    <?php endforeach ?>
</section>

<?php include __DIR__ . '/includes/footer.php' ?>

</main>

<aside class="details-panel" id="details-panel">
    <div onclick="closeContent()" class="close-btn">[ close ]</div>
    <div id="dynamic-content">
        <p>Select a post to see the details.</p>
    </div>
</aside>
</div>

</body>
</html>
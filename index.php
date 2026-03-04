<?php

require_once __DIR__. '/includes/functions.php';

$articles = getAllArticles();
$articlesByYear = [];

foreach ($articles as $article) {
    $year = date('Y', strtotime($article['date']));
    $articlesByYear[$year][] = $article;
}

krsort($articlesByYear);

include __DIR__ . '/includes/header.php';
?>

<?php foreach ($articlesByYear as $year => $posts): ?>
    <section class="year-group">
        <p class="year"><?= $year ?></p>

        <?php foreach($posts as $article): ?>
            <?php 
                $jsTitle = json_encode($article['title']);
                $jsContent = json_encode($article['content']);
            ?>
            <div class="post-item" onclick='changeContent(<?= $jsTitle ?>, <?= $jsContent ?>)'>
                <span class="post-date"><?= date('M d', strtotime($article['date'])) ?></span>
                <span class="post-title"><?= $article['title'] ?></span>
            </div>
        <?php endforeach ?>
    </section>
<?php endforeach ?>

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
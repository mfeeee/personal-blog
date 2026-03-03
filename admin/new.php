<?php

require_once __DIR__ . '/../includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newArticle = [
        'title' => $_POST['title'] ?? '',
        'content' => $_POST['content'] ?? '',
        'date' => $_POST['date'] ?? '',
    ];

    saveArticle($newArticle);
    
    header("Location: index.php");
    exit;
}

?>
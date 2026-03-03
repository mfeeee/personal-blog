<?php

require_once __DIR__ . '/../includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;

    $updatedArticle = [
        'title' => $_POST['title'] ?? '',
        'content' => $_POST['content'] ?? '',
        'date' => $_POST['date'] ?? '',
    ];

    if($id) {
        saveArticle($updatedArticle, $id);
    }
    
    header("Location: index.php");
    exit;
}
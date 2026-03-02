<?php

$dataPath = __DIR__ . '/../data/articles.json';

function getAllArticles() {
    global $dataPath;

    if(!file_exists($dataPath)) return [];

    $jsonData = @file_get_contents($dataPath);
    return json_decode($jsonData, true) ?? [];
    
}

function getArticleById($id) {
    $articles = getAllArticles();

    if(empty($articles)) {
        return null;
    }

    foreach($articles as $article) {
        if($article["id"] == $id) return $article;
    }
}

function saveArticle($data, $id = null) {
    global $dataPath;
    $articles = getAllArticles();

    if ($id === null) {
        $newId = empty($articles) ? 1 : max(array_column($articles, 'id')) + 1;
        $data['id'] = $newId;
        $articles[] = $data;
    } else {
        foreach($articles as &$article) {
            if($article["id"] == $id) {
                $article = array_merge($article, $data);
                break;
            }
        }
    }

    file_put_contents($dataPath, json_encode($articles, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

function deleteArticle($id) {
    global $dataPath;
    $articles = getAllArticles();
    $articleFound = false;

    foreach ($articles as $index => $article) {
        if ($article["id"] == $id) {
            unset($articles[$index]);
            $articleFound = true;
            break;
        }
    }

    if ($articleFound) {
        $articles = array_values($articles);
        file_put_contents($dataPath, json_encode($articles, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    } else {
        return null;
    }
}
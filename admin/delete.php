<?php

require_once __DIR__ . '/../includes/functions.php';

$id = htmlspecialchars($_GET['id']) ?? null;

if ($id) {
    deleteArticle($id);
}

header("Location: index.php");
exit;
?>
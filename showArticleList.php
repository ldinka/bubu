<?php

require_once "Article.php";

$article = new Article;
$articles = $article->getArticleList();
foreach ($articles as $art) {
    echo "<li>";
    echo "<h2>$art[name]</h2>";
    echo "</li>";
}

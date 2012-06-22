<?php

setlocale(LC_ALL, "ru_RU.UTF-8");

require_once("db_Mysql.php");
require_once("Template.php");
require_once("Article.php");

if (is_numeric($_GET["article_id"])) {
    $article_id = $_GET["article_id"];
    $article = Article::getArticle($article_id);
    if (!empty($article)) {
        $article = array_shift($article);
        if ($article["article_approved"]) {
            Template::showTemplate("header", array("title" => $article["article_name"]));
            Template::showTemplate("read", array("article" => $article));
            Template::showTemplate("footer");
        } else {
            header("Location: /");
        }
    } else {
        header("Location: /");
    }
} else {
    header("Location: /");
}
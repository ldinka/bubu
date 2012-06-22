<?php

session_start();

if ($_SESSION["access"]) {
    setlocale(LC_ALL, "ru_RU.UTF-8");

    require_once("db_Mysql.php");
    require_once("Template.php");
    require_once("Article.php");

    if (is_numeric($_GET["article_id"])) {
        $article_id = $_GET["article_id"];
        $article = Article::getArticle($article_id);
        if (!empty($article)) {
            $article = array_shift($article);
            Template::showTemplate("header", array("title" => $article["article_name"], "page" => "moderation"));
            Template::showTemplate("check_article", array("article" => $article));
            Template::showTemplate("footer");
        } else {
            header("Location: /moderation.php");
        }
    } else {
        header("Location: /moderation.php");
    }
} else {
    header("Location: /");
}
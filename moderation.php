<?php

session_start();

if ($_SESSION["access"]) {

    setlocale(LC_ALL, "ru_RU.UTF-8");

    require_once("db_Mysql.php");
    require_once("Template.php");
    require_once("Article.php");

    if ($_GET["what"] && is_numeric($_GET["article_id"])) {
        $article_id = $_GET["article_id"];
        switch ($_GET["what"]) {
            case "approve":
                Article::approveArticle($article_id);
                break;
            case "unapprove":
                Article::approveArticle($article_id, 0);
                break;
            case "delete":
                Article::deleteArticle($article_id);
                break;
        }
        header("Location: /moderation.php");
    }

    Template::showTemplate("header", array("title" => "Модерирование", "page" => "moderation"));
    Template::showTemplate("moderation", array("articles" => Article::getArticleList(0)));
    Template::showTemplate("footer");
} else {
    header("Location: /");
}
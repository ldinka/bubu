<?php

session_start();

if ($_SESSION["access"]) {
    require_once("db_Mysql.php");
    require_once("Article.php");
    if (is_numeric($_GET["article_id"])) {
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
    }
    header("Location: /moderation.php");
} else {
    header("Location: /");
}
<?php

setlocale(LC_ALL, "ru_RU.UTF-8");

require_once("db_Mysql.php");
require_once("Template.php");
require_once("Article.php");

$errors = 0;
if ($_POST["add_article"] == 1) {
    if (empty($_POST["article_author"]) ||
        empty($_POST["article_name"]) ||
        empty($_POST["article_content"])) {
        $errors = 1;
    } else {
        Article::addArticle($_POST);
        header("Location: /index.php?article=added");
    }
} elseif ($_GET["article"] == "added") {
    $message = 1;
}

Template::showTemplate("header", array("title" => "Буферная бухта"));
Template::showTemplate("main",
        array(
            "articles"        => Article::getArticleList(0),
            "errors"          => $errors,
            "article_author"  => $_POST["article_author"],
            "article_name"    => $_POST["article_name"], 
            "article_content" => $_POST["article_content"],
            "message"         => $message
        )
);
Template::showTemplate("footer");
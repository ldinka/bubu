<?php

session_start();

if ($_SESSION["access"]) {

    setlocale(LC_ALL, "ru_RU.UTF-8");

    require_once("db_Mysql.php");
    require_once("Template.php");
    require_once("Article.php");

    /*$errors = 0;
    if ($_POST["authorisation"] == 1) {
        if (empty($_POST["login"]) ||
            empty($_POST["password"]) ||
            !(User::checkUser($_POST["login"], $_POST["password"]))) {
            $errors = 1;
        } else {
            header("Location: ");
        }
    }*/

    Template::showTemplate("header", array("title" => "Модерирование", "page" => "moderation"));
    Template::showTemplate("moderation", array("articles" => Article::getArticleList(0)));
    Template::showTemplate("footer");
} else {
    header("Location: /");
}
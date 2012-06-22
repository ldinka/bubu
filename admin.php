<?php

session_start();

if ($_SESSION["access"]) {
    header("Location: /moderation.php");
} else {
    setlocale(LC_ALL, "ru_RU.UTF-8");

    require_once("db_Mysql.php");
    require_once("Template.php");
    require_once("User.php");

    $errors = 0;
    if ($_POST["authorisation"] == 1) {
        if (empty($_POST["login"]) ||
            empty($_POST["password"]) ||
            !(User::checkUser($_POST["login"], $_POST["password"]))) {
            $errors = 1;
        } else {
            header("Location: /moderation.php");
        }
    }

    Template::showTemplate("header", array("title" => "Вход в администраторскую зону"));
    Template::showTemplate("login", array("errors" => $errors, "message" => $message));
    Template::showTemplate("footer");
}
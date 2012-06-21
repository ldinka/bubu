<?php

setlocale(LC_ALL, "ru_RU.UTF-8");

require_once("db_Mysql.php");
require_once("Template.php");
require_once("Article.php");

Template::showTemplate("header", array("title" => "Буферная бухта"));
Template::showTemplate("main", array("articles" => Article::getArticleList(0)));
Template::showTemplate("footer");
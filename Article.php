<?php

class Article {

    var $id;
    var $author;
    var $name;
    var $intro;
    var $content;
    var $date;
    var $approved;

    function __construct() {
    }

    function getArticleList($approved = 1) {
        $db = db_Mysql::singleton();
        $data = $db->getData("SELECT * FROM articles WHERE article_approved = " . $approved);
        return $data;
    }
}

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

    public static function getArticleList($approved = 1) {
        $db = db_Mysql::singleton();
        $data = $db->getData("
            SELECT
                article_id,
                article_name,
                article_intro,
                article_author,
                article_date
            FROM articles
            WHERE article_approved = 1
               OR article_approved = " . $approved . "
            ORDER BY article_date DESC");
        return $data;
    }
}

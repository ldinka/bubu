<?php

class Article {

    var $id;
    var $author;
    var $name;
    var $intro;
    var $content;
    var $date;
    var $approved;

    private function __construct() {
    }

    public static function getArticleList($approved = 1) {
        $db = db_Mysql::singleton();
        $data = $db->getData("
            SELECT
                article_id,
                article_name,
                article_intro,
                article_author,
                article_date,
                article_approved
            FROM articles
            WHERE article_approved = 1
               OR article_approved = $approved
            ORDER BY article_date DESC");
        return $data;
    }

    public static function addArticle($article_data) {
        $db = db_Mysql::singleton();
        $author  = $db->safeData($article_data["article_author"]);
        $name    = $db->safeData($article_data["article_name"]);
        $content = $article_data["article_content"];
        $content = str_replace("\n",'',$content);
        $content = str_replace("\r",'',$content);
        $content = $db->safeData($content);
        if (empty($article_data["article_intro"])) {
            $sub_intro = mb_substr(strip_tags($content), 0, 500, "utf-8");
            $intro_arr = explode(".", $sub_intro);
            if (count($intro_arr) > 1) {
                array_pop($intro_arr);
                $intro = implode(".", $intro_arr) . ".";
            } else {
                $intro = $sub_intro . "...";
            }
        } else {
            $intro = strip_tags($article_data["article_intro"]);
            $intro = str_replace("\n",'',$intro);
            $intro = str_replace("\r",'',$intro);
            $intro = $db->safeData($intro);
        }
        $db->insertData("
            INSERT INTO articles (
                article_name,
                article_intro,
                article_author,
                article_content
            ) VALUES (
                '$name',
                '$intro',
                '$author',
                '$content'
            )
        ");
    }

    public static function approveArticle($article_id, $approved = 1) {
        $db = db_Mysql::singleton();
        $db->updateData("
            UPDATE articles
            SET article_approved = $approved
            WHERE article_id = $article_id
        ");
    }

    public static function deleteArticle($article_id) {
        $db = db_Mysql::singleton();
        $db->updateData("
            DELETE FROM articles
            WHERE article_id = $article_id
        ");
    }

    public static function  getArticle($article_id) {
        $db = db_Mysql::singleton();
        $data = $db->getData("
            SELECT
                article_id,
                article_name,
                article_author,
                article_date,
                article_intro,
                article_content,
                article_approved
            FROM articles
            WHERE article_id = $article_id
        ");
        return $data;
    }

}

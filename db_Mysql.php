<?php

class db_Mysql {

    private static $instance;
    var $data;
    var $resource;

    private function __construct() {
        require_once("config.php");
        mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die("Ошибка соединения с БД: " . mysql_error());
        mysql_select_db(DB_DATABASE) or die("Ошибка выбора базы данных: " . mysql_error());
        mysql_set_charset('utf8');
    }

    public static function singleton()
    {
        if (!isset(self::$instance)) {
            self::$instance = new db_Mysql;
        }
        return self::$instance;
    }

    public function getData($query) {
        $resource = mysql_query($query) or die("Ошибка запроса: " . mysql_error());
        while ($row = mysql_fetch_assoc($resource)) {
            $data[] = $row;
        }
        mysql_free_result($resource);
        return $data;
    }

    public function insertData($query) {
        mysql_query($query) or die("Ошибка запроса: " . mysql_error());
    }

    public function safeData($query) {
        return mysql_real_escape_string($query);
    }

    public function __destruct() {
        mysql_close();
    }

}

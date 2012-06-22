<?php

class User {

    public static function checkUser($login, $password) {
        $db = db_Mysql::singleton();
        $login = $db->safeData($login);
        $data = $db->getData("
            SELECT
                user_password
            FROM users
            WHERE user_login = '" . $login . "'");
        if (empty($data)) {
            return false;
        } else {
            $user = array_shift($data);
            $db_password = $user["user_password"];
            if ($db_password == md5($password)) {
                session_start();
                $_SESSION["access"] = true;
                return true;
            }
        }
        return false;
    }
}

<?php

require_once("db_Mysql.php");
require_once("Template.php");

Template::showTemplate("header", array("title" => "Буферная бухта"));
Template::showTemplate("main");
Template::showTemplate("footer");
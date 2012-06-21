<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title><?=$title?></title>
    <link rel="stylesheet" type="text/css" href="css/styles.css"/>
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            $("#add_article").validate({
                rules: {
                    article_author:  "required",
                    article_name:    "required",
                    article_content: "required"
                },
                messages: {
                    article_author:  "Пожалуйста, введите автора статьи",
                    article_name:    "Пожалуйста, введите название статьи",
                    article_content: "Пожалуйста, введите текст статьи"
                }
            });
        });
    </script>
</head>
<body>
    <div id="content">
        <div id="header">
            <h1><?=$title?></h1>
        </div>
        <div id="body">
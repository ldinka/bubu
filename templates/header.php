<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title><?=$title?></title>
    <link rel="stylesheet" type="text/css" href="/css/styles.css"/>
    <script type="text/javascript" src="/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="/js/functions.js"></script>
    <script type="text/javascript" src="http://userapi.com/js/api/openapi.js?49"></script>
    <script type="text/javascript">
        VK.init({apiId: 3007914, onlyWidgets: true});
    </script>
    <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
</head>
<body>

<div<?if($page=="moderation"){?> id="admin_area"<?}else{?> id="content"<?}?>>
    <div id="header">
        <h1><?=$title?></h1>
    </div>
    <div id="body">
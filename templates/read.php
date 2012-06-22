<p><a href="/moderation.php">&lt;&lt; Вернуться</a></p>
<p>&nbsp;</p>
<?=$article["article_content"];?>
<p class="left author">Автор: <?=$article["article_author"]?></p>
<p class="right date"><?=strftime("%e %b %Y", strtotime($article["article_date"]))?></p>
<div class="clear"></div>
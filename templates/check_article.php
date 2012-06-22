<p><a href="/moderation.php">&lt;&lt; Вернуться</a></p>
<p>&nbsp;</p>
<p><strong>Автор:</strong> <?=$article["article_author"]?></p>
<p><strong>Дата:</strong> <?=strftime("%e %b %Y", strtotime($article["article_date"]))?></p>
<p>
    <strong>Интро:</strong> <?=$article["article_intro"];?>
</p>
<p>
    <strong>Текст:</strong>
</p>
    <?=$article["article_content"];?>

<p>
    <strong>Действия:</strong>
    <?if($article["article_approved"]){?>
    <a href="do.php?what=unapprove&article_id=<?=$article["article_id"]?>" class="space">Не&nbsp;публиковать</a>
    <?}else {?>
    <a href="do.php?what=approve&article_id=<?=$article["article_id"]?>">Опубликовать</a>
    <?}?>
    <a class="delete" href="do.php?what=delete&article_id=<?=$article["article_id"]?>">Удалить</a>
</p>
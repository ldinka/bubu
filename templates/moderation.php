<table>
    <tr>
        <th>Дата</th>
        <th>Автор</th>
        <th>Название</th>
        <th>Интро</th>
        <th>Действия</th>
    </tr>
    <?foreach($articles as $article){?>
        <tr class="<?if($article["article_approved"]){?>approved<?}else {?>unapproved<?}?>">
            <td><?=strftime("%e %b %Y", strtotime($article["article_date"]))?></td>
            <td><?=$article["article_author"]?></td>
            <td>
                <a href="check_article.php?article_id=<?=$article["article_id"]?>">
                    <?=$article["article_name"]?>
                </a>
            </td>
            <td>
                <?=$article["article_intro"];?><br/>
                <a href="check_article.php?article_id=<?=$article["article_id"]?>">
                    Читать статью
                </a>
            </td>
            <td>
                <a href="check_article.php?article_id=<?=$article["article_id"]?>">
                    Читать
                </a><br/><br/>
                <?if($article["article_approved"]){?>
                <a href="do.php?what=unapprove&article_id=<?=$article["article_id"]?>">Не&nbsp;публиковать</a>
                <?}else {?>
                <a href="do.php?what=approve&article_id=<?=$article["article_id"]?>">Опубликовать</a>
                <?}?>
                <br/><br/>
                <a class="delete" href="do.php?what=delete&article_id=<?=$article["article_id"]?>">Удалить</a>
                <br/><br/>
            </td>
        </tr>
    <?}?>
</table>
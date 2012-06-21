<ul id="articles">
    <?foreach($articles as $article){?>
        <li>
            <h2>
                <a href="read.php?article_id=<?=$article["article_id"]?>">
                    <?=$article["article_name"]?>
                </a>
            </h2>
            <p>
                <?=$article["article_intro"];?>
            </p>
            <p>
                <a href="read.php?article_id=<?=$article["article_id"]?>" class="read_more">
                    Читать дальше
                </a>
            </p>
            <p class="left author">Автор: <?=$article["article_author"]?></p>
            <p class="right date"><?=strftime("%e %b %Y", strtotime($article["article_date"]))?></p>
            <div class="clear"></div>
        </li>
    <?}?>
</ul>

<fieldset>
    <legend>Добавить статью</legend>
    <form action="add_article.php" method="post">
        <p>
            <label for="article_author" class="">Автор <span class="required">*</span></label>
            <input type="text" name="article_author" id="article_author"/>
        </p>
        <p>
            <label for="article_name" class="">Название статьи <span class="required">*</span></label>
            <input type="text" name="article_name" id="article_name"/>
        </p>
        <p>
            <label for="article_intro">Интро</label>
            <textarea name="article_intro" id="article_intro"></textarea>
        </p>
        <p>
            <label for="article_content" class="">Статья <span class="required">*</span></label>
            <textarea name="article_content" id="article_content"></textarea>
        </p>
        <p>
            <button type="submit">Отправить</button>
        </p>
    </form>
</fieldset>
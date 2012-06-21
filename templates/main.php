<? if($message){?>
<p class="message ok">Спасибо за Вашу статью, она появится здесь, если пройдет проверку модератором.</p>
<?}?>
<? if($errors){?>
<p class="message error"><a href="#fieldset_form">К сожалению, форма содержит ошибки.</a></p>
<?}?>
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

<fieldset id="fieldset_form">
    <legend>Добавить статью</legend>
    <form action="index.php" method="post" id="add_article">
        <p>
            <label for="article_author">Автор <span class="required">*</span></label>
            <input type="text" name="article_author" id="article_author" value="<?=$article_author?>"<?if($errors && empty($article_author)){?> class="error"<?}?>"/>
        </p>
        <p>
            <label for="article_name">Название статьи <span class="required">*</span></label>
            <input type="text" name="article_name" id="article_name" value="<?=$article_name?>"<?if($errors && empty($article_name)){?> class="error"<?}?>/>
        </p>
        <p>
            <label for="article_intro">Интро</label>
            <textarea name="article_intro" id="article_intro"></textarea>
        </p>
        <p>
            <label for="article_content">Статья <span class="required">*</span></label>
            <textarea name="article_content" id="article_content" class="ckeditor<?if($errors && empty($article_content)){?> error<?}?>"><?=$article_content?></textarea>
        </p>
        <input type="hidden" name="add_article" value="1"/>
        <p>
            <button type="submit">Отправить</button>
        </p>
    </form>
</fieldset>
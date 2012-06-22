<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<p><a href="/moderation.php">&lt;&lt; Вернуться</a></p>
<p>&nbsp;</p>
<?=$article["article_content"];?>
<div class="social_buttons">
<html xmlns:fb="http://ogp.me/ns/fb#">
<fb:like href="<?=$url_article?>" send="false" layout="button_count" width="150" show_faces="false" font="tahoma"></fb:like>
</div>

<p class="left author">Автор: <?=$article["article_author"]?></p>
<p class="right date"><?=strftime("%e %b %Y", strtotime($article["article_date"]))?></p>
<div class="clear"></div>
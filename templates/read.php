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

<!-- facebook -->
<span class="fb_button_like left">
<html xmlns:fb="http://ogp.me/ns/fb#">
<fb:like href="<?=$url_article?>" send="false" layout="button_count" width="100" show_faces="false" font="tahoma"></fb:like>
</span>

<!-- twitter -->
<span class="twitter_button_like left">
<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>

<!-- vk -->
<div id="vk_like" class="left" style="clear: none !important;"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "mini", height: 20});
</script>

<div class="clear"></div>
<p class="left author">Автор: <?=$article["article_author"]?></p>
<p class="right date"><?=strftime("%e %b %Y", strtotime($article["article_date"]))?></p>
<div class="clear"></div>
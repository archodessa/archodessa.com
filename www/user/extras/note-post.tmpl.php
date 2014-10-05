

<? if (!$content['sign-in']['required?']) { ?>
<? if (array_key_exists ('only', $content['notes'])) { ?>

<style>
.social-links a { border-bottom: none; }
</style>


<div class="addthis_toolbox addthis_default_style" style="">
<div class="social-links"><table style="margin: 0 0 0 0" border=0>
<tr><td>
<a class="addthis_button_facebook_like" fb:like:layout="button_count" fb:like:width="75" fb:like:locale="en_US"></a>
</td>
<td>
<script type="text/javascript">
  VK.init({
    apiId: 3082320,
    onlyWidgets: true
  });
</script>

<div id="vk_like" style="margin-right:-25px;"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "mini", height: 20});
</script>
</td>
<td>
<a class="addthis_button_tweet"></a>
</td>
</div>
</tr>
</table></div>
<!--
<a href="http://twitter.com/intent/tweet?text=<? $URL="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; echo $URL; ?>"><img src="themes/renovatio/images/social-button-tw.gif"></a>
-->

<!--<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>-->
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-5022da33200b6adf"></script>
<!-- AddThis Button END -->

<? } ?>
<? } ?>
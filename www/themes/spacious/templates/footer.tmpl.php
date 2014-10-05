<div class="bottom-line"></div>

<? _X ('footer-pre') ?>

<div class="footer">

<div class="visual-login">
<? if (!$content['sign-in']['done?'] and !$content['sign-in']['necessary?']) { ?>
<a id="e2-visual-login nu" href="<?= $content['hrefs']['sign-in'] ?>"><span class="i-login"></span></a>
<? } ?>
</div>

<? _T ('copyrights') ?>

<? _T ('engine-info') ?>

</div>

<? _X ('footer-post') ?>

<div class="bottom-spacer"></div>

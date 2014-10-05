<? // mui ?>

<meta http-equiv="Content-Type" content="text/html; charset=<?= $content['output-charset'] ?>" />

<base href="<?= $content['base-href'] ?>" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

<? foreach ($content['stylesheets'] as $stylesheet): ?>
<link rel="stylesheet" type="text/css" href="<?= $stylesheet ?>" />
<? endforeach ?>

<? foreach ($content['newsfeeds'] as $newsfeed): ?>
<link rel="alternate" type="application/rss+xml" title="<?= $newsfeed['title'] ?>" href="<?= $newsfeed['href'] ?>" />
<? endforeach ?>

<? foreach ($content['navigation-links'] as $link): ?>
<link rel="<?= $link['rel'] ?>" id="<?= $link['id'] ?>" href="<?= $link['href'] ?>" />
<? endforeach ?>

<? foreach ($content['scripts'] as $script): ?>
<script type="text/javascript" src="<?= $script ?>"></script>
<? endforeach ?>

<script type="text/javascript" src="/user/js/jquery.lazyload.mini.js"></script>
<script type="text/javascript">
	/*
	jQuery(document).ready(function($){
	  if (navigator.platform == "iPad") return;
	  jQuery("img").not(".cycle img").lazyload({
		effect: "fadeIn",
		placeholder: "/themes/renovatio/images/gray.gif"
	  });
	});
	*/
</script>

<? _T ('head-extras') ?>

<? if (array_key_exists ('robots', $content)): ?>
<meta name="robots" content="<?= $content['robots'] ?>" />
<? endif ?>

<? if (array_key_exists ('summary', $content)): ?>
<meta name="description" content="<?= $content['summary'] ?>" />
<? endif ?>

<link rel="stylesheet" href="system/library/fotorama/fotorama.css">
<script type="text/javascript" src="system/library/fotorama/fotorama.js"></script>


<!-- Put this script tag to the <head> of your page -->
<script type="text/javascript" src="http://userapi.com/js/api/openapi.js?52"></script>

<script type="text/javascript">
  VK.init({apiId: API_ID, onlyWidgets: true});
</script>

<script src="http://vkontakte.ru/js/api/openapi.js" type="text/javascript" charset="windows-1251"></script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34184058-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<title><?= $content['title'] ?></title>
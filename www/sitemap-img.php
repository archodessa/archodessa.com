<xml version="1.0" encoding="UTF-8">
    <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
<?php
$list = json_decode(iconv("windows-1251", "UTF-8", file_get_contents("sitemap-img.json")), true);
foreach($list as $url) { ?>
    <url>
        <loc><?=$url["url"]?></loc>
        <?php foreach($url["imgs"] as $img) { ?>
        <image:image>
            <image:loc><?=$img["loc"]?></image:loc>
            <image:title><?=$img["title"]?></image:title>
            <image:caption><?=$img["caption"]?></image:caption>
        </image:image>
        <?php } ?>
    </url>
<?php }
?>
    </urlset>
</xml>
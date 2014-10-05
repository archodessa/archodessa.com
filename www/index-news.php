<?php
	
	define('SITE_CHARSET',							'windows-1251');
	define('SITE_MULTILANGS', 						FALSE);
	if (!defined('CHARACTER_SET_CLIENT'))			define ('CHARACTER_SET_CLIENT',			'cp1251');
	if (!defined('CHARACTER_SET_CONNECTION'))		define ('CHARACTER_SET_CONNECTION',		'cp1251');
	if (!defined('CHARACTER_SET_RESULTS'))			define ('CHARACTER_SET_RESULTS',		'cp1251');
	if (!defined('COLLATION_CONNECTION'))			define ('COLLATION_CONNECTION',			'cp1251_general_ci');

	$settings = unserialize(file_get_contents('user/settings.psa'));
	
	define ('SQL_HOST',			$settings['db']['server']);
	define ('SQL_USER',			$settings['db']['user_name']);
	define ('SQL_PWD',			$settings['db']['passw']);
	define ('SQL_DB',			$settings['db']['name']);
	
	include_once ('libs/sql.php');
	include_once ('libs/news.php');
	
	?><div class="index-news"><?
	?><ul><?
	$result = mysql_query("select * from `arch_News` where new_enabled='Y' and (new_show_index='always' or (new_show_index='when-actual' and now()<=new_actual_date)) order by new_created desc");
	$i = 0;
	while ($new = mysql_fetch_array($result, MYSQL_ASSOC))
	{
		$new['first']	= ($i == 0);
		$new['last']	= ($i == count($news)-1);
		
		$new['new_href']	= ("/news/$new[new_link]/");
		if ($new['new_source']) {
			//$new['new_a']		= make_anchor($new['new_name'], $new['new_href']);
			$new['new_a']		= make_anchor($new['new_name'], $new['new_source']);
		} else {
			$new['new_a']		= clear_anchor($new['new_name']);
		}
		$new['new_name']	= clear_anchor($new['new_name']);
					
		//$date					= decompile_date ('new_created', $new['new_created']);
		//$new['new_created']		= date(NEWS_INDEX_DATE_FORMAT, strtotime($new['new_created']));
		
		?><li<?=($i ? '' : ' class="first"')?>><?
			?><?=$new['new_a']?><?
		?></li><?
		$i++;
	}
	?></ul><?
	?><a style="font-weight: bold; display: inline-block; margin-top: 15px;" href="http://vk.com/archodessa">Все новости</a><?
	?></div><?
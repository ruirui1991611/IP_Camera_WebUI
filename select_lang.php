<?php
	$lang = $_REQUEST['lang'];
	if (empty($lang)) { // 首次进入 $lang 为空, 设置为浏览器当前的语言
		$browser_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
		if ($browser_lang == "zh") {
			$lang = "zh_CN";
		} else {
			$lang = "en_US";
		}
	}
	putenv("LANG=".$lang);
	setlocale(LC_ALL, $lang);
	$domain = 'language';
    // 绑定相应目录
	bindtextdomain($domain, dirname(__FILE__).'/locale');
    // 设置字符编码格式
	bind_textdomain_codeset($domain, 'UTF-8');
	textdomain($domain);
?>

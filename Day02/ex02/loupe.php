#!/usr/bin/php
<?php
	function	changetitle($match)
	{
		return("title=\"" . $match[1] = strtoupper($match[1]) . "\"");
	}
	function	linkurl($match)
	{
		return(">" . $match[1] = strtoupper($match[1]) . "<$match[2]>");
	}
	function	lasturl($match)
	{
		return(" $match[1]>" . $match[2] = strtoupper($match[2]) . "<$match[3]<");
	}
	$handle = file_get_contents($argv[1]);
	$handle = preg_replace_callback('/title="([^"]+)"/', "changetitle", $handle);
	$handle = preg_replace_callback('/ (.*)>(.*)<(.*)</', "lasturl", $handle);
	echo $handle = preg_replace_callback('/>([^"]+)<(\/a)>/', "linkurl", $handle);
?>

<?php
	//ws://167.160.188.2:3000
	$version="18.7.8.23.31";
	$wsaddr="118.89.102.104";
	//$wsaddr="wenkaiming.tpddns.cn";
	$wsport="3000";
	//$wsport="3333";
	function getUrlContent($url){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_USERAGENT, 'getupdatepackage');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
		curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		$data = curl_exec($ch);
		$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);
		return ($httpcode>=200 && $httpcode<300) ? $data : false;
	}
?>
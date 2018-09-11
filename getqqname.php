<?php
	//error_reporting(0);
	if(isset($_GET['qqnum'])&&is_numeric($_GET['qqnum'])){
		$url="http://r.pengyou.com/fcg-bin/cgi_get_portrait.fcg?uins=".$_GET['qqnum']."&callback=portraitCallBack";
		$callbackstr=mb_convert_encoding(file_get_contents($url),'utf-8','gbk');
		if(strpos($callbackstr,'portraitCallBack(')!==false){
			$jsondata=rtrim(ltrim(trim($callbackstr),'portraitCallBack('),')');
			//echo $jsondata;
			$jsondecodearr=json_decode($jsondata);
			foreach($jsondecodearr as $qqnum=>$qqarr){
				if($qqnum==$_GET['qqnum']){
					if(isset($qqarr[6])){
						echo $qqarr[6];
					}
					//print_r($qqarr);
				}
			}
			//print_r($jsondecodearr[]));
		}else{
			//echo $callbackstr;
		}
		
	}
	
?>
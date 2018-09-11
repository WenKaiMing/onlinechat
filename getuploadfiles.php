<?php
	header("Content-Type:text/html;charset=UTF-8");
	if(file_exists('uploadlist.php')){
		include 'uploadlist.php';
	}else{
		die('');
	}
	
	if(!isset($filelist)){
		file_put_contents("uploadlist.php", "<?php\n\t\$filelist=array();//".file_get_contents('uploadlist.php'), LOCK_EX);
		die('<script>document.body.innerHTML="<center><h1>loading</h1></center>";location.reload();</script>');
	}
	function list_dir($dir){//扫描目录返回文件列表
		$result = array();
		if (is_dir($dir)){
			$file_dir = scandir($dir);
			foreach($file_dir as $file){
				if ($file == '.' 
				||  $file == '..'){
					continue;
				}elseif(is_dir($dir.$file)){
					$result = array_merge($result, list_dir($dir.$file.'/'));
				}else{
					array_push($result, $dir.$file);
				}
			}
		}
		return $result;
	}
	
	function time2string($second){//秒 转为 天 时 分 秒
		$day = floor($second/(3600*24));
		$second = $second%(3600*24);//除去整天之后剩余的时间
		$hour = floor($second/3600);
		$second = $second%3600;//除去整小时之后剩余的时间 
		$minute = floor($second/60);
		$second = $second%60;//除去整分钟之后剩余的时间 
		//返回字符串
		return $day.'天'.$hour.'小时'.$minute.'分'.$second.'秒';
	}
	
	function freshlist(){
		global $filelist;
		$savestr="<?php\n\t\$filelist=array();";
		$returnstr="<table>";
		$current_time=time();
		$updatetag=false;
		$filecounter=0;
		$filetr='';
		foreach($filelist as $k=>$file){
			if($current_time-$file[0]>=3600){//设置文件超时为1小时
				@unlink('upload/'.$file[0]);
				$updatetag=true;
				continue;
			}elseif(!file_exists('upload/'.$file[0])){//如果文件不存在
				$updatetag=true;
				continue;
			}
			$savestr.="\n\t\$filelist[]=array('".$file[0]."','".$file[1]."','".$file[2]."');";
			$filetr.="<tr><td><a href='download.php?token=".md5($file[0])."&file=".$file[2]."'>".$file[2]."</a></td><td>".time2string(3600-($current_time-$file[0]))."</td></tr>";
			$filecounter++;
		}
		if($filecounter<=0){
			$datalist=list_dir('./upload/');
			foreach($datalist as $onedata){
				@unlink($onedata);
			}
		}
		$returnstr.="<tr><td>当前可下载文件总数：<font color='red'>".$filecounter."</font></td><td>剩余时间</td></tr>";
		$returnstr.=$filetr;
		$returnstr.="</table>";
		if($updatetag){
			file_put_contents("uploadlist.php", $savestr, LOCK_EX);
		}
		return $returnstr;
	}
	echo freshlist();
?>
<?php
	if(!isset($_GET['token'])||$_GET['token']==""){
		die('no file selected');
	}
	if(file_exists('uploadlist.php')){
		include 'uploadlist.php';
	}else{
		die('no file available!');
	}
	
	if(!isset($filelist)){
		file_put_contents("uploadlist.php", "<?php\n\t\$filelist=array();//".file_get_contents('uploadlist.php'), LOCK_EX);
		die('<script>document.body.innerHTML="<center><h1>downloading</h1></center>";location.reload();</script>');
	}
	function downloadfile($filename,$filetype,$filerealname){
		$filename='upload/'.$filename;
		if(!file_exists($filename)){
			exit("无法找到文件(也许文件已过期)");
		}
		header("Cache-Control: public");
		header("Content-Description: File Transfer");
		header('Content-disposition: attachment; filename='.$filerealname); //文件名  
		header("Content-Type: ".$filetype); //以哪种格式输出
		header("Content-Transfer-Encoding: binary"); //告诉浏览器，这是二进制文件  
		header('Content-Length: '. filesize($filename)); //告诉浏览器，文件大小  
		@readfile($filename);
	}
	function freshlist(){
		global $filelist;
		$savestr="<?php\n\t\$filelist=array();";
		$current_time=time();
		$updatetag=false;
		foreach($filelist as $k=>$file){
			if($current_time-$file[0]>3600){//设置文件超时为1小时
				unlink('upload/'.$file[0]);
				$updatetag=true;
				continue;
			}
			$savestr.="\n\t\$filelist[]=array('".$file[0]."','".$file[1]."','".$file[2]."');";
		}
		if($updatetag){
			file_put_contents("uploadlist.php", $savestr, LOCK_EX);
		}
	}
	freshlist();
	foreach($filelist as $k=>$file){
		if(md5($file[0])==$_GET['token']){
			downloadfile($file[0],$file[1],$file[2]);
			exit();
		}
	}
	echo "无法找到文件(也许文件已过期)";
?>